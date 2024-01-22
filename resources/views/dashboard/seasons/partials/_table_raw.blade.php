<div class=" col-4 card ">
    <div class="card-body" style="    background-color: #eeeeee;
    border-radius: 5px;">
        <h4 class="card-title">{!! $season->name !!}</h4>
        <p class="card-text">
            @if($season->date_from != null)
                <span>{{__('Date From')}} : {!! $season->date_from !!}</span>
            @endif
            <br>
            @if($season->date_to != null)
                <span>{{__('Date To')}} : {!! $season->date_to !!}</span>
            @endif
        </p>
        @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.seasons.edit',$season->id),
                            'tooltip' => __('Edit '.$season['name']),
                             ])
        @endcomponent
        @component('dashboard.layouts.partials.buttons._delete_button',[
                                        'id'=>$season->id,
                                        'route' => route('dashboard.seasons.destroy',$season->id) ,
                                        'tooltip' => __('Delete'),
                                         ])
        @endcomponent
        {{--        <a href="{{route('dashboard.seasons.destroy',$season->id)}}" class="card-link"><i class="fa fa-trash-o"></i></a>--}}
    </div>
</div>
