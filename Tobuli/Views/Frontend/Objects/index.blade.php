@extends('Frontend.Layouts.loged')

@section('items')
<div class="tab-content">
    <div class="tab-pane active" id="objects_tab">
        @include('Frontend.Objects.tabs.objects')
    </div>
    @if(Auth::user()->perm('events', 'view'))
        <div class="tab-pane" id="events_tab">
            @include('Frontend.Objects.tabs.events')
        </div>
    @endif
    <div class="tab-pane" id="history_tab">
        @include('Frontend.Objects.tabs.history')
    </div>
    <div class="tab-pane" id="alerts_tab">
        @include('Frontend.Objects.tabs.alerts')
    </div>

    @include('Frontend.Objects.tabs.geofencing')
    @include('Frontend.Objects.tabs.routes')
    @include('Frontend.Objects.tabs.pois')
</div>
@include('Frontend.Objects.partials.deleteObject')
@include('Frontend.Objects.partials.deleteGeofence')
@include('Frontend.Objects.partials.deleteRoute')
@include('Frontend.Objects.partials.deleteAlert')
@include('Frontend.Objects.partials.deletePoi')
@include('Frontend.Objects.tools.showPoint')
@include('Frontend.Objects.tools.showAddress')

@stop

@section('scripts')

<script>
    function my_account_settings_edit_modal_callback(res) {
        if (res.status == 1)
            window.location.reload();
    }

    function devices_create_modal_callback(res) {
        device_added(res);
    }

    function beacons_create_modal_callback(res) {
        device_added(res);
    }

    function device_added(res) {
        if (res.status == 1) {
            app.notice.success('{{ trans('front.successfully_added_device') }}');
            app.devices.loadData(res.id);
            app.devices.list();
        }
    }

    function devices_edit_modal_callback(res) {
        device_edited(res);
    }

    function beacons_edit_modal_callback(res) {
        device_edited(res);
    }

    function device_edited(res) {
        if (res.status == 1) {
            app.notice.success('{{ trans('front.successfully_updated_device') }}');

            if (typeof res.deleted != 'undefined') {
                app.devices.remove(res.id);

                $('.history-tab-form .devices_list option[value="' + res.id + '"]').selectpicker('refresh');
            }

            app.devices.loadData(res.id);
            app.devices.list();
        }
    }

    function email_confirmation_edit_modal_callback(res) {
        if (res.status == 1) {
            app.notice.success('{{ trans('front.successfully_confirmed_email') }}');
            $('#email_confirmation').hide();
        }
    }

    function my_account_edit_modal_callback(res) {
    if (res.status == 1) {
        app.notice.success('{{ trans('front.successfully_updated_profile') }}');
            if (res.email_changed == 1) {
                 $('#email_confirmation').show();
                 $('#email_confirmation a').trigger('click');
            }
        }
    }

    function email_resend_code_modal_callback(res) {
        if (res.status == 1) {
            app.notice.success('{{ trans('front.activation_email_sent') }}');
        }
    }

    function events_do_destroy_modal_callback(res) {
        if (res.status == 1) {
            app.events.list();
        }
    }

    function objects_delete_modal_callback(res) {
        if (res.status == 1) {
            $('.history-tab-form .devices_list option[value="' + res.id + '"]').selectpicker('refresh');

            $('#devices_edit').modal('hide');
            $('#beacons_edit').modal('hide');

            app.devices.remove(res.id);

            app.devices.list();
        }
    }
</script>
@stop