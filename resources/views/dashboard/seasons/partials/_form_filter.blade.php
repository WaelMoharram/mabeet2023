
<div class="form-group py-1 col-md-12">
    <label for="name"> {{__('Name')}} </label>
    {!! Form::text('name',request()->name ??null,['id'=>'name','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="date_from"> {{__('Date from')}} </label>
    {!! Form::text('date_from',request()->date_from ?? null,['id'=>'date_from','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
    {{input_error($errors,'date_from')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="date_to"> {{__('Date to')}} </label>
    {!! Form::text('date_to',request()->date_to ?? null,['id'=>'date_to','class'=>'form-control col flatpickr-basic',disable_on_show()]) !!}
    {{input_error($errors,'date_to')}}
</div>



@if(request()->has('type')) <input type="hidden" name="type" value="{{request()->type}}"> @endif

