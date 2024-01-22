<div class=" col-4 card ">
    <div class="card-body" style="    background-color: #eeeeee;
    border-radius: 5px;">
        <h4 class="card-title">{!! $service->name !!}</h4>

        @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.services.edit',$service->id),
                            'tooltip' => __('Edit '.$service['name']),
                             ])
        @endcomponent
        @component('dashboard.layouts.partials.buttons._delete_button',[
                                        'id'=>$service->id,
                                        'route' => route('dashboard.services.destroy',$service->id) ,
                                        'tooltip' => __('Delete'),
                                         ])
        @endcomponent
        {{--        <a href="{{route('dashboard.services.destroy',$service->id)}}" class="card-link"><i class="fa fa-trash-o"></i></a>--}}
    </div>
</div>
