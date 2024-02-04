@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-6">
    <label for="name-ar"> {{__('Name in Arabic')}}</label>
    {!! Form::text('name[ar]',($unitType ? $unitType->getTranslation('name', 'ar') : null),['id'=>'name-ar','class'=>'form-control col','placeholder'=>__("Name in Arabic"),disable_on_show()]) !!}
    {{input_error($errors,'name[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name-en"> {{__('Name in English')}}</label>
    {!! Form::text('name[en]',($unitType ? $unitType->getTranslation('name', 'en') : null),['id'=>'name-en','class'=>'form-control col','placeholder'=>__("Name in English"),disable_on_show()]) !!}
    {{input_error($errors,'name[en]')}}
</div>

<div class="form-group py-1 col-md-12 {{hidden_on_show()}}">
    <label for="facilities"> {{__('Facilities')}} </label>
    {{Form::select('facilities[]', \App\Models\Facility::all()->pluck('name', 'id'), (isset($unitType->facilities)? $unitType->facilities: null), ['id'=>'facilities','class'=>'form-control col select2 ',hidden_on_show(),  'multiple'] ) }}

</div>






