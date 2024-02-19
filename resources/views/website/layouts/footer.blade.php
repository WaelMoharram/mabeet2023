<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    @hasSection('type')
                        <img src="{{asset('/')}}/asset/images/foot-logo.png" class="img-fluid">
                    @else
                        <img src="{{asset('/')}}/asset/images/logo.png" class="img-fluid">

                    @endif
                </div>
                <p>{{__('Request accommodation and receive offers directly from homeowners')}}</p>

            </div>
            <div class="col-lg-12">
                <div class="row links">
                    <div class="col-lg-3 col-md-6 group text-center">
                        <h1 class="title-foot">{{__('Follow us')}}</h1>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="{{option('twitter')}}">{{__('Twitter')}}</a></li>
                            <li><a target="_blank" href="{{option('instagram')}}">{{__('Instagram')}}</a></li>
                            <li><a target="_blank" href="{{option('youtube')}}">{{__('Youtube')}}</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 group text-center">
                        <h1 class="title-foot">{{__('About mabeet')}}</h1>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="https://wa.me/{{option('whatsapp')}}">{{__('Contact us - whatsapp')}}</a></li>
                            @foreach(\App\Models\Page::where('show_in_footer',1)->get() as $page)
                                <li><a href="{{route('page',$page->title)}}">{{$page->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 group text-center">
                        <h1 class="title-foot">{{__('Property Owner')}}</h1>
                        <ul class="list-unstyled">
                            <li><a href="{{route('page',\App\Models\Page::find(6)->title)}}">{{__('How to add unit')}}</a></li>
                            <li><a href="{{route('units.create')}}">إضافة مسكن</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 group text-center">
                        <h1 class="title-foot">{{__('Housing Seeker')}}</h1>
                        <ul class="list-unstyled">
                            <li><a href="{{route('page',\App\Models\Page::find(7)->title)}}">{{__('How Mabeet work')}}</a></li>
                            <li><a href="">طلب جديد</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="copyright">© {{date('Y')}} جميع الحقوق محفوظه مبيت.كوم </p>

        </div>
    </div>
</footer>
@include('sweetalert::alert')
