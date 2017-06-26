<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="/admin" class="logo" style="color: #fd7e80;font-family: cursive">Sage <span class="lite">Property</span></a>
    <!--logo end-->

   {{-- <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>--}}

    <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- user login dropdown start-->
            @if(Auth::guest())
                <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/admin_joke/img/avatar1_small.jpg">
                            </span>
                    <span class="username">Jenifer Smith</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon_key_alt"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @else
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/images/user.png" style="width: 30px; height: 30px;">
                            </span>
                        <span class="username">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="icon_key_alt"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
<!--header end-->

<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="/admin">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{--<li class="active">--}}
                {{--<a class="" href="/admin/admin_jokes">--}}
                    {{--<i class="icon_folder-add"></i>--}}
                    {{--<span>Add admin_joke</span>--}}
                {{--</a>--}}
            {{--</li> --}}
            <li class="">
                <a class="" href="/admin/team">
                    <i class="icon_folder-open_alt"></i>
                    <span>Our Team</span>
                </a>
            </li>
            <li >
                <a class="" href="/admin/enquire">
                    <i class="icon_contacts_alt"></i>
                    <span>Enquiries</span>
                </a>
            </li>
            <li >
                <a class="" href="/admin/contact">
                    <i class="icon_contacts_alt"></i>
                    <span>Contacts</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->