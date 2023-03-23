@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif


<div class="form-group py-1 col-md-12">
    <label for="title"> {{__('Title')}}</label>
    {!! Form::text('title',null,['id'=>'title','class'=>'form-control col','placeholder'=>__("Title")]) !!}
    {{input_error($errors,'title')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="content"> {{__('Content')}} </label>
    {!! Form::textarea('content',null,['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endsection
