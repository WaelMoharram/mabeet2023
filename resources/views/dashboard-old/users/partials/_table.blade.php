<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Full name')}}</th>
        <th scope="col">{{__('Email')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        @include('dashboard-old.users.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{$users->appends(request()->except('page'))->links()}}
