<?php namespace Tobuli\Repositories;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;
use Tobuli\Repositories\PoiGroup\EloquentPoiGroupRepository;
use Tobuli\Repositories\PoiGroup\PoiGroupRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('Tobuli\Repositories\PositionGeofence\PositionGeofenceRepositoryInterface', 'Tobuli\Repositories\PositionGeofence\EloquentPositionGeofenceRepository');
        $this->app->bind('Tobuli\Repositories\EventCustom\EventCustomRepositoryInterface', 'Tobuli\Repositories\EventCustom\EloquentEventCustomRepository');
        $this->app->bind('Tobuli\Repositories\Subscription\SubscriptionRepositoryInterface', 'Tobuli\Repositories\Subscription\EloquentSubscriptionRepository');
        $this->app->bind('Tobuli\Repositories\EmailTemplate\EmailTemplateRepositoryInterface', 'Tobuli\Repositories\EmailTemplate\EloquentEmailTemplateRepository');
        $this->app->bind('Tobuli\Repositories\SmsTemplate\SmsTemplateRepositoryInterface', 'Tobuli\Repositories\SmsTemplate\EloquentSmsTemplateRepository');
        $this->app->bind('Tobuli\Repositories\Poi\PoiRepositoryInterface', 'Tobuli\Repositories\Poi\EloquentPoiRepository');
        $this->app->bind('Tobuli\Repositories\MapIcon\MapIconRepositoryInterface', 'Tobuli\Repositories\MapIcon\EloquentMapIconRepository');
        $this->app->bind('Tobuli\Repositories\Config\ConfigRepositoryInterface', 'Tobuli\Repositories\Config\EloquentConfigRepository');
        $this->app->bind('Tobuli\Repositories\AlertDevice\AlertDeviceRepositoryInterface', 'Tobuli\Repositories\AlertDevice\EloquentAlertDeviceRepository');
        $this->app->bind('Tobuli\Repositories\AlertGeofence\AlertGeofenceRepositoryInterface', 'Tobuli\Repositories\AlertGeofence\EloquentAlertGeofenceRepository');
        $this->app->bind('Tobuli\Repositories\AlertFuelConsumption\AlertFuelConsumptionRepositoryInterface', 'Tobuli\Repositories\AlertFuelConsumption\EloquentAlertFuelConsumptionRepository');
        $this->app->bind('Tobuli\Repositories\Alert\AlertRepositoryInterface', 'Tobuli\Repositories\Alert\EloquentAlertRepository');
        $this->app->bind('Tobuli\Repositories\User\UserRepositoryInterface', 'Tobuli\Repositories\User\EloquentUserRepository');
        $this->app->bind('Tobuli\Repositories\Device\DeviceRepositoryInterface', 'Tobuli\Repositories\Device\EloquentDeviceRepository');
        $this->app->bind('Tobuli\Repositories\TraccarDevice\TraccarDeviceRepositoryInterface', 'Tobuli\Repositories\TraccarDevice\EloquentTraccarDeviceRepository');
        $this->app->bind('Tobuli\Repositories\DeviceIcon\DeviceIconRepositoryInterface', 'Tobuli\Repositories\DeviceIcon\EloquentDeviceIconRepository');
        $this->app->bind('Tobuli\Repositories\DeviceFuelMeasurement\DeviceFuelMeasurementRepositoryInterface', 'Tobuli\Repositories\DeviceFuelMeasurement\EloquentDeviceFuelMeasurementRepository');
        $this->app->bind('Tobuli\Repositories\Timezone\TimezoneRepositoryInterface', 'Tobuli\Repositories\Timezone\EloquentTimezoneRepository');
        $this->app->bind('Tobuli\Repositories\DeviceGroup\DeviceGroupRepositoryInterface', 'Tobuli\Repositories\DeviceGroup\EloquentDeviceGroupRepository');
        $this->app->bind('Tobuli\Repositories\UserDriver\UserDriverRepositoryInterface', 'Tobuli\Repositories\UserDriver\EloquentUserDriverRepository');
        $this->app->bind('Tobuli\Repositories\DeviceSensor\DeviceSensorRepositoryInterface', 'Tobuli\Repositories\DeviceSensor\EloquentDeviceSensorRepository');
        $this->app->bind('Tobuli\Repositories\DeviceService\DeviceServiceRepositoryInterface', 'Tobuli\Repositories\DeviceService\EloquentDeviceServiceRepository');
        $this->app->bind('Tobuli\Repositories\Report\ReportRepositoryInterface', 'Tobuli\Repositories\Report\EloquentReportRepository');
        $this->app->bind('Tobuli\Repositories\UserSmsTemplate\UserSmsTemplateRepositoryInterface', 'Tobuli\Repositories\UserSmsTemplate\EloquentUserSmsTemplateRepository');
        $this->app->bind('Tobuli\Repositories\UserGprsTemplate\UserGprsTemplateRepositoryInterface', 'Tobuli\Repositories\UserGprsTemplate\EloquentUserGprsTemplateRepository');
        $this->app->bind('Tobuli\Repositories\Route\RouteRepositoryInterface', 'Tobuli\Repositories\Route\EloquentRouteRepository');
        $this->app->bind('Tobuli\Repositories\SmsEventQueue\SmsEventQueueRepositoryInterface', 'Tobuli\Repositories\SmsEventQueue\EloquentSmsEventQueueRepository');
        $this->app->bind('Tobuli\Repositories\GeofenceGroup\GeofenceGroupRepositoryInterface', 'Tobuli\Repositories\GeofenceGroup\EloquentGeofenceGroupRepository');
        $this->app->bind('Tobuli\Repositories\TrackerPort\TrackerPortRepositoryInterface', 'Tobuli\Repositories\TrackerPort\EloquentTrackerPortRepository');
        $this->app->bind('Tobuli\Repositories\BillingPlan\BillingPlanRepositoryInterface', 'Tobuli\Repositories\BillingPlan\EloquentBillingPlanRepository');
        $this->app->bind('Tobuli\Repositories\SensorGroup\SensorGroupRepositoryInterface', 'Tobuli\Repositories\SensorGroup\EloquentSensorGroupRepository');
        $this->app->bind('Tobuli\Repositories\SensorGroupSensor\SensorGroupSensorRepositoryInterface', 'Tobuli\Repositories\SensorGroupSensor\EloquentSensorGroupSensorRepository');
		$this->app->bind('Tobuli\Repositories\ReportLog\ReportLogRepositoryInterface', 'Tobuli\Repositories\ReportLog\EloquentReportLogRepository');
		$this->app->bind('Tobuli\Repositories\Tasks\TasksRepositoryInterface', 'Tobuli\Repositories\Tasks\EloquentTasksRepository');
        $this->app->bind('Tobuli\Repositories\DeviceCamera\DeviceCameraRepositoryInterface', 'Tobuli\Repositories\DeviceCamera\EloquentDeviceCameraRepository');
        $this->app->bind('Tobuli\Repositories\Sharing\SharingRepositoryInterface', 'Tobuli\Repositories\Sharing\EloquentSharingRepository');
        $this->app->bind('Tobuli\Repositories\DeviceConfig\DeviceConfigRepositoryInterface', 'Tobuli\Repositories\DeviceConfig\EloquentDeviceConfigRepository');
        $this->app->bind('Tobuli\Repositories\ApnConfig\ApnConfigRepositoryInterface', 'Tobuli\Repositories\ApnConfig\EloquentApnConfigRepository');

        $this->app->bind(PoiGroupRepositoryInterface::class, EloquentPoiGroupRepository::class);
    }

    public function provides()
    {
        return array("repositories");
    }

}