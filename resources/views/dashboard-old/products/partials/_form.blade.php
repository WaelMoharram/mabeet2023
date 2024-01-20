@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(isset($image->image))
    <div class="col-md-12">
        <img id="image" src="{{url($image->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif
<input type="hidden" name="page_id" value="{{$product->page_id ?? request()->page_id}}">
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image ')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>



<div class="form-group py-1 col-md-12">
    <label for="name"> {{__('Name')}}</label>
    {!! Form::text('name',null,['id'=>'name','class'=>'form-control col','placeholder'=>__("Name")]) !!}
    {{input_error($errors,'name')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="price"> {{__('Price')}}</label>
    {!! Form::number('price',null,['id'=>'price','class'=>'form-control col','placeholder'=>__("Price")]) !!}
    {{input_error($errors,'price')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="description"> {{__('Description')}}</label>
    {!! Form::textarea('description',null,['id'=>'description','class'=>'form-control col','placeholder'=>__("Description")]) !!}
    {{input_error($errors,'description')}}
</div>




@section('footer')
    <script>
        console.log('out')



        var loadImage = function(event) {
            console.log('image')

            var output = document.getElementById('image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>
@endsection
