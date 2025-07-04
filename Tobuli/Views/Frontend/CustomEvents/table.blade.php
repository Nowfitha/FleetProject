<div class="table-responsive">
    <table class="table table-list">
        <thead>
            <tr>
            @if(auth()->user()->perm('device.protocol', 'view'))
            {!! tableHeader('validation.attributes.title') !!}
            @endif
            {!! tableHeader('front.tags') !!}
            {!! tableHeader('validation.attributes.message') !!}
            {!! tableHeader('admin.show_always') !!}
            <th></th>
            </tr>
        </thead>
        <tbody>
        @if (count($events))
            @foreach ($events as $event)
                <tr>
                    @if(auth()->user()->perm('device.protocol', 'view'))
                    <td>
                        {{$event->protocol}}
                    </td>
                    @endif
                    <td>
                        {{!empty($event->tags) ? implode(', ', \Illuminate\Support\Arr::pluck($event->tags->toArray(), 'tag')) : ''}}
                    </td>
                    <td>
                        {{$event->message}}
                    </td>
                    <td>
                        {{$event->always ? trans('admin.yes') : trans('admin.no')}}
                    </td>
                    <td class="actions">
                        <a href="javascript:" class="btn icon edit" data-url="{!!route('custom_events.edit', $event->id)!!}" data-modal="custom_events_edit"></a>
                        <a href="javascript:" class="btn icon delete" data-url="{!!route('custom_events.do_destroy', $event->id)!!}" data-modal="custom_events_destroy"></a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="no-data" colspan="2">{!!trans('front.no_events')!!}</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>

<div class="nav-pagination">
    {!! $events->setPath(route('custom_events.table'))->render() !!}
</div>