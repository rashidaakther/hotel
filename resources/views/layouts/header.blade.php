<header class="gdlr-header-wrapper">
    <!-- top navigation -->
    <div class="top-navigation-wrapper">
        <div class="top-navigation-container container">
            <div class="top-navigation-left">
                <div class="top-navigation-left-text">
                    <i class="gdlr-icon fa fa-phone" style="color: #fff; font-size: 16px; "></i> <a href="tel:01710469715">01710-469715</a>
                </div>
            </div>
            <div class="top-navigation-right">
                <div class="top-social-wrapper">
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <img width="32" height="32" src="{{ asset('images/light/social-icon/facebook.png')}}"
                                alt="Facebook">
                        </a>
                    </div> 
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <img width="32" height="32" src="{{ asset('images/light/social-icon/linkedin.png')}}"
                                alt="Linkedin">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <img width="32" height="32" src="{{ asset('images/light/social-icon/pinterest.png')}}"
                                alt="Pinterest">
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#" target="_blank">
                            <img width="32" height="32" src="{{ asset('images/light/social-icon/twitter.png')}}"
                                alt="Twitter">
                        </a>
                    </div>
                 
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="top-navigation-divider"></div>

    <!-- logo -->
    <div class="gdlr-header-inner">
        <div class="gdlr-header-container container">
            <!-- logo -->
            <div class="gdlr-logo">
                <div class="gdlr-logo-inner">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png')}}" alt=""> </a>
                    <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                        <button class="dl-trigger">Open Menu</button>
                        <ul id="menu-main-menu" class="dl-menu gdlr-main-mobile-menu">
                            <li class="menu-item current-menu-item "><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item menu-item-has-children"><a href="javascript:void(0)">Accommodation</a>
                                <ul class="dl-submenu">
                                    <li class="menu-item"><a href="{{ route('accommodation') }}">Room and Suites</a>
                                    </li>
                                    <li class="menu-item"><a href="{{ route('tariff') }}">Tariff</a></li>

                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('dining') }}">Dining</a></li>
                            <li class="menu-item"><a href="{{ route('meeting') }}">Meeting</a></li>
                            <li class="menu-item"><a href="{{ route('facilities') }}">Facilities</a></li>
                            <li class="menu-item"><a href="{{ route('reservation') }}">Reservation</a></li>
                            <li class="menu-item"><a href="{{ route('offers') }}">Offer</a></li>
                            <li class="menu-item"><a href="{{ route('contact-us') }}">Contact Us</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- navigation -->
            <div class="gdlr-navigation-wrapper">
                <nav class="gdlr-navigation" id="gdlr-main-navigation" role="navigation">
                    <ul id="menu-main-menu-1" class="sf-menu gdlr-main-menu">
                        <li class="menu-item  @if(request()->route()->named('home'))  current-menu-item  current-menu-item  @endif  menu-item gdlr-normal-menu">
                            <a href="{{ route('home') }}">Home</a></li>
                        <li class="@if(request()->route()->named('accommodation') or request()->route()->named('tariff')) current-menu-item  current-menu-item @endif menu-item menu-item-has-childrenmenu-item menu-item-has-children gdlr-normal-menu">
                            <a href="javascript:void(0)" class="sf-with-ul-pre">Accommodation</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('accommodation') }}">Room and Suites</a></li>
                                <li class="menu-item"><a href="{{ route('tariff') }}">Tariff</a></li>
                            </ul>
                        </li>
                        <li class="@if(request()->route()->named('dining')) current-menu-item  current-menu-item @endif menu-itemmenu-item gdlr-normal-menu"><a href="{{ route('dining') }}">Dining</a>
                        </li>
                        <li class="@if(request()->route()->named('meeting')) current-menu-item  current-menu-item @endif menu-itemmenu-item gdlr-normal-menu"><a href="{{ route('meeting') }}">Meeting</a>
                        </li>
                        <li class="@if(request()->route()->named('facilities')) current-menu-item  current-menu-item @endif menu-itemmenu-item gdlr-normal-menu">
                            <a href="{{ route('facilities') }}">Facilities</a></li>
                        <li class="menu-itemmenu-item gdlr-normal-menu"><a href="{{ route('reservation') }}">Reservation</a></li>
                        <li class="menu-itemmenu-item gdlr-normal-menu"><a href="{{ route('offers') }}">Offer</a></li>
                        <li class="@if(request()->route()->named('contact-us')) current-menu-item  current-menu-item @endif menu-itemmenu-item gdlr-normal-menu"><a href="{{ route('contact-us') }}">Contact
                                Us</a></li>


                    </ul>
                </nav>

                <div class="gdlr-navigation-gimmick " id="gdlr-navigation-gimmick"></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>

<div id="gdlr-header-substitute"></div>
