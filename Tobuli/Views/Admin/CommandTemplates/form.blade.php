<div class="form-group">
    {!! Form::label('type', trans('validation.attributes.type') . ':') !!}
    {!! Form::select('type', $types, $item->type ?? null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', trans('validation.attributes.title') . ':') !!}
    {!! Form::text('title', $item->title ?? null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::label('adapted', trans('validation.attributes.adapted').':')!!}
    {!! Form::select('adapted', $adapties, $item->adapted ?? null, ['class' => 'form-control']) !!}
</div>

@if(auth()->user()->perm('device.protocol', 'view'))
    <div class="form-group" data-disablable="[name='adapted'];hide-disable;protocol">
        {!!Form::label('protocol', trans('validation.attributes.device_protocol').':')!!}
        {!!Form::select('protocol', $protocols, $item->protocol ?? null, ['class' => 'form-control', 'data-live-search' => 'true'])!!}
    </div>
@endif

@if(auth()->user()->perm('devices', 'view'))
    <div class="form-group" data-disablable="[name='adapted'];hide-disable;devices">
        {!!Form::label('devices', trans('validation.attributes.devices').':')!!}
        {!! Form::select('devices[]', [], null, [
                    'class' => 'form-control multiexpand',
                    'multiple' => 'multiple',
                    'data-live-search' => 'true',
                    'data-actions-box' => 'true',
                    'data-ajax' => route('admin.command_templates.devices', $item ?? null)
                    ]) !!}
    </div>
@endif

@if(auth()->user()->perm('device.device_type_id', 'view'))
    <div class="form-group" data-disablable="[name='adapted'];hide-disable;device_types">
        {!!Form::label('device_types', trans('admin.device_types').':')!!}
        {!! Form::select('device_types[]', $deviceTypes, $item->deviceTypes ?? null, ['class' => 'form-control multiexpand', 'multiple' => 'multiple', 'data-live-search' => 'true', 'data-actions-box' => 'true']) !!}
    </div>
@endif

<div class="form-group">
    {!! Form::label('message', trans('validation.attributes.message') . ':') !!}
    {!! Form::textarea('message', $item->message ?? null, ['class' => 'form-control']) !!}
</div>