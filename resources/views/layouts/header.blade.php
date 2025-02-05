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
                    <a href="index.html">
                        <img src="{{ asset('images/logo/hilanguage.png') }}" alt="logo">
                    </a>
                </div>
                <div class="bd-header-category d-none d-lg-block">
                    <div class="bd-category-btn">
                        <i class="fa-solid fa-grid"></i> Kateqoriya
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
                            <a href="index.html">Ana səhifə</a>
                            <ul class="submenu last-children">
                                <li>
                                    <a href="{{ localized_route('about', [], app()->getLocale()) }}">Haqqımızda</a>
                                </li>
                                <li>
                                    <a href="{{ localized_route('faq', [], app()->getLocale()) }}">FAQ</a>
                                </li>
                                <li>
                                    <a href="{{ localized_route('ourTeam', [], app()->getLocale()) }}">Komandamız</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="courses.html">Kurslar</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ localized_route('blog', [], app()->getLocale()) }}">Xəbərlər</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="{{ localized_route('contact', [], app()->getLocale()) }}">Əlaqə</a>
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
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="karyera.html">Vakansiya</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="bd-header-right">
                <div class="bd-header-sign-btn">
                    <a class="bd-btn btn-outline-primary h-40px" href="sign-in.html">Bilet al</a>
                    <a class="bd-btn btn-outline-border-primary h-40px" href="register.html">Qeydiyyatdan keç</a>
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
