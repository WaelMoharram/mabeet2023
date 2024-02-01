<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $user->name !!}</td>
    <td>{!! $user->units->count() !!}</td>
    <td>{!! $user->orders->count() !!}</td>
    <td>{!! $user->created_at->format('Y-m-d') !!}</td>

    @if($user->last_login_at)
        <td>{!! $user->last_login_at->format('Y-m-d') !!}</td>
    @else
        <td>{!! __('Never') !!}</td>
    @endif

    @if($user->country)
        <td>{!! $user->country->name !!}</td>
    @else
        <td>{!! __('Not set') !!}</td>
    @endif

    <td>{!! $user->phone !!}</td>
    <td>{!! $user->email !!}</td>
    <td>
        <ul class="list-inline m-0">

                        <li class="list-inline-item">

        @component('dashboard.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard.users.show',$user->id),
                        'tooltip' => __('Show').' '.$user['name'],
                         ])
                @endcomponent
                        </li>
            <li class="list-inline-item">

                @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.users.edit',$user->id),
                            'tooltip' => __('Edit').' '.$user['name'],
                             ])
                    '),
                    ])
                @endcomponent
            </li>
            <li class="list-inline-item">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$user->id,
                                'route' => route('dashboard.users.destroy',$user->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent
            </li>
        </ul>





    </td>
</tr>

