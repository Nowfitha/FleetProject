@forelse ($groups as $group)
    <div class="group" data-toggle="multiCheckbox">
        <div class="group-heading">
            <div class="checkbox">
                {!! Form::checkbox(null, $group['id'], $group['active'], ['data-toggle' => 'checkbox']) !!}
                <label></label>
            </div>

            <div class="group-title {{ $group['open'] ? '' : 'collapsed' }}" data-toggle="collapse" data-target="#route-group-{{ $group['id'] }}" data-parent="#routes_tab" aria-expanded="{{ $group['open'] ? 'true' : 'false' }}" aria-controls="route-group-{{ $group['id'] }}">
                {{ $group['title'] }} <span class="count">{{ $group['count'] }}</span>
            </div>

            <div class="btn-group">
                @if ($group['id'])
                    <i class="btn icon options" data-url="{{ route('route_groups.edit', $group['id']) }}" data-modal="route_groups_edit"></i>
                @else
                    <i class="btn icon options" data-url="{{ route('route_groups.create') }}" data-modal="route_groups_create"></i>
                @endif
            </div>
        </div>

        <div id="route-group-{{ $group['id'] }}" class="group-collapse collapse {{ ! $group['open'] ? '' : 'in' }}" data-id="{{ $group['id'] }}" role="tabpanel" aria-expanded="{{ $group['open'] ? 'true' : 'false' }}">
            <div class="group-body">
                @if(($group['open']))
                    @include('front::Routes.items', ['items' => $group['items']])
                @else
                    <div data-toggle="scroll" data-parent=".tab-pane-body" data-url="{{ $group['next'] }}"></div>
                @endif
            </div>
        </div>
    </div>
@empty
    <p class="no-results">{!! trans('front.no_routes') !!}</p>
@endforelse

@if ($groups->nextPageUrl())
    <div data-toggle="scroll" data-parent=".tab-pane-body" data-url="{{ $groups->nextPageUrl() }}"></div>
@endif
