@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Role name')}}</label>
    {!! Form::text('name',null,['class'=>'form-control col','placeholder'=>__("Role name"),isset($readOnly)?$readOnly:null,disable_on_show()]) !!}
    {{input_error($errors,'name')}}
</div>

@foreach(\App\Models\Admin::GROUPS as $group)
    <div class="form-group py-1 col-md-4 {{hidden_on_show()}}">
        <label for="formInputRole"> {{__($group)}} </label>
        {{Form::select('permissions[]', \App\Models\Permission::where('group',$group)->get()->pluck('name_translated', 'id'), (isset($role->permissions)? $role->permissions: null), ['class'=>'form-control col select2',hidden_on_show(),  'multiple'] ) }}

    </div>
@endforeach
