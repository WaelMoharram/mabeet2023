


<button style="background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;" data-toggle="modal" data-target="#usersDelete{{$id}}" @if(isset($tooltip) ) {{tooltip($tooltip)}} @endif  >

    <img style="width: 25px;height: 25px;" src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon2.png" alt=""> @if(isset($buttonText)) {{$buttonText }} @endif

</button>

<!-- Modal -->
<div class="modal fade text-left" id="usersDelete{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">{{__('Delete Record')}}</h4>
                <button style="background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img style="width: 25px;height: 25px;" src="{{asset('assets/mabeet-dashboard')}}/assets/images/Icon2.png" alt="">
                </button>
            </div>
            <div class="modal-body">
                <h5>{{__('Are you sure you want to delete record ?')}}</h5>
            </div>
            <div class="modal-footer">
                <form method="POST" action=
                    {{$route}}>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button style="border-radius: 25px;" type="submit" class="btn btn-outline-danger">{!! __('Delete') !!}</button>

                </form>
                <button style="border-radius: 25px;" type="button" class="btn btn-outline-success" data-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>
