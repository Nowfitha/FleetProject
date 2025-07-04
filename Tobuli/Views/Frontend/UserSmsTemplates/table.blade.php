<div class="table-responsive">
    <table class="table table-list">
        <thead>
            <tr>
                {!! tableHeader('validation.attributes.title') !!}
                {!! tableHeader('validation.attributes.adapted') !!}
                @if(auth()->user()->perm('device.protocol', 'view'))
                    {!! tableHeader('validation.attributes.protocol') !!}
                @endif
                <th></th>
            </tr>
        </thead>
        <tbody>
        @if (count($user_sms_templates))
            @foreach ($user_sms_templates as $user_sms_template)
                <tr>
                    <td>
                        {{ $user_sms_template->title }}
                    </td>
                    <td>
                        {{ $user_sms_template->adapted_title }}
                    </td>
                    @if(auth()->user()->perm('device.protocol', 'view'))
                        <td>
                            {{ $user_sms_template->protocol }}
                        </td>
                    @endif
                    <td class="actions">
                        <a href="javascript:" class="btn icon edit" data-url="{!!route('user_sms_templates.edit', $user_sms_template->id)!!}" data-modal="user_sms_templates_edit"></a>
                        <a href="javascript:" class="btn icon delete" data-url="{!!route('user_sms_templates.do_destroy', $user_sms_template->id)!!}" data-modal="user_sms_templates_destroy"></a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="no-data"  colspan="3">{!!trans('front.no_templates')!!}</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>
<div class="nav-pagination">
    {!! $user_sms_templates->setPath(route('user_sms_templates.table'))->render() !!}
</div>