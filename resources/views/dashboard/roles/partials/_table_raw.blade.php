<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $role->name !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard.roles.show',$role->id),
                        'tooltip' => __('Show '.$role['name']),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.roles.edit',$role->id),
                            'tooltip' => __('Edit '.$role['name']),
                             ])
                @endcomponent
            </div>

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$role->id,
                                'route' => route('dashboard.roles.destroy',$role->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </div>


        </div>


    </td>
</tr>

