
<ul class="nav nav-tabs tabs-wg pt-3 px-3 border-0" id="myTab" role="tablist">
    @can('index roles')
        <li class="nav-item">
            <a href="{{route('dashboard.roles.index')}}" class="nav-link  @if(Request::is('dashboard/roles'))  active @endif ">{{__('Roles')}}</a>
        </li>
    @endcan

        @can('index countries')
            <li class="nav-item">
                <a href="{{route('dashboard.countries.index')}}" class="nav-link  @if(Request::is('dashboard/countries'))  active @endif ">{{__('Countries')}}</a>
            </li>
        @endcan

        <li class="nav-item" role="presentation">
            <form class="">
                @if(request()->has('role'))
                    <input type="hidden" name="role" value="{{request()->role}}">
                @endif
                <div class="d-flex align-items-center search-form">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <img style="position: relative;top:8px" src="assets/images/search.png" alt="">
                        </div>
                        <input type="text" name="name" class="form-control bg-transparent border-0" value="{{request()->name}}" style="padding:12px" placeholder="{{__('Search')}}">
                    </div>
                    <button class="nav-link active" type="submit">{{__('Search')}}</button>
                </div>

            </form>
        </li>
</ul>
