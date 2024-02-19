@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($budget ? $budget->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic"),disable_on_show()]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($budget ? $budget->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English"),disable_on_show()]) !!}
    {{input_error($errors,'name[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="amount_from"> {{__('Amount from')}} </label>
    {!! Form::text('amount_from',null,['id'=>'amount_from','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'amount_from')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="amount_to"> {{__('Amount to')}} </label>
    {!! Form::text('amount_to',null,['id'=>'amount_to','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'amount_to')}}
</div>







