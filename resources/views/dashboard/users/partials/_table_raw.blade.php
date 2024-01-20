<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $user->name !!}</td>
    <td>{!! $user->email !!}</td>
    <td>
{{--        <ul class="list-inline m-0">--}}
{{--            <li class="list-inline-item">--}}
{{--                <a href="#"><img src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png" alt=""></a>--}}
{{--            </li>--}}
{{--            <li class="list-inline-item">--}}
{{--                <a href="#"><img src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon1.png" alt=""></a>--}}
{{--            </li>--}}
{{--            <li class="list-inline-item">--}}
{{--                <a href="#"><img src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon2.png" alt=""></a>--}}
{{--            </li>--}}
{{--        </ul>--}}

                @component('dashboard.layouts.partials.buttons._show_button',[
                        'route' => route('dashboard.users.show',$user->id),
                        'tooltip' => __('Show').' '.$user['name'],
                         ])
                @endcomponent

                @component('dashboard.layouts.partials.buttons._edit_button',[
                            'route' => route('dashboard.users.edit',$user->id),
                            'tooltip' => __('Edit').' '.$user['name'],
                             ])
                    '),
                    ])
                @endcomponent

                @component('dashboard.layouts.partials.buttons._delete_button',[
                                'id'=>$user->id,
                                'route' => route('dashboard.users.destroy',$user->id) ,
                                'tooltip' => __('Delete'),
                                 ])
                @endcomponent






    </td>
</tr>

