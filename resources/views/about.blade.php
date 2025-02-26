@extends('layouts.base')

@section('title')
    {{ __('messages.haqqimizda_title') }}
@endsection

@section('meta')
<meta property="og:title" content="{{ __('messages.haqqimizda_title') }}">
    <meta property="og:description" content="{{ __('messages.about_page_values_item_1_desc') }}">
    <meta name="description" content="{{ __('messages.about_page_values_item_1_desc') }}">
@endsection

@section('content')
    <main>
        <!-- about us breadcrumb star -->
        <section class="bd-breadcrumb-area p-relative fix z-index-11">
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bd-breadcrumb style-two">
                                <div class="bd-breadcrumb-content">
                                    <div class="bd-breadcrumb-list">
                                        <span><a
                                                href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-solid fa-angle-right"></i></span>
                                        <span class="active">{{ __('messages.menu_item2_1') }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us breadcrumb star -->

        <!-- Our Mission & Vision area start -->
        <section class="bd-why-choose-area section-space" id="learnMore">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="bd-section-wrapper section-title-space text-center">
                            <span class="bd-section-subtitle">{{ __('messages.about_page_title') }}</span>
                            <h2 class="bd-section-title mb-20">{!! __('messages.about_page_subtitle') !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-30 align-items-center justify-content-between">
                    <div class="col-xl-5">
                        <div class="bd-mission-vision-thumb">
                            <div class="bd-mission-vision-thumb-mask">
                                <img src="{{ asset('images/banner/about.webp') }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="bd-mission-vision-wrapper mb-20">
                            <h3 class="bd-mission-vision-title">{{ __('messages.about_page_mission_title') }}</h3>
                            <p class="bd-mission-vision-desc">{!! __('messages.about_page_mission_desc') !!}</p>
                        </div>
                        <div class="bd-mission-vision-wrapper">
                            <h3 class="bd-mission-vision-title">{{ __('messages.about_page_vision_title') }}</h3>
                            <p class="bd-mission-vision-desc">{!! __('messages.about_page_vision_desc') !!}</p>
                        </div>
                    </div>
                </div>
             
            </div>
        </section>
        <!-- Bizim Missiyamız & Vizyonumuz bölməsi sonu -->

        <!-- Əsas Dəyərlər bölməsi başlanğıcı -->
        <section class="bd-core-values-area bd-core-values-bg section-space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6">
                        <div class="bd-section-wrapper section-title-space sidebar-sticky">
                            <h2 class="bd-section-title white-text mb-20">{{ __('messages.about_page_values_title') }}</h2>
                            <p class="bd-section-paragraph white-text">{!! __('messages.about_page_values_desc') !!}</p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="bd-core-values-box-wrapper">
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/handshake.svg') }}"
                                        alt="icon">
                                </div>
                                <h4 class="bd-core-values-title">{{ __('messages.about_page_values_item_1_title') }}</h4>
                                <p class="bd-core-values-desc">{!! __('messages.about_page_values_item_1_desc') !!}</p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/innovation.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">{{ __('messages.about_page_values_item_2_title') }}</h4>
                                <p class="bd-core-values-desc">{!! __('messages.about_page_values_item_2_desc') !!}</p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/excellence.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">{!! __('messages.about_page_values_item_3_title') !!}</h4>
                                <p class="bd-core-values-desc">
                                    {{ __('messages.about_page_values_item_3_desc') }}
                                </p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/text-books.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">{{ __('messages.about_page_values_item_4_title') }}</h4>
                                <p class="bd-core-values-desc">{!! __('messages.about_page_values_item_4_desc') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core Values area end -->
    </main>
@endsection
