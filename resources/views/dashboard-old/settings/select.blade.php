@can('index seasons')
    <a href="{{route('dashboard.seasons.index')}}" class="btn  @if(Request::is('dashboard/seasons'))  btn-success @else btn-outline-success @endif round waves-effect">{{__('Seasons')}}</a>
@endcan

@can('index unit types')
    <a href="{{route('dashboard.unit-types.index')}}" class="btn  @if(Request::is('dashboard/unit-types'))  btn-success @else btn-outline-success @endif round waves-effect">{{__('Unit types')}}</a>
@endcan

@can('index facilities')
    <a href="{{route('dashboard.facilities.index')}}" class="btn  @if(Request::is('dashboard/facilities'))  btn-success @else btn-outline-success @endif round waves-effect">{{__('Facilities')}}</a>
@endcan

@can('index services')
    <a href="{{route('dashboard.services.index')}}" class="btn  @if(Request::is('dashboard/services'))  btn-success @else btn-outline-success @endif round waves-effect">{{__('Services')}}</a>
@endcan
