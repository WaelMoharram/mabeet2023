@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


@if(isset($admin->image))
    <div class="col-md-12">
        <img id="image" src="{{url($admin->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif
<div class="form-group py-1 col-md-12 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Image ')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>




<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Full name')}}</label>
    {!! Form::text('name',null,['class'=>'form-control col','placeholder'=>__("Full name"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Email')}} </label>
    {!! Form::email('email',null,['class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'email')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="phone"> {{__('Phone')}} </label>
    {!! Form::text('phone',null,['id'=>'phone','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'phone')}}
</div>
<div class="form-group py-1 col-md-6 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Password')}} </label>
    {!! Form::password('password',['class'=>'form-control col',]) !!}
    {{input_error($errors,'password')}}
</div>

<div class="form-group py-1 col-md-6 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Confirm password')}} </label>
    {!! Form::password('password_confirmation',['class'=>'form-control col',hidden_on_show()]) !!}
    {{input_error($errors,'password_confirmation')}}
</div>

<div class="form-group py-1 col-md-12 {{hidden_on_show()}}">
    <label for="formInputRole"> {{__('Role')}} </label>
    {{Form::select('role', $roles, optional($admin->roles)->first()->id?? null, ['class'=>'form-control col select2',hidden_on_show(),] ) }}

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

