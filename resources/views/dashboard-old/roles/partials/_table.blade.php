<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Role')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($roles as $role)
        @include('dashboard-old.roles.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{--{{$roles->appends(request()->except('page'))->links()}}--}}
