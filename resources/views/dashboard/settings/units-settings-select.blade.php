
<ul class="nav nav-tabs tabs-wg pt-3 px-3 border-0" id="myTab" role="tablist">
    @can('index seasons')
        <li class="nav-item">
            <a href="{{route('dashboard.seasons.index')}}" class="nav-link  @if(Request::is('dashboard/seasons'))  active @endif ">{{__('Seasons')}}</a>
        </li>
    @endcan

        @can('index unit types')
            <li class="nav-item">
                <a href="{{route('dashboard.unit-types.index')}}" class="nav-link  @if(Request::is('dashboard/unit-types'))  active @endif ">{{__('Unit types')}}</a>
            </li>
        @endcan

        @can('index facilities')
            <li class="nav-item">
                <a href="{{route('dashboard.facilities.index')}}" class="nav-link  @if(Request::is('dashboard/facilities'))  active @endif ">{{__('Facilities')}}</a>
            </li>
        @endcan

        @can('index services')
            <li class="nav-item">
                <a href="{{route('dashboard.services.index')}}" class="nav-link  @if(Request::is('dashboard/services'))  active @endif ">{{__('Services')}}</a>
            </li>
        @endcan

        @can('index budgets')
            <li class="nav-item">
                <a href="{{route('dashboard.budgets.index')}}" class="nav-link  @if(Request::is('dashboard/budgets'))  active @endif ">{{__('Budgets')}}</a>
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
