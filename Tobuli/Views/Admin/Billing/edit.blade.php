@extends('Admin.Layouts.modal')

@section('title')
    {{ trans('global.edit') }}
@stop

@section('body')
    <ul class="nav nav-tabs nav-default" role="tablist">
        <li class="active"><a href="#plan-edit-form-main" role="tab" data-toggle="tab">{{ trans('front.main') }}</a></li>

        @if(config('addon.plan_templates'))
            <li>
                <a href="#plan-edit-form-template" role="tab" data-toggle="tab">
                    {{ trans('validation.attributes.template') }}
                </a>
            </li>
        @endif
        <li><a href="#plan-edit-form-permissions" role="tab"
               data-toggle="tab">{{ trans('validation.attributes.permissions') }}</a></li>
    </ul>

    {!! Form::open(array('route' => 'admin.billing.update', 'method' => 'PUT')) !!}
    {!! Form::hidden('id', $item->id) !!}
    <div class="tab-content">
        <div id="plan-edit-form-main" class="tab-pane active">
            <div class="checkbox">
                {!! Form::hidden('visible', 0) !!}
                {!! Form::checkbox('visible', 1, $item->visible) !!}
                {!! Form::label('visible', trans('validation.attributes.visible') ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('title', trans('validation.attributes.title').':') !!}
                {!! Form::text('title', $item->title, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', trans('validation.attributes.price').':') !!}
                {!! Form::text('price', $item->price, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('objects', trans('validation.attributes.objects').':') !!}
                {!! Form::text('objects', $item->objects, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('duration_value', trans('validation.attributes.duration_value').':') !!}
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::text('duration_value', $item->duration_value, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::select('duration_type', $duration_types, $item->duration_type, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div id="plan-edit-form-template" class="tab-pane">
            <div class="form-group">
                {!! Form::label('template', trans('validation.attributes.template').':') !!}
                {!! Form::textarea('template', $item->template ?? null, ['class' => 'form-control']) !!}
            </div>

            <div class="alert alert-info row">
                @foreach($replacers as $key => $text)
                    <div class="col-xs-6 col-sm-3">{{ $key }}</div>
                    <div class="col-xs-6 col-sm-3">{{ $text }}</div>
                @endforeach
            </div>
        </div>

        <div id="plan-edit-form-permissions" class="tab-pane">
            @include('Admin.Clients._perms')
        </div>
    </div>
    <script>
        checkPerms();
    </script>
    {!! Form::close() !!}
@stop