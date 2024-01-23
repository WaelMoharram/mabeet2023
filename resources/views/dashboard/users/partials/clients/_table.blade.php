<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Full name')}}</th>
        <th scope="col">{{__('Orders number')}}</th>
        <th scope="col">{{__('Registration date')}}</th>
        <th scope="col">{{__('Last login')}}</th>
        <th scope="col">{{__('Country')}}</th>
        <th scope="col">{{__('Mobile')}}</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        @include('dashboard.users.partials.clients._table_raw')
    @endforeach
    </tbody>

</table>

{{$users->appends(request()->except('page'))->links('pagination::bootstrap-4')}}
