<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Full name')}}</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        @include('dashboard-old.admins.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{$admins->appends(request()->except('page'))->links()}}
