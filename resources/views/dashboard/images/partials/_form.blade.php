@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif

@if(isset($image->image))
    <div class="col-md-12">
        <img id="image" src="{{url($image->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif

<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image ')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>


<div class="form-group py-1 col-md-6">
    <label for="title-en"> {{__('Title in English')}}</label>
    {!! Form::text('title[en]',($image->title ? $image->getTranslation('title', 'en') : null),['id'=>'title-en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title-ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title[ar]',($image->title ? $image->getTranslation('title', 'ar') : null),['id'=>'title-ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-en"> {{__('Description in English')}}</label>
    {!! Form::text('description[en]',($image->description ? $image->getTranslation('description', 'en') : null),['id'=>'description-en','class'=>'form-control col','placeholder'=>__("Description in English")]) !!}
    {{input_error($errors,'description[en]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="description-ar"> {{__('Description in Arabic')}}</label>
    {!! Form::text('description[ar]',($image->description ? $image->getTranslation('description', 'ar') : null),['id'=>'description-ar','class'=>'form-control col','placeholder'=>__("Description in Arabic")]) !!}
    {{input_error($errors,'description[ar]')}}
</div>


@section('footer')
{{--    <script>--}}
{{--        CKEDITOR.replace( 'content' );--}}
{{--    </script>--}}

<script>
    console.log('out')



    var loadImage = function(event) {
        console.log('image')

        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

</script>
@endsection
