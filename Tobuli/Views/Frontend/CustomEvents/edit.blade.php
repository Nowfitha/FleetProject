@extends('Frontend.Layouts.modal')

@section('title', trans('global.edit'))

@section('body')
    {!!Form::open(['route' => 'custom_events.update', 'method' => 'PUT'])!!}
        {!!Form::hidden('id', $item->id)!!}
        <div class="form-group" style="margin-top: 0">
            {!!Form::label('always', trans('admin.show_always').':')!!}
            {!!Form::checkbox('always', 1, $item->always)!!}
        </div>

        <div class="form-group">
            {!!Form::label('protocol', trans('validation.attributes.device_protocol').':')!!}
            {!!Form::select('protocol', $protocols,  $item->protocol, ['class' => 'form-control', 'data-live-search' => 'true'])!!}
        </div>

        {!!Form::label('tag_value', trans('front.conditions').':')!!}
        {!!Form::hidden('conditions')!!}
        <div class="empty-input-items">
            @if (!empty($item->conditions))
                @foreach ($item->conditions as $condition)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-4">
                                {!!Form::text('tag[]', $condition['tag'], ['class' => 'form-control', 'placeholder' => trans('validation.attributes.parameter')])!!}
                            </div>
                            <div class="col-md-4 col-xs-4">
                                {!!Form::select('type[]', $types, $condition['type'], ['class' => 'form-control'])!!}
                            </div>
                            <div class="col-md-4 col-xs-4">
                                <div class="input-group">
                                    {!!Form::text('tag_value[]', $condition['tag_value'], ['class' => 'form-control', 'placeholder' => trans('validation.attributes.tag_value')])!!}
                                    <span class="input-group-addon">
                                        <a href="javascript:" class="delete-item remove-icon"><span aria-hidden="true">×</span></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="form-group empty-input-add-new">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        {!!Form::text('tag[]', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.tag')])!!}
                    </div>
                    <div class="col-md-4 col-xs-4">
                        {!!Form::select('type[]', $types, null, ['class' => 'form-control'])!!}
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <div class="input-group">
                            {!!Form::text('tag_value[]', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.tag_value')])!!}
                            <span class="input-group-addon"><a href="javascript:" class="delete-item remove-icon">
                                    <span aria-hidden="true">×</span></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="alert alert-info" style="font-size: 12px;">
        {!!trans('front.setflag_on_off_events_info')!!}
    </div>
        <div class="form-group">
            {!!Form::label('message', trans('validation.attributes.message').':')!!}
            {!!Form::text('message', $item->message, ['class' => 'form-control'])!!}
        </div>
    {!!Form::close()!!}
@stop