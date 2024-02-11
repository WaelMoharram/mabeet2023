<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Full name')}}</th>
        <th scope="col">{{__('Registration date')}}</th>
        <th scope="col">{{__('Last login')}}</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('phone')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($admins as $admin)
        @include('dashboard.admins.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{$admins->appends(request()->except('page'))->links('pagination::bootstrap-4')}}
