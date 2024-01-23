<div class="form-group py-1 col-md-6">
    <label for="text"> {{__('Text')}} </label>
    {!! Form::text('text',request()->text ??null,['id'=>'text','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'text')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="name"> {{__('Name')}} </label>
    {!! Form::text('name',request()->name ??null,['id'=>'name','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="email"> {{__('Email')}} </label>
    {!! Form::email('email',request()->email ??null,['id'=>'email','class'=>'form-control col',disable_on_show()]) !!}
    {{input_error($errors,'email')}}
</div>
@if(request()->has('type')) <input type="hidden" name="type" value="{{request()->type}}"> @endif

