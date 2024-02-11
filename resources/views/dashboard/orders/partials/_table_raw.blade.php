<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! optional($order->user)->name !!}</td>
    <td>{!! $order->created_at->format('Y-m-d') !!}</td>
    <td>{!! optional($order->city)->name !!}</td>

    @if($order->season)
        <td>{!! $order->season->name !!}</td>
    @else
        <td>{{$order->date_from}} : {{$order->date_to}}</td>
    @endif
    <td>{!! optional($order->unitType)->name !!}</td>

    @if($order->budget)
        <td>{!! $order->budget_from !!} : {!! $order->budget_to !!}</td>
    @else
        <td>{!! __('Not set') !!}</td>
    @endif


    <td>

        <ul class="list-inline m-0">



            @if($order->status ==0 && $order->currentStatus->status == \App\Models\Order::STATUS_NEW)


            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._accept_button',[
                                'id'=>$order->id,
                                'route' => route('dashboard.orders.accept',$order->id) ,
                                'tooltip' => __('Accept'),
                                 ])
                @endcomponent
            </li>


    <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$order->id,
                                'route' => route('dashboard.orders.destroy',$order->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </li>
            @endif

        </ul>




    </td>
</tr>

