<div class="col-lg-4 mb-3">
    <div class="card p-4">
        <h4 class="mb-2">{!! $season->name !!}</h4>
               <p class="card-text">
                    @if($season->date_from != null)
                        <span>{{__('Date From')}} : {!! $season->date_from !!}</span>
                    @endif
                    <br>
                    @if($season->date_to != null)
                        <span>{{__('Date To')}} : {!! $season->date_to !!}</span>
                    @endif
                </p>
        <ul class="list-inline m-0 pt-4 text-left">
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                                            'route' => route('dashboard.seasons.edit',$season->id),
                                            'tooltip' => __('Edit '.$season['name']),
                                             ])
                @endcomponent            </li>
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                                        'id'=>$season->id,
                                                        'route' => route('dashboard.seasons.destroy',$season->id) ,
                                                        'tooltip' => __('Delete'),
                                                         ])
                @endcomponent            </li>
        </ul>
    </div>
</div>
