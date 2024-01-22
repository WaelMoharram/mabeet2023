<tr>
    <td>{!! $loop->index +1 !!}</td>
    <td><img src="{!! url('/').'/'.$product->image !!}" style="width: 100px; height: 100px;"></td>
    <td>{!! $product->name !!}</td>
    <td>{!! $product->price !!}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Vertical button group">

            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._edit_button',[
                        'route' => route('dashboard.products.edit',$product->id),
                        'tooltip' => __('Edit products'),
                         ])
                @endcomponent
            </div>
            <div class="btn-group" role="group">
                @component('dashboard.layouts.partials.buttons._delete_button',[
                            'id'=>$product->id,
                            'route' => route('dashboard.products.destroy',$product->id) ,
                            'tooltip' => __('Delete products'),
                             ])
                @endcomponent
            </div>

        </div>


    </td>
</tr>

