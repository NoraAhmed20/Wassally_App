<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Delivry App</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <link rel="stylesheet" href="{{ asset('css/a.css') }}">
    <link rel="stylesheet" href="{{ asset('css/a2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/a.css.map') }}">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> --}}
    <!---we had linked our css file----->
</head>

<body>
    <div class="navbar">
        <div class="container-logo-navbar">
            <img src="{{ url('/imgs/logo.png') }}" />
        </div>
        <nav>
            <ul id='MenuItems'>
                <li><a href='{{route("Home")}}'>Home</a></li>
                <li><a href='about'>About Us</a></li>
                @auth
                    @cannot('is_provider')
                        <li id=""><a href='addOrder'>Order</a></li>
                        <li id=""><a href='post'>My Orders</a></li>
                    @endcan
                @endauth
                @can('is_provider')
                    <li id="orders"><a href="allOrders">Orders</a></li>
                    <li id="profile"><a href="/profile">My profile</a></li>
                @endcan
                <li><a href='contact'>Contact</a></li>
                @auth
                    <li>{{ Auth::user()->name }}</li>
                    @can('is_provider')
                    <li><img src="\usersImgs\{{Auth::user()->provider->Profile_pic}}" /></li>
                    @endcan
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @else
                    <li><a href="{{ route('sign_in') }}">Login</a></li>
                @endauth
            </ul>
        </nav>
        {{-- ///////////////////////////////////// --}}
        @can('is_provider')
            <form action="{{ url('/search') }}" type="GET">
                <div class="container-search-navbar">
                    <div class="main-search-input-item">
                        <input type="search" name="search" placeholder="From ...">
                        <input type="search" name="search2" placeholder="To ...">
                    </div>
                    <button type="submit" class="main-search-button">Search</button>
                </div>
            </form>
        @endcan
        {{-- ///////////////////////////////////////////// --}}
    </div>
    <div class="container-home">
    </div>
    <!-- Start About Section  -->
    <div class="container">
        @yield('content')
    </div>
    <!-- End About Section  -->

    <!-- Start Footer  -->
    <div class="container-footer">
        <div class="footer container">
            <div class="footer-our-service">
                <h3>Why us ?</h3>
                <ul>
                    <li>Greet the customer with a smile</li>
                    <li>Be flexible when possible</li>
                    <li>Be prompt and attentive</li>
                    <li>Check on your customers often</li>
                    <li>Be proactive</li>
                    <li>Handle challenges immediately</li>
                </ul>
            </div>
            {{-- <div class="footer-our-service">
                <h3>Our locations</h3>
                <ul>
                    <li>Jollibee</li>
                    <li>Popeyes</li>
                    <li>Federal Donuts</li>
                    <li>Prince's</li>
                    <li>Gus's</li>
                    <li>Reel M Inn</li>
                </ul>
            </div> --}}
            <div class="footer-our-service">
                <h3>WASSALLY IN ASWAN</h3>
                <ul>
                    <li>
                        <span>
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        support@wassally.com
                    </li>
                    <li>
                        <span>
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        +201054466589
                    </li>
                    <li>
                        <span>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        /wassally
                    </li>
                </ul>
            </div>
        </div>
        <span class="line container"></span>
        <div class="copy-right container">
            <p>Copyright © 2022 wassally Inc. All rights reserved.</p>
        </div>
    </div>
    <!-- End Footer  -->
    <script src="{{ asset('javascript/java.js') }}"></script>
</body>

</html>
