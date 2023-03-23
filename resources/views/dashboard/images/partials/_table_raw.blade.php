<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$image->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{{ url($image->image) }}</td>
    <td>{!! $image->title !!}</td>
    <td>{!! $image->description !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.images.edit',$image->id),
                        'tooltip' => __('Edit images'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$image->id,
                            'route' => route('dashboard.images.destroy',$image->id) ,
                            'tooltip' => __('Delete images'),
                             ])
                @endcomponent
            </div>

        </div>



    </td>
</tr>

