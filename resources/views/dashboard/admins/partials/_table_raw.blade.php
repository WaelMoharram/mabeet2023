<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $admin->name !!}</td>
    <td>{!! $admin->created_at->format('Y-m-d') !!}</td>
    @if($admin->last_login_at)
{{--        @dd($admin->last_login_at)--}}
        <td>{!! $admin->last_login_at !!}</td>
    @else
        <td>{!! __('Never') !!}</td>
    @endif
    <td>{!! $admin->email !!}</td>
    <td>{!! $admin->phone !!}</td>
    <td>

        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard.admins.show',$admin->id),
                        'tooltip' => __('Show '.$admin['name']),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.admins.edit',$admin->id),
                            'tooltip' => __('Edit '.$admin['name']),
                             ])
                @endcomponent
            </div>

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$admin->id,
                                'route' => route('dashboard.admins.destroy',$admin->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </div>


        </div>


    </td>
</tr>

