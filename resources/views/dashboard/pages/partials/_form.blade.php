@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif



@if(isset($page->image))
    <div class="col-md-12">
        <img id="image" src="{{url($page->image)}}" style="width: 100px;border-radius: 50px;">
    </div>
@else
    <div class="col-md-12">
        <img id="image" style="width: 100px;border-radius: 50px;">
    </div>
@endif
<div class="form-group py-1 col-md-12">
    <label for="formInputRole"> {{__('Image')}}</label>
    <br>
    {!! Form::file('image',['class'=>'form-control col','placeholder'=>__("Image"),'onchange'=>"loadImage(event)"]) !!}
    {{input_error($errors,'image')}}
</div>
{{--//show_in_footer select--}}
<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Show in nav')}}</label>
    <br>
    {!! Form::select('show_in_nav',['1'=>__('Yes'),'0'=>__('No')],null,['class'=>'form-control col']) !!}
    {{input_error($errors,'show_in_nav')}}
</div>

{{--//show_in_footer select--}}
<div class="form-group py-1 col-md-6">
    <label for="formInputRole"> {{__('Show in footer')}}</label>
    <br>
    {!! Form::select('show_in_footer',['1'=>__('Yes'),'0'=>__('No')],null,['class'=>'form-control col']) !!}
    {{input_error($errors,'show_in_footer')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title_ar"> {{__('Title in Arabic')}}</label>
    {!! Form::text('title[ar]',($page ? $page->getTranslation('title', 'ar') : null),['id'=>'title_ar','class'=>'form-control col','placeholder'=>__("Title in Arabic")]) !!}
    {{input_error($errors,'title[ar]')}}
</div>

<div class="form-group py-1 col-md-6">
    <label for="title_en"> {{__('Title in English')}}</label>
    {!! Form::text('title[en]',($page ? $page->getTranslation('title', 'en') : null),['id'=>'title_en','class'=>'form-control col','placeholder'=>__("Title in English")]) !!}
    {{input_error($errors,'title[en]')}}
</div>


<div class="form-group py-1 col-md-12">
    <label for="content_ar"> {{__('Content in Arabic')}} </label>
    {!! Form::textarea('content[ar]',($page ? $page->getTranslation('content', 'ar') : null),['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content[ar]')}}
</div>

<div class="form-group py-1 col-md-12">
    <label for="content_en"> {{__('Content in English')}} </label>
    {!! Form::textarea('content[en]',($page ? $page->getTranslation('content', 'en') : null),['id'=>'editor','class'=>'form-control col']) !!}
    {{input_error($errors,'content[en]')}}
</div>

@section('footer')
    <script>
        CKEDITOR.replace( 'content[ar]' );
        CKEDITOR.replace( 'content[en]' );
    </script>

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
