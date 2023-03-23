<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $page->title !!}</td>
    <td>{{route('home',$page->id)}}</td>
    <td>{{ $page->visits_count }}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">
            <div class="btn-group" role="group">
                <a href="{{route('dashboard.products.index',['page_id'=>$page->id])}}" data-toggle="tooltip" data-placement="top" title="{{__('Products')}}"
                   class="btn btn-md btn-success">
                    <i class="fa fa-home"></i>
                </a>
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.pages.edit',$page->id),
                        'tooltip' => __('Edit pages'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$page->id,
                            'route' => route('dashboard.pages.destroy',$page->id) ,
                            'tooltip' => __('Delete pages'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

