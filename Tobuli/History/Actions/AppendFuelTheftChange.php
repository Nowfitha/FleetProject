<?php

namespace Tobuli\History\Actions;

class AppendFuelTheftChange extends ActionAppend
{
    protected $sensors = [];
    protected $min_fuel_thefts;
    protected $fuel_detect_sec_after_stop;

    static public function required()
    {
        return [
            AppendFuelChange::class,
            AppendFuelTanksDiff::class,
            AppendMoveStartAt::class,
            AppendLastStopAt::class,
        ];
    }

    public function boot()
    {
        $this->min_fuel_thefts = $this->history->config('min_fuel_thefts');
        $this->fuel_detect_sec_after_stop = $this->getDevice()->fuel_detect_sec_after_stop;
    }

    public function proccess(& $position)
    {
        if (empty($position->fuel_change))
            return;

        foreach ($position->fuel_change as $sensor_id => $change) {
            if (empty($change['end']))
                continue;

            $sensor = $this->getSensorByID($sensor_id);
            $min_change = (-1) * $this->getMinFuelChange($sensor);

            // continue differance change
            if ($change['diff'] > $min_change)
                continue;

            // past time differance change
            if ($change['end']->fuel_tanks_diff[$sensor_id] > $min_change)
                continue;

            if (!$this->checkFillingTiming($change['end'])) {
                continue;
            }

            $prevTank = $change['start']->fuel_tanks[$sensor->id];
            $diff = $change['diff'];

            $position->fuel_theft = [
                'sensor_id' => $sensor->id,
                'name'      => $sensor->name,
                'previous'  => $prevTank,
                'current'   => $prevTank + $diff,
                'diff'      => $diff,
                'unit'      => $sensor->unit_of_measurement
            ];

            return;
        }
    }

    protected function checkFillingTiming($position): bool
    {
        if (!$this->fuel_detect_sec_after_stop) {
            return true;
        }

        $positionTime = strtotime($position->time);

        if ($position->move_start_at
            && $positionTime - strtotime($position->move_start_at) <= $this->fuel_detect_sec_after_stop
        ) {
            return true;
        }

        return $position->last_stop_at
            && $positionTime - strtotime($position->last_stop_at) <= $this->fuel_detect_sec_after_stop;
    }

    protected function getSensorByID($sensor_id) {
        return $this->getDevice()->sensors->firstWhere('id', $sensor_id);
    }

    protected function getMinFuelChange($sensor)
    {
        if ($this->min_fuel_thefts != 10)
            return $this->min_fuel_thefts;

        $max_tank = $sensor->getMaxTankValue();

        if ($max_tank < 100)
            return $this->min_fuel_thefts;

        return $max_tank * 0.1;
    }
}