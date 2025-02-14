<footer class="bd-footer-area fix">
    <div class="bd-footer-area-main-content section-space theme-bg-05">
        <div class="container">
            <div class="row gy-30 justify-content-between">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-8 col-sm-12">
                    <div class="bd-footer-widget footer-1-col-1">
                        <div class="bd-footer-widget-content">
                            <div class="bd-footer-widget-logo">
                                <a href="{{ localized_route('index', [], app()->getLocale()) }}">
                                    <img class="footerlogo" src="{{ asset('images/logo/logo.svg') }}"
                                        alt="ingilis dili kurslari">
                                </a>
                            </div>
                            <p class="bd-footer-widget-description">{{ __('messages.footer_desc') }}</p>
                            <div class="bd-footer-widget-contact-info">
                                <div class="bd-footer-widget-contact-item">
                                    <span>{{ __('messages.phone_number') }}:</span>
                                    <a href="tell:{{ $contactDetails->wp_phone_number }}">
                                        {{ $contactDetails->phone_number }}</a>
                                </div>
                                <div class="bd-footer-widget-contact-item">
                                    <span>{{ __('messages.email') }}:</span>
                                    <a href="mailto:{{ $contactDetails->email }}"> {{ $contactDetails->email }}</a>
                                </div>
                                <div class="bd-footer-widget-contact-item">
                                    <span>{{ __('messages.address') }}:</span>
                                    <a href="#"> {{ $contactDetails->address }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="bd-footer-widget footer-1-col-2">
                        <h6 class="bd-footer-widget-title">Hi Languages</h6>
                        <div class="bd-footer-widget-links list-none">
                            <ul>
                                <li class="underline"><a
                                        href="{{ localized_route('about', [], app()->getLocale()) }}">{{ __('messages.menu_item2_1') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('ourTeam', [], app()->getLocale()) }}">{{ __('messages.menu_item2_3') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('faq', [], app()->getLocale()) }}">{{ __('messages.menu_item2_2') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('course', [], app()->getLocale()) }}">{{ __('messages.menu_item3') }}</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="bd-footer-widget footer-1-col-3">
                        <h6 class="bd-footer-widget-title">{{ __('messages.useful_links') }}</h6>
                        <div class="bd-footer-widget-links list-none">
                            <ul>
                                <li class="underline"><a
                                        href="{{ localized_route('contact', [], app()->getLocale()) }}">{{ __('messages.menu_item6') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('blog', [], app()->getLocale()) }}">{{ __('messages.menu_item4_3') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('faq', [], app()->getLocale()) }}">{{ __('messages.menu_item2_2') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('photoGallery', [], app()->getLocale()) }}">{{ __('messages.menu_item4_1') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('videoGallery', [], app()->getLocale()) }}">{{ __('messages.menu_item4_2') }}</a>
                                </li>
                                <li class="underline"><a
                                        href="{{ localized_route('register', [], app()->getLocale()) }}">{{ __('messages.menu_item9') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-8 col-sm-12">
                    <div class="bd-footer-widget footer-1-col-4">
                        <h6 class="bd-footer-widget-title mb-20">{{ __('messages.sosial_networks') }}</h6>
                        <div class="bd-footer-from-content mb-20">
                            <div class="bd-footer-social">
                                <div class="theme-social social-brand-color">
                                    <ul class="social-icon-list">
                                        <li><a class="facebook" href="{{ $contactDetails->facebook_url }}"><i
                                                    class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li><a class="twitter" href="{{ $contactDetails->x_url }}"><i
                                                    class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                        <li><a class="linkedin" href="{{ $contactDetails->linkedin_url }}"><i
                                                    class="fa-brands fa-linkedin-in"></i></a>
                                        </li>
                                        <li><a class="instagram" href="{{ $contactDetails->instagram_url }}"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li><a class="youtube" href="{{ $contactDetails->youtube_url }}"><i
                                                    class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bd-footer-copyright-area pt-25 pb-20">
        <div class="container">
            <div class="row gy-30 align-items-center justify-content-lg-between justify-content-center">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8">
                    <div class="bd-footer-copyright text-lg-start text-center">
                        <p class="underline">© HiLanguages <span id="year"></span> | Bütün hüquqlar qorunur</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
