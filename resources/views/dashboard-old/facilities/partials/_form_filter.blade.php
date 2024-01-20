
<div class="form-group py-1 col-md-12">
    <label for="name"> {{__('Name')}} </label>
    {!! Form::text('name',request()->name ??null,['id'=>'name','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>


@if(request()->has('type')) <input type="hidden" name="type" value="{{request()->type}}"> @endif

