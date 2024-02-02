
@if(isset($id))
    <a href="{{route('dashboard.'.$route.'.create',['id'=>$id])}}" class="btn btn-green" ><i data-feather="plus"></i> {{__('Add new '.$route)}}</a>
@else
    <a href="{{route('dashboard.'.$route.'.create')}}"  class="btn btn-green"><i data-feather="plus"> </i> {{__('Add new '.$route)}}</a>

@endif
{{--<div class="dropdown-menu dropdown-menu-right">--}}
{{--    <a class="dropdown-item" href="#">Chat</a>--}}
{{--    <a class="dropdown-item" href="#">Email</a>--}}
{{--    <a class="dropdown-item" href="#">Calendar</a>--}}
{{--</div>--}}
