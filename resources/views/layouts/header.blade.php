<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_container d-flex flex-row align-items-center justify-content-start">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <div>destino</div>
                            <div>travel agency</div>
                            <div class="logo_image"><img src="{{ asset('images/logo.png') }}" alt=""></div>
                        </div>
                    </div>

                    <!-- Main Navigation -->
                    <nav class="main_nav ml-auto">
                        <ul class="main_nav_list">
                            <li class="main_nav_item {{ (request()->is('/')) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                            <li class="main_nav_item {{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('about') }}">About us</a></li>
                            <li class="main_nav_item {{ (request()->is('offers')) ? 'active' : '' }}"><a href="{{ url('offers') }}">Offers</a></li>
                            <li class="main_nav_item {{ (request()->is('news')) ? 'active' : '' }}"><a href="{{ url('news') }}">News</a></li>
                            <li class="main_nav_item {{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>

                    <!-- Search -->
                    <div class="search">
                        <form action="#" class="search_form">
                            <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                            <button type="submit" class="search_button ml-auto ctrl_class"><img src="{{ asset('images/search.png') }}" alt=""></button>
                        </form>
                    </div>

                    <!-- Hamburger -->
                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu -->
<div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
        <div class="menu_close"></div>
    </div>

    <!-- Menu Items -->
    <div class="menu_inner menu_mm">
        <div class="menu menu_mm">
            <div class="menu_search_form_container">
                <form action="#" id="menu_search_form">
                    <input type="search" class="menu_search_input menu_mm">
                    <button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="{{ asset('images/search_2.png') }}" alt=""></button>
                </form>
            </div>
            <ul class="menu_list menu_mm">
                <li class="menu_item menu_mm"><a href="{{ url('/') }}">Home</a></li>
                <li class="menu_item menu_mm"><a href="{{ url('about') }}">About us</a></li>
                <li class="menu_item menu_mm"><a href="{{ url('offers') }}">Offers</a></li>
                <li class="menu_item menu_mm"><a href="{{ url('news') }}">News</a></li>
                <li class="menu_item menu_mm"><a href="{{ url('contact') }}">Contact</a></li>
            </ul>

            <!-- Menu Social -->
            
            <div class="menu_social_container menu_mm">
                <ul class="menu_social menu_mm">
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
        </div>

    </div>
</div>