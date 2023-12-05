<div class="header">
    <div class="logo logo-dark">
        <a href="{{ route('admin.dashboard') }}">
            <img src="@if(!empty($siteSetting) &&  !empty($siteSetting->logo) && file_exists(base_path("uploads/setting/".$siteSetting->logo))) {{asset("uploads/setting/".$siteSetting->logo)}} @else{{ asset('assets/images/logo/logo.png') }}  @endif " alt="Logo">
            <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold.png') }}" alt="Logo">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Logo">
            <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold-white.png') }}" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                    <i class="anticon anticon-search"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <a href="javascript:void(0);" data-toggle="dropdown">
                    <i class="anticon anticon-bell notification-badge"></i>
                </a>
                <div class="dropdown-menu pop-notification">
                    <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                        <p class="text-dark font-weight-semibold m-b-0">
                            <i class="anticon anticon-bell"></i>
                            <span class="m-l-10">Notification</span>
                        </p>
                        <a class="btn-sm btn-default btn" href="javascript:void(0);">
                            <small>View All</small>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-mail"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-dark">You received a new message</p>
                                        <p class="m-b-0"><small>8 min ago</small></p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-user-add"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-dark">New user registered</p>
                                        <p class="m-b-0"><small>7 hours ago</small></p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                <div class="d-flex">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-user-add"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-dark">System Alert</p>
                                        <p class="m-b-0"><small>8 hours ago</small></p>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-15 ">
                                <div class="d-flex">
                                    <div class="avatar avatar-gold avatar-icon">
                                        <i class="anticon anticon-user-add"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <p class="m-b-0 text-dark">You have a new update</p>
                                        <p class="m-b-0"><small>2 days ago</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#quick-view">
                    <i class="anticon anticon-logout"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
