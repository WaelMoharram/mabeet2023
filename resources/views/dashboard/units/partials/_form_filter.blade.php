
<div class="form-group py-1 col-md-6">
    <label for="name"> {{__('Name')}} </label>
    {!! Form::text('name',request()->name ??null,['id'=>'name','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="status"> {{__('Status')}} </label>
    {{Form::select('status',[1=>__('Active'),0=>__('InActive')] ,request()->status ??null,['class'=>'form-control mb-2','id'=>'status','placeholder'=>__('All'),disable_on_show()])}}
    {{input_error($errors,'status')}}
</div>
@if(request()->has('unit_type_id')) <input type="hidden" name="unit_type_id" value="{{request()->unit_type_id}}"> @endif

