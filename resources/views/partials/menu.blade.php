<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a>
        <img class="rounded-circle" width="80" height="80"
            src="https://laravel.pixelstrap.com/viho/assets/images/dashboard/1.png" alt="photo" />
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->nom }}&nbsp;{{ Auth::user()->prenom }}</h6>
        </a>
        <!-- <p class="mb-0 font-roboto">Human Resources Department</p> -->
        <p class="mb-0 font-roboto">{{session('my_profile')->profileName}}</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('dashboard')}}">
                            <i data-feather="git-pull-request"></i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    @if (count($menus) > 1)
                        @foreach ($menus as $menu)
                            <li class="dropdown">
                                <a class="nav-link menu-title " href="javascript:void(0)">
                                    <i data-feather="git-pull-request"></i>
                                    <span>{{$menu->titre}}</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="#">Accueil</a></li>
                                </ul>
                            </li>
                        @endforeach
                    @endif
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('dashboard')}}">
                            <i data-feather="git-pull-request"></i>
                            <span>My Account</span>
                        </a>
                    </li>
                    <!-- test setting-->
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{ route('settings.update')}}">
                            <i data-feather="git-pull-request"></i>
                            <span>Paramètre</span>
                        </a>
                    </li>
                    <!-- end test settings-->
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('payments.choice')}}">
                            <i data-feather="git-pull-request"></i>
                            <span>Payments</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('payments.choice')}}">
                            <i data-feather="git-pull-request"></i>
                            <span>Students</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('students.index')}}">Students list</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
