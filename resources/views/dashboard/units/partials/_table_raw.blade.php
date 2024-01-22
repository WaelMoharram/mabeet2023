<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $unit->name !!}</td>
    <td>{!! $unit->email !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard.units.show',$unit->id),
                        'tooltip' => __('Show').' '.$unit['name'],
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.units.edit',$unit->id),
                            'tooltip' => __('Edit').' '.$unit['name'],
                             ])
                    '),
                    ])
                @endcomponent
            </div>

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$unit->id,
                                'route' => route('dashboard.units.destroy',$unit->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </div>


        </div>


    </td>
</tr>

