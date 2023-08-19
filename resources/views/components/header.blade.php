@php
    use \Illuminate\Support\Facades\Route;
    use \Illuminate\Support\Facades\Auth;
@endphp

<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route("home")}}"><img src="{{asset("img/logo.png")}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li @class(["nav-item", "active" => Route::currentRouteName() == "home"])>
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li @class(["nav-item", "active" => Route::currentRouteName() == "shop"])>
                            <a class="nav-link" href="{{route('shop')}}">Shop</a></li>
                        @guest()
                            <li @class(["nav-item", "active" => Route::currentRouteName() == "login"])><a
                                    class="nav-link"
                                    href="{{route("login")}}">Login</a>
                            </li>
                        @endguest
                        @auth()
                            <li @class(["nav-item"])><a
                                    class="nav-link"
                                    href="{{route("dashboard")}}">Dashboard</a>
                            </li>
                            <li @class(["nav-item"])>
{{--                                <a--}}
{{--                                    class="nav-link"--}}
{{--                                    href="{{route("dashboard")}}">Dashboard</a>--}}
                                <form action="{{route("logout")}}" method="POST" class="nav-link p-0">
                                    @csrf
                                    <button type="submit" class="w-100 text-left bg-transparent border-0 nav-link pl-0">
                                        Logout
                                    </button>
                                </form>
                            </li>
{{--                            <li @class(["nav-item submenu dropdown"])>--}}
{{--                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--                                   aria-haspopup="true"--}}
{{--                                   aria-expanded="false" href="{{route("dashboard")}}">{{Auth::user()->name}}</a>--}}
{{--                                <ul class="dropdown-menu">--}}
{{--                                    <li class="nav-item"><a class="nav-link" href="tracking.html">Profile</a></li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <form action="{{route("logout")}}" method="POST" class="nav-link ">--}}
{{--                                            @csrf--}}
{{--                                            <button type="submit" class="w-100 text-left bg-transparent border-0 nav-link pl-0">Logout</button>--}}
{{--                                        </form>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        @endauth
                    </ul>
                    <ul class=" nav navbar-nav navbar-right">
                        {{--                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>--}}
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
