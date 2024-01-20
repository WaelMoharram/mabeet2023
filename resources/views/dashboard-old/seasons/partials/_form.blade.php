@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($season ? $season->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic"),disable_on_show()]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($season ? $season->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English"),disable_on_show()]) !!}
    {{input_error($errors,'name[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="date_from"> {{__('Date from')}} </label>
    {!! Form::text('date_from',null,['id'=>'date_from','placeholder'=>'YYYY-MM-DD','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
    {{input_error($errors,'date_from')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="date_to"> {{__('Date to')}} </label>
    {!! Form::text('date_to',null,['id'=>'date_to','placeholder'=>'YYYY-MM-DD','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
    {{input_error($errors,'date_to')}}
</div>







