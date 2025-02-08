<?php

use Illuminate\Support\Str;
use Carbon\Carbon;
$languageCode = app()->getLocale();

?>
@extends('layouts.base')

@section('title')
    {{ __('messages.project_title') }}
@endsection

@section('meta')
@endsection


@section('content')
    <!-- <div id="loading">
                <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="bd-preloader-content">
                        <div class="bd-preloader-logo">
                            <div class="bd-preloader-circle">
                                <svg width="190" height="190" viewBox="0 0 380 380" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle stroke="#F5F5F5" cx="190" cy="190" r="180" stroke-width="6"
                                        stroke-linecap="round">
                                    </circle>
                                    <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6"
                                        stroke-linecap="round">
                                    </circle>
                                </svg>
                            </div>
                            <img src="{{ asset('images/logo/preloader-icon.png') }}" alt="">
                        </div>
                        <p class="bd-preloader-subtitle">Loading...</p>
                    </div>
                </div>
                </div>
                </div> -->

    <main>
        <!-- banner area start -->
        <section class="bd-banner-area bd-banner-three fix">
            <div class="container">
                <div class="row gy-30 align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-12">
                        <h1 class="bd-banner-title small mb-20">{!! __('messages.project_title_small') !!}</h1>
                        <p class="bd-banner-description">{{ __('messages.banner_desc') }}</p>
                        <div class="bd-banner-search-form">
                            <div class="bd-banner-search-form-input p-relative mb-30">
                                <form action="{{ localized_route('search', [], app()->getLocale()) }}">

                                    <input type="text" name="key"
                                        placeholder="{{ __('messages.banner_search_placeholder') }}">
                                    <button class="bd-btn-icon btn-primary radius-10" type="submit"><i
                                            class="fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-12">
                        <div class="p-relative slider-container">
                            <div class="slider">
                                <div class="slide"><img src="{{ asset('images/banner/baner.webp') }}" alt="Banner 1"></div>
                                <div class="slide"><img src="{{ asset('images/banner/baner.webp') }}" alt="Banner 2"></div>
                                <div class="slide"><img src="{{ asset('images/banner/baner.webp') }}" alt="Banner 3"></div>
                            </div>
                            <!-- Navigation Buttons -->
                            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                            <button class="next" onclick="moveSlide(1)">&#10095;</button>
                        </div>
                    </div>


                </div>
                <div class="bd-banner-shape shape-move d-none d-xl-block ">
                    <div class="shape-1 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-1.webp') }}" alt="shape ">
                    </div>
                    <div class="shape-2 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-2.webp') }}" alt="shape ">
                    </div>
                    <div class="shape-3 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-3.webp') }}" alt="shape ">
                    </div>
                    <div class="shape-4 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-4.webp') }}" alt="shape ">
                    </div>
                    <div class="shape-5 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-5.webp') }}" alt="shape ">
                    </div>
                    <div class="shape-6 p-absolute ">
                        <img src="{{ asset('images/banner/banner-3-shape-6.webp') }}" alt="shape ">
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- overview area start -->
        <div class="bd-overview-area theme-bg section-space-small ">
            <div class="container ">
                <div class="bd-overview-box ">
                    <div class="bd-overview-wrapper ">
                        <div class="icon "><svg width="51 " height="40 " viewBox="0 0 51 40 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <g clip-path="url(#clip0_2411_487) ">
                                    <path d="M27.8284 8.82031H41.4634V14.5324H23.875 " stroke="#FFB800 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M23.8112 10.2539V15.4508L22.5531 15.9101C20.2252 16.7598 17.6719 16.7598 15.344 15.9101L14.0859 15.4508V10.2539 "
                                        stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round
                                        "
                                        stroke-linejoin="round " />
                                    <path d="M10.1367 8.80078V12.0108 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M18.9491 6.20703L10.1367 8.80138L18.9491 11.9092L27.7615 8.80138L18.9491 6.20703Z "
                                        stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M10.1367 21.4727H33.3246 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M10.1367 25.7461H27.6642 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M48.0671 32.3984H2.93295C2.14153 32.3984 1.5 33.04 1.5 33.8314V33.8391C1.5 36.4382 3.60691 38.5451 6.20596 38.5451H44.794C47.3931 38.5451 49.5 36.4382 49.5 33.8391V33.8314C49.5 33.04 48.8585 32.3984 48.0671
                                                                                                                                                                                                                                                                            32.3984Z "
                                        stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M46.4664 32.2015V3.78078C46.4664 2.52113 45.4453 1.5 44.1856 1.5H6.81984C5.56019 1.5 4.53906 2.52113 4.53906 3.78078V32.2015 "
                                        stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10
                                        "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M37.9727 24.1406L41.2342 27.4021 " stroke="#FFB800 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M32.9251 19.9747L35.4589 27.4095C35.6732 28.0381 36.5627 28.0367 36.7749 27.4075L37.9009 24.0688L41.2395 22.9429C41.8688 22.7307 41.8702 21.8411 41.2416 21.6269L33.8068 19.0931C33.2609 18.9069 32.7391 19.4287
                                                                                                                                                                                                                                                                            32.9251 19.9747Z "
                                        stroke="#FFB800 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2411_487 ">
                                        <rect width="50 " height="39 " fill="white "
                                            transform="translate(0.5 0.5) " />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h6 class="title fw-6 text-white ">{!! __('messages.overview_item1') !!}</h6>
                    </div>
                    <div class="bd-overview-wrapper ">
                        <div class="icon "><svg width="49 " height="49 " viewBox="0 0 49 49 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <g clip-path="url(#clip0_2411_426) ">
                                    <path d="M7.44922 21.7383H18.5206 " stroke="#FFAF00 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M41.1735 20.5039H23 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M31.8501 25.7539H22.7109 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M41.1741 25.7539H36.5117 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M33.8728 15.2539H21.3164 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M41.1745 15.2539H38.5352 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M41.1725 31.0039H31.8477 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M3.32422 8.9375V32.8087 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linejoin="round " />
                                    <path d="M24.5 37.4152H45.6742V8.9375 " stroke="#07A169 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linejoin="round " />
                                    <path d="M47.4688 3.59375H1.53125V8.84375H47.4688V3.59375Z " stroke="#07A169 "
                                        stroke-width="1.5 " stroke-miterlimit="10 " stroke-linecap="round "
                                        stroke-linejoin="round " />
                                    <path
                                        d="M15.7704 29.5664H10.1753C5.40134 29.5664 1.53125 33.4364 1.53125 38.2104V41.4074C1.53125 43.6165 3.32206 45.4073 5.53109 45.4073H24.4144V38.2104C24.4144 33.4364 20.5443 29.5664 15.7704 29.5664Z "
                                        stroke="#FFAF00
                                        " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M18.5205 20.6528V24.0299C18.5205 27.0872 16.0421 29.5656 12.9848 29.5656C9.9276 29.5656 7.44922 27.0872 7.44922 24.0299V20.6528C7.44922 17.5956 9.9276 15.1172 12.9848 15.1172C16.042 15.1172 18.5205 17.5957
                                                                                                                                                                                                                                                                            18.5205 20.6528Z "
                                        stroke="#FFAF00 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M12.9727 29.5664V32.8096 " stroke="#FFAF00 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                    <path
                                        d="M6.78125 40.6563H10.058L13.9987 37.8456C15.0261 37.1129 16.4519 37.3446 17.1943 38.3651C17.9416 39.3923 17.7147 40.8309 16.6874 41.5782L12.6309 44.5292C11.845 45.1009 10.8981 45.409 9.92628 45.409H7.98116
                                                                                                                                                                                                                                                                            "
                                        stroke="#FFAF00 " stroke-width="1.5 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M27.2408 31.0039L17.1953 38.3618 " stroke="#FFAF00 " stroke-width="1.5 "
                                        stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                </g>
                                <defs>
                                    <clipPath id="clip0_2411_426 ">
                                        <rect width="48 " height="48 " fill="white "
                                            transform="translate(0.5 0.5) " />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h6 class="title fw-6 text-white ">{!! __('messages.overview_item2') !!}</h6>
                    </div>
                    <div class="bd-overview-wrapper ">
                        <div class="icon "><svg width="49 " height="49 " viewBox="0 0 49 49 " fill="none "
                                xmlns="http://www.w3.org/2000/svg ">
                                <g clip-path="url(#clip0_2411_449) ">
                                    <path d="M28.7812 33.3477L31.0812 39.827 " stroke="#07A169 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <path d="M15.4336 39.827L17.7336 33.3477 " stroke="#07A169 " stroke-miterlimit="10 "
                                        stroke-linecap="round " stroke-linejoin="round " />
                                    <!-- <mask id="mask0_2411_449 " style="mask-type:luminance" maskUnits="userSpaceOnUse " x="0 " y="0 " width="49 " height="49 ">
                                                                                                                                                                                                                                                                        <path d="M0.5 0.5H48.5V48.5H0.5V0.5Z " fill="white " />
                                                                                                                                                                                                                                                                    </mask> -->
                                    <g mask="url(#mask0_2411_449) ">
                                        <path
                                            d="M34.0821 44.0199H10.6296C10.1395 44.0199 9.74219 43.6226 9.74219 43.1324V42.1679C9.74219 40.8735 10.7915 39.8242 12.0859 39.8242H33.3459 "
                                            stroke="#07A169 " stroke-width="1.5 "
                                            stroke-miterlimit="10
                                        "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M33.2885 33.3443H2.60937C1.83275 33.3443 1.20312 32.7147 1.20312 31.9381V6.38281C1.20312 5.60618 1.83275 4.97656 2.60937 4.97656H43.9056C44.6822 4.97656 45.3118 5.60618 45.3118 6.38281V13.4143
                                                                                                                                                                                                                                                                            "
                                            stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M20.6172 14.7598L26.834 18.3491C27.4589 18.7099 27.4589 19.612 26.834 19.9729L20.6172 23.5623C19.9921 23.923 19.2109 23.472 19.2109 22.7502V15.5717C19.2109 14.85 19.9921 14.3989 20.6172 14.7598Z
                                                                                                                                                                                                                                                                            "
                                            stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M40.6821 42.38C40.4025 42.38 40.1758 42.1532 40.1758 41.8737C40.1758 41.5939 40.4025 41.3672 40.6821 41.3672C40.9618 41.3672 41.1885 41.5939 41.1885 41.8737C41.1885 42.1532 40.9618 42.38 40.6821 42.38Z
                                                                                                                                                                                                                                                                            "
                                            fill="#FFAF00 " />
                                        <path d="M47.7978 39.8242H33.5664 " stroke="#FFAF00 " stroke-width="1.5 "
                                            stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M38.4766 25.4648H42.888 " stroke="#FFAF00 " stroke-width="1.5 "
                                            stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M45.3125 16.4805V22.7978 " stroke="#07A169 " stroke-width="1.5 "
                                            stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M38.8828 29.8292L43.0596 32.2406C43.3721 32.421 43.3721 32.8721 43.0596 33.0525L38.8828 35.4639C38.5703 35.6444 38.1797 35.4188 38.1797 35.058V30.2351C38.1797 29.8742 38.5703 29.6487 38.8828 29.8292Z
                                                                                                                                                                                                                                                                            "
                                            stroke="#FFAF00 " stroke-width="1.5 " stroke-miterlimit="10 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M33.1445 28.7734H28.3008 " stroke="#07A169 " stroke-width="1.5 "
                                            stroke-miterlimit="10 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M25.2352 28.7713H10.9766C9.68216 28.7713 8.63281 27.7221 8.63281 26.4276V11.8946C8.63281 10.6002 9.68216 9.55078 10.9766 9.55078H35.5376C36.832 9.55078 37.8813 10.6002 37.8813 11.8946V22.7966
                                                                                                                                                                                                                                                                            "
                                            stroke="#07A169 " stroke-width="1.5 " stroke-miterlimit="10 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M47.7978 30.5524V23.9102C47.7978 23.3924 47.3781 22.9727 46.8603 22.9727H34.5039C33.9861 22.9727 33.5664 23.3924 33.5664 23.9102V43.0844C33.5664 43.6021 33.9861 44.0219 34.5039 44.0219H46.8603C47.3781
                                                                                                                                                                                                                                                                            44.0219 47.7978 43.6021 47.7978 43.0844V33.6168 "
                                            stroke="#FFAF00 " stroke-width="1.5 " stroke-miterlimit="10 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                    </g>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2411_449 ">
                                        <rect width="48 " height="48 " fill="white "
                                            transform="translate(0.5 0.5) " />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h6 class="title fw-6 text-white ">{!! __('messages.overview_item3') !!}</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- overview area end -->

        <!-- category area start -->
        <section class="bd-category-area section-space fix ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-xl-6 ">
                        <div class="bd-section-wrapper section-title-space text-center ">
                            <span class="bd-section-subtitle ">{{ __('messages.category_title') }}</span>
                            <h2 class="bd-section-title mb-20 ">{{ __('messages.category_subtitle') }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="p-relative ">
                    <div class="row justify-content-center ">
                        <div class="col-lg-10 col-md-12 ">
                            <div class="swiper categorySliderActive ">
                                <div class="swiper-wrapper">
                                    @foreach ($courses->chunk(2) as $chunk)
                                        <div class="swiper-slide">
                                            @foreach ($chunk as $course)
                                                <div class="bd-category-grid-item">
                                                    <a href="{{ localized_route('courseDetail', ['slug' => $course->{'slug_' . app()->getLocale()}], app()->getLocale()) }}"
                                                        class="bd-category-wrapper style-seven">
                                                        <div class="bd-category-item">
                                                            <div class="bd-category-icon">
                                                                <img src="{{ $course->getImage1UrlAttribute() }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="bd-category-content">
                                                                <h6 class="bd-category-title">
                                                                    {{ getLocalizedField($course, 'head') }}
                                                                </h6>
                                                                <span
                                                                    class="bd-category-subtitle">{{ getLocalizedField($course, 'help_text') }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bd-category-navigation ">
                        <button class="category-nav-prev "><i class="fa-regular fa-angle-left "></i></button>
                        <button class="category-nav-next "><i class="fa-regular fa-angle-right "></i></button>
                    </div>
                </div>
            </div>
        </section>
        <!-- category area end -->

        <!-- about area start -->
        <section class="bd-about-area section-space theme-bg-05 fix ">
            <div class="container ">
                <div class="row align-items-center g-30 ">
                    <div class="col-xl-5 col-lg-12 ">
                        <div class="bd-about-wrapper style-six ">
                            <div class="bd-about-thumb-inner ">
                                <div class="bd-about-thumb-wrapper ">
                                    <div class="bd-about-thumb ">
                                        <img src="{{ asset('images/banner/baner.webp') }}" alt="image ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 ">
                        <div class="bd-about-wrapper style-six ">
                            <div class="bd-about-content-wrapper ">
                                <div class="bd-section-title-wrapper ">
                                    <span class="bd-section-subtitle ">{{ __('messages.about_title') }}</span>
                                    <h2 class="bd-section-title mb-20 ">{{ __('messages.about_subtitle') }}
                                    </h2>
                                    <p class="bd-section-paragraph ">{{ __('messages.about_desc') }}</p>
                                </div>
                                <div class="bd-about-feature-wrapper ">
                                    <div class="bd-about-feature-item ">
                                        <div class="bd-about-feature-icon ">
                                            <span><i class="icon-online-class "></i></span>
                                        </div>
                                        <div class="bd-about-feature-content ">
                                            <h6 class="bd-about-feature-title ">{{ __('messages.about_item1_title') }}
                                            </h6>
                                            <p class="bd-about-feature-descrip ">{{ __('messages.about_item1_desc') }}</p>
                                        </div>
                                    </div>
                                    <div class="bd-about-feature-item ">
                                        <div class="bd-about-feature-icon ">
                                            <span><i class="icon-online-learning "></i></span>
                                        </div>
                                        <div class="bd-about-feature-content ">
                                            <h6 class="bd-about-feature-title ">{{ __('messages.about_item2_title') }}
                                            </h6>
                                            <p class="bd-about-feature-descrip ">{{ __('messages.about_item2_desc') }}</p>
                                        </div>
                                    </div>
                                    <div class="bd-about-feature-item ">
                                        <div class="bd-about-feature-icon ">
                                            <span><i class="icon-faculty-directory "></i></span>
                                        </div>
                                        <div class="bd-about-feature-content ">
                                            <h6 class="bd-about-feature-title ">{{ __('messages.about_item3_title') }}
                                            </h6>
                                            <p class="bd-about-feature-descrip ">{{ __('messages.about_item3_desc') }}

                                            </p>
                                        </div>
                                    </div>
                                    <div class="bd-about-feature-item ">
                                        <div class="bd-about-feature-icon ">
                                            <span><i class="icon-shield-check "></i></span>
                                        </div>
                                        <div class="bd-about-feature-content ">
                                            <h6 class="bd-about-feature-title ">{{ __('messages.about_item4_title') }}
                                            </h6>
                                            <p class="bd-about-feature-descrip ">{{ __('messages.about_item4_desc') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-about-btn ">
                                    <a class="bd-btn btn-outline-primary "
                                        href="{{ localized_route('about', [], app()->getLocale()) }}">{{ __('messages.more') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- course area start -->
        <section class="bd-course-area section-space fix ">
            <div class="container ">
                <div class="row justify-content-between align-items-center section-title-space g-30 ">
                    <div class="col-xl-7 col-lg-7 col-md-9 ">
                        <div class="bd-section-title-wrapper ">
                            <span class="bd-section-subtitle ">Xidmətlərimiz</span>
                            <h2 class="bd-section-title ">Növbəti kursunuzu kəşf edin</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-3 ">
                        <div class="bd-instructor-btn text-md-end ">
                            <a class="bd-btn btn-outline-border-primary " href="courses.html">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="row gy-30 ">
                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="bd-course-wrapper style-eleven bg-box-shadow wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-course-thumb-wrapper p-relative ">
                                <div class="bd-course-thumb ">
                                    <a href="courses-details.html "><img src="{{ asset('images/banner/baner.webp') }}"
                                            alt="images "></a>
                                </div>

                            </div>
                            <div class="bd-course-content ">

                                <h5 class="bd-course-title underline "><a href="courses-details.html ">TOEFL Hazırlıq
                                        Kursu</a></h5>
                                <p class="bd-course-description "> TOEFL Hazırlıq – Akademik İngilis dili
                                    bacarıqlarınızı inkişaf etdirin və yüksək TOEFL balı əldə edin. Practice tests və
                                    strategiyalar ilə imtahana tam hazır olun!</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="bd-course-wrapper style-eleven bg-box-shadow wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-course-thumb-wrapper p-relative ">
                                <div class="bd-course-thumb ">
                                    <a href="courses-details.html "><img src="{{ asset('images/banner/baner.webp') }}"
                                            alt="images "></a>
                                </div>

                            </div>
                            <div class="bd-course-content ">

                                <h5 class="bd-course-title underline "><a href="courses-details.html ">TOEFL Hazırlıq
                                        Kursu</a></h5>
                                <p class="bd-course-description "> TOEFL Hazırlıq – Akademik İngilis dili
                                    bacarıqlarınızı inkişaf etdirin və yüksək TOEFL balı əldə edin. Practice tests və
                                    strategiyalar ilə imtahana tam hazır olun!</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="bd-course-wrapper style-eleven bg-box-shadow wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-course-thumb-wrapper p-relative ">
                                <div class="bd-course-thumb ">
                                    <a href="courses-details.html "><img src="{{ asset('images/banner/baner.webp') }}"
                                            alt="images "></a>
                                </div>

                            </div>
                            <div class="bd-course-content ">

                                <h5 class="bd-course-title underline "><a href="courses-details.html ">TOEFL Hazırlıq
                                        Kursu</a></h5>
                                <p class="bd-course-description "> TOEFL Hazırlıq – Akademik İngilis dili
                                    bacarıqlarınızı inkişaf etdirin və yüksək TOEFL balı əldə edin. Practice tests və
                                    strategiyalar ilə imtahana tam hazır olun!</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 ">
                        <div class="bd-course-wrapper style-eleven bg-box-shadow wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-course-thumb-wrapper p-relative ">
                                <div class="bd-course-thumb ">
                                    <a href="courses-details.html "><img src="{{ asset('images/banner/baner.webp') }}"
                                            alt="images "></a>
                                </div>

                            </div>
                            <div class="bd-course-content ">

                                <h5 class="bd-course-title underline "><a href="courses-details.html ">TOEFL Hazırlıq
                                        Kursu</a></h5>
                                <p class="bd-course-description "> TOEFL Hazırlıq – Akademik İngilis dili
                                    bacarıqlarınızı inkişaf etdirin və yüksək TOEFL balı əldə edin. Practice tests və
                                    strategiyalar ilə imtahana tam hazır olun!</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course area end -->

        <!-- counter area start -->
        <section class="bd-coming-soon-area bd-coming-soon-bg d-flex align-items-center justify-content-center container"
            data-background="{{ asset('images/banner/baner.webp') }}">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="bd-coming-soon-content">

                        <h1 class="bd-coming-soon-title">{{ __('messages.counter_title') }}</h1>
                        <p class="bd-coming-soon-subtitle">{{ __('messages.counter_desc') }}</p>
                        <div class="bd-countdown mb-30" id="countdown2" data-endtime="{{ config('discount-date') }}">
                            <div class="countdown-item" data-unit="days"></div>
                            <div class="countdown-item" data-unit="hours"></div>
                            <div class="countdown-item" data-unit="minutes"></div>
                            <div class="countdown-item" data-unit="seconds"></div>
                        </div>
                        <div class="bd-coming-soon-form">

                        </div>
                        <div class="bd-coming-soon-form">
                            <a href="{{ localized_route('register', [], app()->getLocale()) }}"> <button
                                    class="bd-btn btn-primary center"
                                    type="submit">{{ __('messages.menu_item9') }}</button></a>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter area end -->

        <!-- why choose area start -->
        <section class="bd-why-choose-area section-space-top fix ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-xl-6 ">
                        <div class="bd-section-wrapper section-title-space text-center ">
                            <span class="bd-section-subtitle ">{{ __('messages.why_us_title') }}</span>
                            <h2 class="bd-section-title mb-20 ">{{ __('messages.why_us_desc') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-30 ">
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path
                                            d="M24.5 16.1111C23.1262 14.6681 19.1435 11.2408 12.4611 10.0392C9.0758 9.4304 7.38314 9.12602 5.94156 10.2927C4.5 11.4593 4.5 13.3538 4.5 17.1427V30.7594C4.5 34.2238 4.5 35.956 5.4252 37.0374C6.3504 38.119
                                                                                                                                                                                                                                                                            8.3873 38.4852 12.4611 39.2178C16.0927 39.8708 18.9269 40.9114 20.9784 41.957C22.9968 42.9856 24.006 43.5 24.5 43.5C24.994 43.5 26.0032 42.9856 28.0216 41.957C30.0732 40.9114 32.9074 39.8708 36.5388 39.2178C40.6128
                                                                                                                                                                                                                                                                            38.4852 42.6496 38.119 43.5748 37.0374C44.5 35.956 44.5 34.2238 44.5 30.7594V17.1427C44.5 13.3538 44.5 11.4593 43.0584 10.2927C42.0442 9.4718 40.2004 9.68056 38.5 10.3853C37.7836 10.6821 37.0928 11.067 36.5 11.5 "
                                            stroke="#FFB800 " stroke-width="3 " stroke-linecap="round "
                                            stroke-linejoin="round " />
                                        <path
                                            d="M33.7254 32.6714C28.4592 35.6376 25.4546 41.7841 24.5 43.5023V16.5022C25.329 15.0102 27.704 10.7352 31.7634 7.82966C33.4736 6.60564 34.3286 5.99362 35.4144 6.55166C36.5 7.10972 36.5 8.34156 36.5 10.8052V28.4851C36.5
                                                                                                                                                                                                                                                                            29.8159 36.5 30.4812 36.2268 30.9488C35.9534 31.4164 35.2108 31.8348 33.7254 32.6714Z "
                                            stroke="#07A169 " stroke-width="3 " stroke-linecap="round "
                                            stroke-linejoin="round " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item1_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item1_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path d="M24.5 44.5L20.5 32.5H4.5L8.5 44.5H24.5ZM24.5 44.5H32.5 " stroke="#07A169 "
                                            stroke-width="3 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M24.5 26.5V25.5C24.5 21.7288 24.5 19.8431 23.3284 18.6716C22.1568 17.5 20.2712 17.5 16.5 17.5C12.7288 17.5 10.8431 17.5 9.67158 18.6716C8.5 19.8431 8.5 21.7288 8.5 25.5V26.5 "
                                            stroke="#07A169 " stroke-width="3 " stroke-linecap="round "
                                            stroke-linejoin="round " />
                                        <path
                                            d="M38.5 26.5C38.5 28.7092 36.7092 30.5 34.5 30.5C32.2908 30.5 30.5 28.7092 30.5 26.5C30.5 24.2908 32.2908 22.5 34.5 22.5C36.7092 22.5 38.5 24.2908 38.5 26.5Z "
                                            stroke="#FFB800 " stroke-width="3 " />
                                        <path
                                            d="M20.5 8.5C20.5 10.7091 18.7091 12.5 16.5 12.5C14.2909 12.5 12.5 10.7091 12.5 8.5C12.5 6.29086 14.2909 4.5 16.5 4.5C18.7091 4.5 20.5 6.29086 20.5 8.5Z "
                                            stroke="#07A169 " stroke-width="3 " />
                                        <path
                                            d="M28.5 35.5H40.5C42.7092 35.5 44.5 37.2908 44.5 39.5V40.5C44.5 42.7092 42.7092 44.5 40.5 44.5H38.5 "
                                            stroke="#FFB800 " stroke-width="3 " stroke-linecap="round " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item2_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item2_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".3s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path d="M36.5 12.5L33.5 15.5 " stroke="#FFAF00 " stroke-width="3 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M24.5 40.5L22.5 42.5 " stroke="#FFAF00 " stroke-width="3 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M8.5 24.5L6.5 26.5 " stroke="#FFAF00 " stroke-width="3 "
                                            stroke-linecap="round " stroke-linejoin="round " />
                                        <path
                                            d="M16.5 20.8334L24.7464 12.5869C26.9962 10.3372 28.121 9.21228 29.3624 8.30628C31.9094 6.4474 34.8636 5.22374 37.979 4.73716C39.4976 4.5 41.0884 4.5 44.27 4.5C44.4362 4.5 44.5 4.57624 44.5 4.73008C44.5 7.91168
                                                                                                                                                                                                                                                                            44.5 9.5025 44.2628 11.0209C43.7762 14.1364 42.5526 17.0905 40.6938 19.6376C39.7878 20.879 38.6628 22.0038 36.4132 24.2536L28.1666 32.5 "
                                            stroke="#07A169 " stroke-width="3 " stroke-linecap="round "
                                            stroke-linejoin="round " />
                                        <path
                                            d="M21.182 16.6968C17.7762 16.6968 13.4956 15.9753 10.3086 17.2954C7.97342 18.2626 6.25508 20.5024 4.5 22.2574L11.1119 25.091C12.8642 25.842 11.793 28.0532 11.5029 29.5036C11.1797 31.1198 11.1977 31.1794 12.3632
                                                                                                                                                                                                                                                                            32.3448L16.6552 36.6368C17.8206 37.8022 17.8802 37.8204 19.4963 37.497C20.9468 37.207 23.158 36.1358 23.9088 37.888L26.7426 44.5C28.4976 42.745 30.7374 41.0266 31.7046 38.6914C33.0248 35.5044 32.3032 31.2238 32.3032
                                                                                                                                                                                                                                                                            27.818 "
                                            stroke="#07A169 " stroke-width="3 " stroke-linejoin="round " />
                                        <path d="M28.5 8.5C36.2046 8.72852 40.2836 13.2072 40.5 20.5 " stroke="#07A169 "
                                            stroke-width="3 " stroke-linejoin="round " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item3_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item3_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".4s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path
                                            d="M4.5 22.5C9.1634 17.6157 15.7865 17.3857 20.5 22.5M17.4902 9.5C17.4902 12.2614 15.2484 14.5 12.4831 14.5C9.7177 14.5 7.47594 12.2614 7.47594 9.5C7.47594 6.73858 9.7177 4.5 12.4831 4.5C15.2484 4.5 17.4902
                                                                                                                                                                                                                                                                            6.73858 17.4902 9.5Z "
                                            stroke="#07A169 " stroke-width="3 " stroke-linecap="round " />
                                        <path
                                            d="M28.5 44.5C33.1634 39.6156 39.7864 39.3856 44.5 44.5M41.4902 31.5C41.4902 34.2614 39.2484 36.5 36.483 36.5C33.7178 36.5 31.476 34.2614 31.476 31.5C31.476 28.7386 33.7178 26.5 36.483 26.5C39.2484 26.5 41.4902
                                                                                                                                                                                                                                                                            28.7386 41.4902 31.5Z "
                                            stroke="#07A169 " stroke-width="3 " stroke-linecap="round " />
                                        <path d="M6.5 28.5C6.5 36.24 12.76 42.5 20.5 42.5L18.5 38.5 " stroke="#FFB800 "
                                            stroke-width="3 " stroke-linecap="round " stroke-linejoin="round " />
                                        <path d="M30.5 6.5H42.5M30.5 12.5H42.5M30.5 18.5H37.5 " stroke="#FFB800 "
                                            stroke-width="3 " stroke-linecap="round " stroke-linejoin="round " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item4_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item4_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".4s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path
                                            d="M44.503 14.0824C44.503 19.3744 40.0114 23.665 34.4722 23.665C33.8208 23.6658 33.1714 23.6056 32.5316 23.4856C32.071 23.3992 31.8406 23.3562 31.68 23.3806C31.5192 23.405 31.2914 23.526 30.8358 23.768C29.547
                                                                                                                                                                                                                                                                            24.4524 28.0442 24.6942 26.599 24.4258C27.1482 23.751 27.5234 22.9416 27.689 22.0736C27.7892 21.5428 27.5408 21.0272 27.1686 20.6498C25.4778 18.9353 24.4414 16.625 24.4414 14.0824C24.4414 8.79062 28.9328 4.5 34.4722
                                                                                                                                                                                                                                                                            4.5C40.0114 4.5 44.503 8.79062 44.503 14.0824Z "
                                            stroke="#FFB800 " stroke-width="3 " stroke-linejoin="round " />
                                        <path d="M31.4492 14.5156H31.4654M37.4676 14.5156H37.484 " stroke="#FFB800 "
                                            stroke-width="3 " stroke-linecap="round " />
                                        <path
                                            d="M20.9347 25.1497C20.9347 28.2483 18.4633 30.7603 15.4146 30.7603C12.3659 30.7603 9.89453 28.2483 9.89453 25.1497C9.89453 22.0509 12.3659 19.5391 15.4146 19.5391C18.4633 19.5391 20.9347 22.0509 20.9347 25.1497Z "
                                            stroke="#07A169 " stroke-width="3 " />
                                        <path
                                            d="M25.7265 39.5306C18.0099 33.5242 10.2629 35.1094 5.10705 39.6074C4.32491 40.2896 4.29719 41.4936 5.03191 42.2264C5.91341 43.1058 6.90615 43.8538 8.49741 44.4038C8.69143 44.471 8.89663 44.5012 9.10195 44.5012H21.7335C21.9623
                                                                                                                                                                                                                                                                            44.5012 22.1901 44.4634 22.4041 44.382C23.7715 43.8626 24.8783 43.204 25.9591 42.0834C26.6723 41.3442 26.5375 40.1618 25.7265 39.5306Z "
                                            stroke="#07A169 " stroke-width="3 " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item5_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item5_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                        <div class="bd-why-choose-wrapper style-two wow bdFadeInUp " data-wow-delay=".4s ">
                            <div class="bd-why-choose-item bg-flashlight ">
                                <span class="bd-why-choose-icon "><svg width="49 " height="49 "
                                        viewBox="0 0 49 49 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                        <path
                                            d="M42.8218 20.3569C44.8856 19.5831 45.0716 15.8858 43.237 12.0989C41.4024 8.31187 38.2422 5.86923 36.1782 6.64307M42.8218 20.3569C40.7578 21.1308 37.5976 18.6881 35.763 14.9011C33.9284 11.1142 34.1144 7.41689
                                                                                                                                                                                                                                                                            36.1782 6.64307M42.8218 20.3569L12.8218 38.357C10.7579 39.1308 7.59756 36.6882 5.763 32.9012C3.92842 29.1142 4.11432 25.4168 6.17822 24.643L36.1782 6.64307 "
                                            stroke="#07A169 " stroke-width="3 " />
                                        <path
                                            d="M30.5 27.7144C27.7766 26.5684 22.3466 22.4018 22.4148 14.9023M23.5 31.9024C21.1666 30.7888 16.3 26.6574 15.5 19.0393 "
                                            stroke="#07A169 " stroke-width="3 " />
                                        <path
                                            d="M31.36 28.5C32.5552 30.7604 33.778 36.7248 29.5996 42.5L27.6264 39.668L22.5 42.1206C22.5 42.1206 26.1498 38.2736 24.4056 32.5 "
                                            stroke="#FFB800 " stroke-width="3 " stroke-linecap="round "
                                            stroke-linejoin="round " />
                                    </svg>
                                </span>
                                <div class="bd-why-choose-content ">
                                    <h5 class="bd-why-choose-title ">{{ __('messages.why_us_item6_title') }}</h5>
                                    <p class="bd-why-choose-description ">{{ __('messages.why_us_item6_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why choose area end -->

        <!-- faq area start -->
        <section class="bd-faq-area section-space fix">
            <div class="container">
                <div class="row g-30 align-items-center justify-content-between justify-content-md-center">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="bd-faq-thumb">
                            <img src="{{ asset('images/banner/baner.webp') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-section-title-wrapper section-title-space">
                            <span class="bd-section-subtitle">{{ __('messages.faq_title') }}</span>
                            <h2 class="bd-section-title">{{ __('messages.faq_desc') }}</h2>
                        </div>
                        <div class="bd-faq-content modern-schooling">
                            <div class="accordion-common-style accordion-bg accordion-theme-bg accordion-item-margin">
                                <div class="accordion" id="accordionExampleTen">
                                    @foreach ($faqs as $faq)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwentyEight">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwentyEight" aria-expanded="true"
                                                    aria-controls="collapseTwentyEight">
                                                    {{ getLocalizedField($faq, 'head') }}
                                                </button>
                                            </h2>
                                            <div id="collapseTwentyEight" class="accordion-collapse collapse show"
                                                aria-labelledby="headingTwentyEight"
                                                data-bs-parent="#accordionExampleTen">
                                                <div class="accordion-body">
                                                    {{ getLocalizedField($faq, 'content') }}

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div> <!-- End Accordion -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq area end -->



        <!-- blog area start -->
        <section class="bd-blog-area section-space-bottom fix ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-xl-6 ">
                        <div class="bd-section-title-wrapper section-title-space text-center ">
                            <span class="bd-section-subtitle ">{{ __('messages.blog_title') }}</span>
                            <h2 class="bd-section-title ">{{ __('messages.blog_desc') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper blogSlideActivation swiper-shadow-add ">
                    <div class="swiper-wrapper ">
                        @foreach ($blogs as $blog)
                            <div class="swiper-slide ">
                                <article class="bd-blog-wrapper style-four ">
                                    <div class="bd-blog-thumb ">
                                        <a
                                            href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }} ">
                                            <img src="{{ $blog->getImageUrlAttribute() }}" alt="image "></a>
                                    </div>
                                    <div class="bd-blog-content ">
                                        <div class="bd-blog-meta-list ">

                                            <div class="bd-blog-meta-item ">
                                                <span class="meta-icon ">
                                                    <i class="fa-sharp fa-light fa-calendar-days "></i>
                                                </span>
                                                <span class="meta-text "><a
                                                        href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }} ">
                                                        @php
                                                            $date = Carbon::parse($blog->date);
                                                        @endphp

                                                        @if ($languageCode == 'az')
                                                            {{ get_month($date->month) }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @else
                                                            {{ $date->format('F') }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @endif
                                                    </a></span>
                                            </div>
                                        </div>
                                        <h5 class="title underline "><a
                                                href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                                {{ getLocalizedField($blog, 'head') }}</a></h5>
                                        <p>{{ Str::limit(strip_tags(getLocalizedField($blog, 'content')), 100) }}</p>
                                        <div class=" ">
                                            <div class="icon-text-btn p-relative ">
                                                <a
                                                    href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                                    <span>Ətraflı</span>
                                                    <i class="fa-regular fa-arrow-right-long "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="bd-blog-pagination bd-dots-pagination has-primary "></div>
                </div>
            </div>
        </section>
        <!-- blog area end -->


    </main>
@endsection
