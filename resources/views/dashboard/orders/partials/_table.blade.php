<table class="table table-striped {{--dataex-html5-selectors--}}">
    <thead>
    <tr>
        <th scope="col">{{__('#') }}</th>
        <th scope="col">{{__('Order owner')}}</th>
        <th scope="col">{{__('Order time')}}</th>
        <th scope="col">{{__('Place')}}</th>
        <th scope="col">{{__('Season')}}</th>
        <th scope="col">{{__('Unit type')}}</th>
        <th scope="col">{{__('budget')}}</th>
        <th scope="col">{{__('Options')}}</th>
    </thead>
    <tbody>
    @foreach($orders as $order)
        @include('dashboard.orders.partials._table_raw')
    @endforeach
    </tbody>

</table>

{{$orders->appends(request()->except('page'))->links('pagination::bootstrap-4')}}
