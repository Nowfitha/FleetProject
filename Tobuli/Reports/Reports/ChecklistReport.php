<?php

namespace Tobuli\Reports\Reports;

use Tobuli\Entities\User;
use Tobuli\Reports\DeviceReport;

class ChecklistReport extends DeviceReport
{
    const TYPE_ID = 50;

    protected $formats = ['html', 'json'];

    public static function isUserEnabled(?User $user): bool
    {
        return ($user->perm('checklist', 'view')
                || $user->perm('checklist_template', 'view')
                || $user->perm('checklist_row_management', 'view'))
            && parent::isUserEnabled($user);
    }

    public static function isAvailable(): bool
    {
        return config('addon.checklists');
    }

    public function typeID()
    {
        return self::TYPE_ID;
    }

    public function title()
    {
        return trans('front.checklist_report');
    }

    protected function generateDevice($device)
    {
        $data = [];
        $services = $device
            ->services()
            ->with(['checklists' => function ($q) {
                    if ($this->parameters['status'] == 'complete') {
                        $q->complete();
                    } elseif ($this->parameters['status'] == 'incomplete') {
                        $q->incomplete();
                    } elseif ($this->parameters['status'] == 'failed') {
                        $q->failed();
                    }
                },
                'checklists.rows' => function ($q) {
                    if ($this->parameters['status'] == 'failed') {
                        $q->failed();
                    }
                },
                'checklists.rows.images',
            ])
            ->whereHas('checklists', function ($q) {
                if ($this->parameters['status'] == 'complete') {
                    $q->complete();
                } elseif ($this->parameters['status'] == 'incomplete') {
                    $q->incomplete();
                } elseif ($this->parameters['status'] == 'failed') {
                    $q->failed();
                }
            })
            ->get();

        foreach ($services as $service) {
            $data[] = [
                'service' => $service,
                'checklists' => $service->checklists,
            ];
        }

        return [
            'meta' => $this->getDeviceMeta($device),
            'data' => $data,
        ];
    }
}
