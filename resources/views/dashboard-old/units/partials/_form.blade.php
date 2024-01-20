@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Name')}}</label>
    {!! Form::text('name',null,['class'=>'form-control col','placeholder'=>__("Full name"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Description')}}</label>
    {!! Form::textarea('description',null,['class'=>'form-control col','placeholder'=>__("Description"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'description')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Amount')}}</label>
    {!! Form::text('amount',null,['class'=>'form-control col','placeholder'=>__("Amount"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'amount')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Owner')}}</label>
    {!! Form::select('user_id',\App\Models\User::where('type','provider')->pluck('name','id') ,null,['class'=>'form-control mb-2 select2','id'=>'user_id',disable_on_show()]) !!}
    {{input_error($errors,'user_id')}}
</div>
<div class="form-group py-1 col-md-6">
    <label for="city"> {{__('City')}} </label>
    {{Form::select('city_id',\App\Models\City::pluck('name','id') ,null,['class'=>'form-control mb-2 select2','id'=>'city_id',disable_on_show()])}}
    {{input_error($errors,'city_id')}}
</div>










