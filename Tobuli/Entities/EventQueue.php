<?php

namespace Tobuli\Entities;

use Formatter;

class EventQueue extends AbstractEntity
{
    protected $table = 'events_queue';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'device_id',
        'data',
        'type'
    ];

    protected $casts = [
        'data' => 'array'
    ];

    protected $appends = [
        'event_message'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function device()
    {
        return $this->hasOne(Device::class, 'id', 'device_id');
    }

    public function getEventMessageAttribute()
    {
        return $this->eventMessage();
    }

    public function eventMessage()
    {
        switch ($this->type) {
            case Event::TYPE_ZONE_IN:
            case Event::TYPE_ZONE_OUT:
                $message = trans('front.' . $this->type);
                break;
            case Event::TYPE_OVERSPEED:
                $message = trans('front.' . $this->type) . ' ' . Formatter::speed()->human($this->data['overspeed_speed']);
                break;
            case Event::TYPE_DRIVER:
                $message = trans('front.driver_alert', ['driver' => $this->data['driver']]);
                break;
            case Event::TYPE_DRIVER_UNAUTHORIZED:
                $message = trans('front.driver_change_unauthorized') . '(' .$this->data['driver'] . ')';
                break;
            case Event::TYPE_DRIVER_AUTHORIZED:
                $message = trans('front.driver_change_authorized') . '(' .$this->data['driver'] . ')';
                break;
            case Event::TYPE_STOP_DURATION:
                $message = trans('front.stop_duration') . '(' . $this->data['stop_duration'] . trans('front.minutes') . ')';
                break;
            case Event::TYPE_TIME_DURATION:
                $message = trans('front.time_duration') . '('. $this->data['time_duration'] . trans('front.minutes').')';
                break;
            case Event::TYPE_OFFLINE_DURATION:
                $message = trans('front.offline_duration') . '('. $this->data['offline_duration'] . trans('front.minutes').')';
                break;
            case Event::TYPE_MOVE_DURATION:
                $message = trans('front.move_duration') . '('. $this->data['move_duration'] . trans('front.minutes').')';
                break;
            case Event::TYPE_IDLE_DURATION:
                $message = trans('front.idle_duration') . '(' . $this->data['idle_duration'] . trans('front.minutes') . ')';
                break;
            case Event::TYPE_IGNITION_DURATION:
                $message = trans('front.ignition_duration') . '(' . $this->data['ignition_duration'] . trans('front.minutes') . ')';
                break;
            case Event::TYPE_EXPIRING_DEVICE:
            case Event::TYPE_EXPIRING_USER:
            case Event::TYPE_EXPIRING_SIM:
                $message = trans('front.expires_in_days', ['s' => settings('main_settings.expire_notification.days_before')]);
                break;
            case Event::TYPE_EXPIRED_DEVICE:
            case Event::TYPE_EXPIRED_USER:
            case Event::TYPE_EXPIRED_SIM:
                $message = trans('front.expired');
                break;
            case Event::TYPE_FUEL_FILL:
                $message = trans('front.fuel_fillings');
                break;
            case Event::TYPE_FUEL_THEFT:
                $message = trans('front.fuel_thefts');
                break;

            default:
                $message = $this->data['message'];
        }

        return $message;
    }
}
