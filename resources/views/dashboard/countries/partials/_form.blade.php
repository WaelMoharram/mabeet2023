@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
@if(isset($country->image))
    <div class="col-md-12">
        <img id="image" src="{{url($country->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image ')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($country ? $country->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic"),disable_on_show()]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($country ? $country->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English"),disable_on_show()]) !!}
    {{input_error($errors,'name[en]')}}
</div>



<div class="form-group py-1 col-md-12">
    <label for="phone_code"> {{__('Phone code')}}</label>
    {!! Form::text('phone_code',null,['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Phone code"),disable_on_show()]) !!}
    {{input_error($errors,'phone_code')}}
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
