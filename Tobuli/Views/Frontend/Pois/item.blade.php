<li data-poi-id="{{ $item['id'] }}">
    <div class="checkbox">
        <input type="checkbox" name="poi[{{ $item['id'] }}]" value="{{ $item['id'] }}" {{ !empty($item['active']) ? 'checked="checked"' : '' }} onChange="app.pois.active('{{ $item['id'] }}', this.checked);"/>
        <label></label>
    </div>
    <div class="name" onclick="app.pois.select({{ $item['id'] }});">
        <span data-poi="name">{{ $item['name'] }}</span>
    </div>
    <div class="details">
        @if (Auth::User()->perm('poi', 'edit') || Auth::User()->perm('poi', 'remove'))
            <div class="btn-group dropleft droparrow"  data-position="fixed">
                <i class="btn icon options" data-toggle="dropdown" data-position="fixed" aria-haspopup="true" aria-expanded="false"></i>
                <ul class="dropdown-menu" >
                    @if ( Auth::User()->perm('poi', 'edit') )
                        <li>
                            <a href='javascript:;' onclick="app.pois.edit({{ $item['id'] }});">
                                <span class="icon edit"></span>
                                <span class="text">{{ trans('global.edit') }}</span>
                            </a>
                        </li>
                    @endif
                    @if (Auth::User()->perm('poi', 'remove'))
                        @include('front::Layouts.partials.confirmed_delete.menu_item', [
                            'route' => route('pois.destroy', $item['id']),
                            'content' => '<span class="icon delete"></span><span class="text">'. trans('global.delete') . '</span>'
                        ])
                    @endif
                </ul>
            </div>
        @endif
    </div>
</li>