<a href="{{isset($route) ? $route : 'javascript:void(0);'}}" data-toggle="tooltip" data-placement="top" title="{{$tooltip}}"
    class="btn btn-icon btn-icon btn-success waves-effect waves-float waves-light">
    <i class="fa fa-edit"></i> @if(isset($buttonText)) {{$buttonText }} @endif
</a>
