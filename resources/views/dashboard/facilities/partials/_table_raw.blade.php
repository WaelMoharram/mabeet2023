<div class=" col-4 card " >
    <div class="card-body" style="    background-color: #eeeeee;
    border-radius: 5px;">
        <h4 class="card-title">{!! $facility->name !!}</h4>

        @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.facilities.edit',$facility->id),
                            'tooltip' => __('Edit '.$facility['name']),
                             ])
        @endcomponent
        @component('dashboard.layouts.partials.buttons._delete_button',[
                                        'id'=>$facility->id,
                                        'route' => route('dashboard.facilities.destroy',$facility->id) ,
                                        'tooltip' => __('Delete'),
                                         ])
        @endcomponent
{{--        <a href="{{route('dashboard.facilities.destroy',$facility->id)}}" class="card-link"><i class="fa fa-trash-o"></i></a>--}}
    </div>
</div>
