<div class="navbar-custom topnav-navbar">
    <div class="container-fluid detached-nav">
        <!-- Topbar Logo -->
        <div class="logo-topbar">
            <!-- Logo light -->
            <a href="{{URL::to('/')}}" class="logo-light">
                <span class="logo-lg">
                    <img src="{{URL::to('backend')}}/assets/images/logo.png" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="{{URL::to('backend')}}/assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="{{URL::to('/')}}" class="logo-dark">
                <span class="logo-lg">
                    <img src="{{URL::to('backend')}}/assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="{{URL::to('backend')}}/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                </span>
            </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu">
            <i class="mdi mdi-menu"></i>
        </button>

        <!-- Horizontal Menu Toggle Button -->
        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <ul class="list-unstyled topbar-menu float-end mb-0">
            <li class="dropdown notification-list d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="ri-search-line noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

{{--            <li class="dropdown notification-list topbar-dropdown">--}}
{{--                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
{{--                    <img src="{{URL::to('backend')}}/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">--}}
{{--                    <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">--}}
{{--                    <!-- item-->--}}
{{--                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                        <img src="{{URL::to('backend')}}/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="dropdown notification-list">--}}
{{--                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
{{--                    <i class="ri-notification-3-line noti-icon"></i>--}}
{{--                    <span class="noti-icon-badge"></span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">--}}
{{--                    <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col">--}}
{{--                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">--}}
{{--                                    <small>Clear All</small>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="px-3" style="max-height: 300px;" data-simplebar>--}}

{{--                        <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>--}}
{{--                        <!-- item-->--}}

{{--                        <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">--}}
{{--                            <div class="card-body">--}}
{{--                                <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="flex-shrink-0">--}}
{{--                                        <div class="notify-icon bg-primary">--}}
{{--                                            <i class="mdi mdi-comment-account-outline"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="flex-grow-1 text-truncate ms-2">--}}
{{--                                        <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>--}}
{{--                                        <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- All-->--}}
{{--                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">--}}
{{--                        View All--}}
{{--                    </a>--}}

{{--                </div>--}}
{{--            </li>--}}

            <li class="notification-list d-none d-sm-inline-block">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                    <i class="ri-settings-3-line noti-icon"></i>
                </a>
            </li>

            <li class="notification-list d-none d-sm-inline-block">
                <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                    <i class="ri-moon-line noti-icon"></i>
                </a>
            </li>

            <li class="notification-list d-none d-md-inline-block">
                <a class="nav-link" href="#" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar">
                    <img src="{{URL::to('/')}}/{{isset(Auth::user()->avater)?Auth::user()->avater:'gmfaruk2021.png'}}" alt="{{isset(Auth::user()->name)?Auth::user()->name:'Jhon Dew'}}" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">{{isset(Auth::user()->name)?Auth::user()->name:'Jhon Dew'}}</span>
{{--                    <span class="account-position">Founder</span>--}}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                <!-- item-->
                <a href="{{route('my.account')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle me-1"></i>
                    <span>My Account</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}" class="dropdown-item notify-item"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </form>
        </div>
    </li>
</ul>

</div>
</div>

<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{URL::to('/')}}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{URL::to('backend')}}/assets/images/logo.png" alt="logo" height="22">
        </span>
        <span class="logo-sm">
            <img src="{{URL::to('backend')}}/assets/images/logo-sm.png" alt="small logo" height="22">
        </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{URL::to('/')}}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{URL::to('backend')}}/assets/images/logo-dark.png" alt="dark logo" height="22">
        </span>
        <span class="logo-sm">
            <img src="{{URL::to('backend')}}/assets/images/logo-dark-sm.png" alt="small logo" height="22">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{URL::to('backend')}}/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">{{isset(Auth::user()->name)?Auth::user()->name:'Jhon Dew'}}</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            @forelse($menus as $key=>$menu)

            @canany(json_decode($menu->slug,true))
            @php
                $activeSubmenuNumber=count($menu->activeSubMenu);
                $firstLiActiveClass='';
                if (Request()->path()==$menu->url){
                    $firstLiActiveClass='active';
                }
            @endphp

            <li class="side-nav-item">
                @php
                $url=URL::to($menu->url);
                if ($activeSubmenuNumber>0){

                    $url='#'.\Str::slug( $menu->name.$menu->id);
                }
                @endphp

                <a  @if($activeSubmenuNumber>0) data-bs-toggle="collapse" aria-expanded="false" aria-controls="{{$url}}" @endif href="{{$url}}"  class="side-nav-link" target="{{$menu->open_new_tab==\App\Models\Menu\Menu::OPEN_NEW_TAB?'_blank':''}}">
                    <i class="{{$menu->icon_class}}"></i>
                    <span> {{ __($menu->name) }} </span>
                    @if($activeSubmenuNumber>0)
                    <span class="menu-arrow"></span>
                    @endif
                </a>

                @if($activeSubmenuNumber>0)
                <div class="collapse" id="{{\Str::slug( $menu->name.$menu->id)}}">
                    <ul class="side-nav-second-level">
                        @foreach($menu->activeSubMenu as $subMenu)
                            @canany(json_decode($subMenu->slug,true))
                            <li><a href="{{URL::to($subMenu->url)}}" target="{{$subMenu->open_new_tab==\App\Models\Menu\SubMenu::OPEN_NEW_TAB?'_blank':''}}">{{ __($subMenu->name) }}</a></li>
                            @endcanany
                        @endforeach
                    </ul>
                </div>
                @endif

            </li>
            @endcanany
            @empty
            <li class="side-nav-title side-nav-item">No Menu Data Found</li>
        @endforelse
    </ul>
    <!--- End Sidemenu -->
    <div class="clearfix"></div>
</div>
</div>
