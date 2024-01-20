<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $role->name !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
                @component('dashboard-old.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard-old.roles.show',$role->id),
                        'tooltip' => __('Show '.$role['name']),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard-old.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard-old.roles.edit',$role->id),
                            'tooltip' => __('Edit '.$role['name']),
                             ])
                @endcomponent
            </div>

            <div class="btn-group" role="group">
                @component('dashboard-old.layouts.partials.buttons._delete_button',[
                                'id'=>$role->id,
                                'route' => route('dashboard-old.roles.destroy',$role->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </div>


        </div>


    </td>
</tr>

