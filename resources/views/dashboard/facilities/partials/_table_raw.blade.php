

<div class="col-lg-4 mb-3">
    <div class="card p-4">
        <h4 class="mb-2">{!! $facility->name !!}</h4>

        <ul class="list-inline m-0 pt-4 text-left">
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                                            'route' => route('dashboard.facilities.edit',$facility->id),
                                            'tooltip' => __('Edit '.$facility['name']),
                                             ])
                @endcomponent            </li>
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                                        'id'=>$facility->id,
                                                        'route' => route('dashboard.facilities.destroy',$facility->id) ,
                                                        'tooltip' => __('Delete'),
                                                         ])
                @endcomponent            </li>
        </ul>
    </div>
</div>
