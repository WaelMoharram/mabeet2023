@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Full name')}}</label>
    {!! Form::text('name',null,['class'=>'form-control col','placeholder'=>__("Full name"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Email')}} </label>
    {!! Form::email('email',null,['class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'email')}}
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

//country select
<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Country')}} </label>
    {!! Form::select('country_id',\App\Models\Country::pluck('name','id'),null,['class'=>'form-control col','placeholder'=>__('Select country')]) !!}
    {{input_error($errors,'country_id')}}
</div>







