<div class=" col-4 card ">
    <div class="card-body" style="    background-color: #eeeeee;
    border-radius: 5px;">
        <h4 class="card-title">{!! $unitType->name !!}</h4>

        @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.unit-types.edit',$unitType->id),
                            'tooltip' => __('Edit '.$unitType['name']),
                             ])
        @endcomponent
        @component('dashboard.layouts.partials.buttons._delete_button',[
                                        'id'=>$unitType->id,
                                        'route' => route('dashboard.unit-types.destroy',$unitType->id) ,
                                        'tooltip' => __('Delete'),
                                         ])
        @endcomponent
        {{--        <a href="{{route('dashboard.unit-types.destroy',$unitType->id)}}" class="card-link"><i class="fa fa-trash-o"></i></a>--}}
    </div>
</div>
