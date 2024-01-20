<a href="{{isset($route) ? $route : 'javascript:void(0);'}}"
   @if(isset($tooltip) ) {{tooltip($tooltip)}} @endif >
    <img style="width: 25px;height: 25px;" src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon.png" alt=""> @if(isset($buttonText)) {{$buttonText }} @endif
</a>
