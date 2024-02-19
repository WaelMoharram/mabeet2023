<div class="col-lg-4 mb-3">
    <div class="card p-4">
        <h4 class="mb-2">{!! $budget->name !!}</h4>
               <p class="card-text">
                    @if($budget->amount_from != null)
                        <span>{{__('Amount From')}} : {!! $budget->amount_from !!}</span>
                    @endif
                    <br>
                    @if($budget->amount_to != null)
                        <span>{{__('Amount To')}} : {!! $budget->amount_to !!}</span>
                    @endif
                </p>
        <ul class="list-inline m-0 pt-4 text-left">
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                                            'route' => route('dashboard.budgets.edit',$budget->id),
                                            'tooltip' => __('Edit '.$budget['name']),
                                             ])
                @endcomponent            </li>
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                                        'id'=>$budget->id,
                                                        'route' => route('dashboard.budgets.destroy',$budget->id) ,
                                                        'tooltip' => __('Delete'),
                                                         ])
                @endcomponent            </li>
        </ul>
    </div>
</div>
