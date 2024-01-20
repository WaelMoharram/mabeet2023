<a href="{{isset($route) ? $route : 'javascript:void(0);'}}"
   @if(isset($tooltip) ) {{tooltip($tooltip)}} @endif class="btn btn-icon btn-icon  btn-secondary waves-effect waves-float waves-light">
    <i class="fa fa-eye"></i> @if(isset($buttonText)) {{$buttonText }} @endif
</a>
