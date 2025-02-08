@extends('layouts.base')

@section('title')
@endsection

@section('meta')
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
                                        <span>
                                            <a href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a>
                                        </span>
                                        <span class="divider">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </span>
                                        <span class="active">{{ __('messages.menu_item7') }}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- joining form area start -->
        <section class="bd-joining-form-area section-space primary-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="bd-section-wrapper section-title-space text-center">
                            <h2 class="bd-section-title mb-20">{{ __('messages.career_page_title') }}</h2>
                            <p class="bd-section-paragraph">
                                {{ __('messages.career_page_help_title') }}
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row gy-30 justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="bd-joining-main-thumb">
                            <p class="bd-section-paragraph">
                                {{ __('messages.career_page_help_desc') }}
                            </p>
                            <img src="{{ asset('images/banner/elaqe.webp') }}" alt="image">

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="custom-form">
                            <!-- Stepper -->
                            <div class="steps__form mb-20">
                                <div class="bd-form-setup-panel">
                                    <div class="bd-form-step">
                                        <a href="#formStepOne"
                                            class="bd-form-step-title bd-step-active">{{ __('messages.career_page_info') }}</a>
                                    </div>
                                    <div class="bd-form-step">
                                        <a href="#formStepThree" class="bd-form-step-title"></a>
                                    </div>
                                </div>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form id="whatsappForm" action="{{ route('career.submit') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-30 bd-form-setup-content" id="formStepOne">
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="name">{{ __('messages.career_page_form_name') }}
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="name" id="name" type="text"
                                                    placeholder="{{ __('messages.career_page_form_name') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="email">{{ __('messages.career_page_form_email') }}
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="email" id="email" type="email"
                                                    placeholder="{{ __('messages.career_page_form_email') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="phone">{{ __('messages.career_page_form_phone_number') }}
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="phone" id="phone" type="text"
                                                    placeholder="{{ __('messages.career_page_form_phone_number') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="fileUpload">{{ __('messages.career_page_form_file') }}
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input type="file" name="fileUpload" id="fileUpload" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="note">{{ __('messages.career_page_form_note') }}
                                                    <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <textarea id="note" rows="2" name="note" placeholder="{{ __('messages.career_page_form_note') }}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <button class="nextBtn bd-btn btn-primary"
                                            type="submit">{{ __('messages.contac_page_form_send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
