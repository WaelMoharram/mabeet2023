<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Full name')}}</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($units as $unit)
        @include('dashboard.units.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{$units->appends(request()->except('page'))->links('pagination::bootstrap-4')}}
