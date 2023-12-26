<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td>{!! $page->title !!}</td>
    <td>{{route('page',$page->title)}}</td>
    <td>{{ $page->visits_count }}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">
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

