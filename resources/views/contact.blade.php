@extends('layouts.base')

@section('title')
    {{ __('messages.contact_page_title') }}
@endsection

@section('meta')
    <meta property="og:title" content="{{ __('messages.contact_page_title') }}">
@endsection

@section('content')
    <main>

        <!-- breadcrumb area start -->
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
                                        <span class="active">{{ __('messages.contact_page_title') }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact form area start -->
        <section class="bd-contact-form-area section-space">
            <div class="container">
                <div class="row gy-30 justify-content-between align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-contact-form-wrapper">
                            <div class="bd-section-title-wrapper section-title-space">
                                <h2 class="bd-section-title mb-20">{{ __('messages.contact_page_title') }}</h2>
                                <p class="bd-section-paragraph">{{ __('messages.contact_page_desc') }}</p>
                            </div>
                            <div class="bd-contact-form">
                                <form action="#">
                                    <div class="row gy-30">
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label
                                                        for="firstName">{{ __('messages.contac_page_form_name') }}<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="firstName" id="firstName" type="text"
                                                        placeholder="{{ __('messages.contac_page_form_name') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label
                                                        for="emailAddress">{{ __('messages.contac_page_form_email') }}<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="email" id="emailAddress" type="email"
                                                        placeholder="{{ __('messages.contac_page_form_email') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label
                                                        for="subject">{{ __('messages.contac_page_form_topic') }}</label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="subject" id="subject" type="text"
                                                        placeholder="{{ __('messages.contac_page_form_topic') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="form-input-box mb-15">
                                                <div class="form-input-title">
                                                    <label
                                                        for="message">{{ __('messages.contac_page_form_note') }}<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <textarea id="message" placeholder="{{ __('messages.contac_page_form_note') }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="checkbox-option">
                                                <input id="course-check-1" type="checkbox">
                                                <label
                                                    for="course-check-1">{{ __('messages.contac_page_form_submit') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="bd-contact-form-btn">
                                                <button class="bd-btn btn-primary w-100"
                                                    type="button">{{ __('messages.contac_page_form_send') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="bd-contact-form-thumb"><img src="{{ asset('images/banner/baner.webp') }}"
                                alt="images"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form area end -->

        <!-- contact address area start -->
        <section class="bd-contact-address-area section-space primary-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="bd-section-title-wrapper section-title-space text-center">
                            <span class="bd-section-subtitle">{{ __('messages.contact_page_address') }}</span>
                            <h2 class="bd-section-title mb-20">{{ __('messages.contact_page_address2') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-30">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="bd-contact-address-box">
                            <div class="icon">
                                <i class="fa-light fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">{{ __('messages.address') }}</h6>
                                <p>{{ $contactDetails->address }}</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="bd-contact-address-box">
                            <div class="icon">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">{{ __('messages.call') }}</h6>
                                <p>{{ $contactDetails->phone_number }}</p>
                                @if ($contactDetails->phone_number2)
                                    <p>{{ $contactDetails->phone_number2 }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="bd-contact-address-box">
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">{{ __('messages.email') }}</h6>
                                <p><a href="mailto:{{ $contactDetails->email }}">{{ $contactDetails->email }}</a></p>
                                @if ($contactDetails->email2)
                                    <p><a href="mailto:{{ $contactDetails->email2 }}">{{ $contactDetails->email2 }}</a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-contact-map">
                            {!! $contactDetails->map !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact address area end -->

    </main>
@endsection
