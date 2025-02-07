<header>
    <div class="bd-header-top">
        <div class="bd-header-top-left">
            <ul>
                <li>
                    <a href="tel:+994772201808">
                        <span>
                            <i class="fa-solid fa-phone-volume"></i>
                        </span>+994 77 220 08 18
                    </a>
                </li>
                <li>
                    <a href="mailto:info@hilanguages.az">
                        <span>
                            <i class="fa-sharp fa-light fa-envelope"></i>
                        </span>info@hilanguages.az
                    </a>
                </li>
            </ul>
        </div>
        <div class="bd-header-top-right text-md-end">
            <a href="#">
                <span>
                    <i class="fa-sharp fa-regular fa-location-dot"></i>
                </span>Akademik Həsən Əliyev küçəsi, 80D
            </a>
        </div>
    </div>
    <div class="bd-header-area header-style-one" id="header-sticky">
        <div class="bd-header-inner">
            <div class="bd-header-left">
                <div class="bd-header-logo">
                    <a href="{{ localized_route('index', [], app()->getLocale()) }}">
                        <img src="{{ asset('images/logo/hilanguage.png') }}" alt="logo">
                    </a>
                </div>
                <div class="bd-header-category d-none d-lg-block">
                    <div class="bd-category-btn">
                        <i class="fa-solid fa-grid"></i> {{ __('messages.menu_item1') }}
                    </div>
                    <div class="bd-category-dropdown">
                        <nav>
                            <ul>
                                <li>
                                    <a href="courses.html">Başlanğıc Səviyyə (Beginner - A1)</a>
                                </li>
                                <li>
                                    <a href="courses.html">Orta Səviyyə (Intermediate - B1)</a>
                                </li>
                                <li>
                                    <a href="courses.html">İrəliləmiş Səviyyə (Advanced - C1/C2)</a>
                                </li>
                                <li>
                                    <a href="courses.html">IELTS Hazırlıq</a>
                                </li>
                                <li>
                                    <a href="courses.html">TOEFL Hazırlıq</a>
                                </li>
                                <li>
                                    <a href="courses.html">Akademik Yazı və Danışıq</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bd-header-menu">
                <nav class="main-menu bd-mobile-menu-active d-none d-xl-block">
                    <ul>
                        <li class="menu-item-has-children">
                            <a
                                href="{{ localized_route('index', [], app()->getLocale()) }}">{{ __('messages.menu_item2') }}</a>
                            <ul class="submenu last-children">
                                <li>
                                    <a
                                        href="{{ localized_route('about', [], app()->getLocale()) }}">{{ __('messages.menu_item2_1') }}</a>
                                </li>
                                <li>
                                    <a
                                        href="{{ localized_route('faq', [], app()->getLocale()) }}">{{ __('messages.menu_item2_2') }}</a>
                                </li>
                                <li>
                                    <a
                                        href="{{ localized_route('ourTeam', [], app()->getLocale()) }}">{{ __('messages.menu_item2_3') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ localized_route('course', [], app()->getLocale()) }}">Kurslar</a>
                        </li>

                        <li class="menu-item-has-children">
                            <a href="#">Media</a>
                            <ul class="submenu last-children">
                                <li>
                                    <a href="{{ localized_route('photoGallery', [], app()->getLocale()) }}">Foto
                                        Qalereya</a>
                                </li>
                                <li>
                                    <a href="{{ localized_route('videoGallery', [], app()->getLocale()) }}">Video
                                        Qalereya</a>
                                </li>
                                <li>
                                    <a href="{{ localized_route('blog', [], app()->getLocale()) }}">Xəbərlər</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Nəticələrimiz</a>
                            <ul class="submenu last-children">
                                <li>
                                    <a href="{{ localized_route('students', [], app()->getLocale()) }}">Tələbələr</a>
                                </li>
                                <li>
                                    <a href="videogallery.html">Yorumlar</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ localized_route('contact', [], app()->getLocale()) }}">Əlaqə</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ localized_route('career', [], app()->getLocale()) }}">Vakansiya</a>
                        </li>
                        <li class="menu-item-has-children language-selector">
                            <a href="#" id="selected-lang">Az</a>
                            <ul class="submenu">
                                <li><a href="{{ current_route('az') }}">Az</a></li>
                                <li><a href="{{ current_route('en') }}">En</a></li>
                                <li><a href="{{ current_route('ru') }}">Rus</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="bd-header-right">
                <div class="bd-header-sign-btn">
                    <a class="bd-btn btn-outline-primary h-40px" href="#">Bilet al</a>
                    <a class="bd-btn btn-outline-border-primary h-40px" href="#">Qeydiyyatdan keç</a>
                </div>
                <div class="bd-header-hamburger">
                    <div class="sidebar-toggle">
                        <a class="bar-icon" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 <!-- Offcanvas area start -->
 <div class="fix">
    <div class="bd-offcanvas-area">
        <div class="bd-offcanvas-wrapper">
            <div class="bd-offcanvas-content">
                <div class="bd-offcanvas-top d-flex justify-content-between align-items-center mb-30">
                    <div class="bd-offcanvas-logo">
                   
                    </div>
                    <div class="bd-offcanvas-close">
                        <button class="bd-offcanvas-close-icon animation--flip">
                            <span class="bd-offcanvas-m-lines">
                            <span class="bd-offcanvas-m-line line--1"></span><span
                                class="bd-offcanvas-m-line line--2"></span><span
                                class="bd-offcanvas-m-line line--3"></span>
                            </span>
                        </button>
                    </div>
                </div>
               
                <div class="bd-mobile-menu-smaller">
                    <div class="bd-offcanvas-menu mb-30">
                        <nav></nav>
                    </div>
                </div>
             
            

                <div class="bd-offcanvas-btn-wrap mb-30">
             
                    <div class="bd-offcanvas-btn d-flex align-items-center gap-30">
                        <a class="bd-btn btn-primary" href="#">Bilet Al</a>
                        <a class="bd-btn btn-outline-border-secondary" href="#">Qeydiyyat</a>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>
<div class="bd-offcanvas-overlay"></div>
<div class="bd-offcanvas-overlay-white"></div>
<!-- Offcanvas area start -->

<!-- search popup area start here  -->
<div class="bd-search-popup-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bd-search-popup">
                    <div class="bd-search-form">
                        <form action="#">
                            <div class="bd-search-input">
                                <input type="search" name="search" placeholder="Type here to search ...">
                                <div class="bd-search-submit">
                                    <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="bd-search-close">
                            <div class="bd-search-close-btn">
                                <button><i class="fa-thin fa-close"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search popup overlay  -->
<div class="bd-search-overlay"></div>
<!-- search popup area end here  -->