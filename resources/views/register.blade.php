@extends('layouts.base')

@section('title')
    {{ __('messages.menu_item9') }}
@endsection

@section('meta')
    <meta property="og:title" content="{{ __('messages.menu_item9') }}">
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
                                            <a href={{ localized_route('index', [], app()->getLocale()) }}>HiLanguages</a>
                                        </span>
                                        <span class="divider">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </span>
                                        <span class="active">{{ __('messages.menu_item9') }}</span>
                                    </div>
                                    <h1 class="bd-breadcrumb-title fontregs">{{ __('messages.menu_item9') }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- joining info area start -->
        <section class="bd-joining-info-area section-space fix">
            <div class="container">
                <div class="row g-60 justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="bd-section-wrapper section-title-space">
                            <h2 class="bd-section-title">{{ __('messages.register_page_title') }}</h2>
                        </div>
                        <div class="tab-style-four">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-one" type="button" role="tab"
                                        aria-controls="pills-item-one" aria-selected="true">
                                        {{ __('messages.register_page_type_1') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-two" type="button" role="tab"
                                        aria-controls="pills-item-two" aria-selected="false">
                                        {{ __('messages.register_page_type_2') }}
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-three" type="button" role="tab"
                                        aria-controls="pills-item-three" aria-selected="false">
                                        {{ __('messages.register_page_type_3') }}
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="tab-style-four">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-item-one" role="tabpanel"
                                    aria-labelledby="pills-item-one-tab" tabindex="0">
                                    <div class="bd-joining-box">
                                        <div class="bd-joining-thumb mb-30">
                                            <img src="{{ asset('images/joining/journey-1.webp') }}" alt="image">
                                        </div>
                                        <div class="bd-joining-content mb-30">
                                            <h6 class="title">{{ __('messages.register_page_type_1_item_1_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_1_item_1_desc') }}
                                            </p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">{{ __('messages.register_page_type_1_item_2_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_1_item_2_desc') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-two" role="tabpanel"
                                    aria-labelledby="pills-item-two-tab" tabindex="0">
                                    <div class="bd-joining-box">
                                        <div class="bd-joining-thumb mb-30">
                                            <img src="{{ asset('images/joining/journey-2.webp') }}" alt="image">
                                        </div>
                                        <div class="bd-joining-content mb-30">
                                            <h6 class="title">{{ __('messages.register_page_type_2_item_1_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_2_item_1_desc') }}
                                            </p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">{{ __('messages.register_page_type_2_item_2_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_2_item_2_desc') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-item-three" role="tabpanel"
                                    aria-labelledby="pills-item-three-tab" tabindex="0">
                                    <div class="bd-joining-box">
                                        <div class="bd-joining-thumb mb-30">
                                            <img src="{{ asset('images/joining/journey-3.webp') }}" alt="image">
                                        </div>
                                        <div class="bd-joining-content mb-30">
                                            <h6 class="title">{{ __('messages.register_page_type_3_item_1_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_3_item_1_desc') }}
                                            </p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">{{ __('messages.register_page_type_3_item_2_title') }}</h6>
                                            <p class="description">{{ __('messages.register_page_type_3_item_2_desc') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- joining info area start -->



        <!-- joining form area start -->
        <section class="bd-joining-form-area section-space primary-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="bd-section-wrapper section-title-space text-center">
                            <h2 class="bd-section-title mb-20">{{ __('messages.register_page_discount_title') }}</h2>
                            <p class="bd-section-paragraph">
                                {{ __('messages.register_page_discount_help_text') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gy-30 justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="bd-joining-main-thumb">
                            <div class="row text-center justify-content-center">
                                <div class="bd-coming-soon-content">


                                    <p class="bd-coming-soon-subtitle">
                                        {{ __('messages.register_page_discount_help_text_2') }}
                                    </p>
                                    <p class="bd-coming-soon-subtitle">
                                        {{ config('discounted_course_name_' . app()->getLocale()) }}</p>
                                    <div class="bd-countdown mb-30" id="countdown2"
                                        data-endtime="{{ config('discount-date') }}">
                                        <div class="countdown-item" data-unit="days"></div>
                                        <div class="countdown-item" data-unit="hours"></div>
                                        <div class="countdown-item" data-unit="minutes"></div>
                                        <div class="countdown-item" data-unit="seconds"></div>
                                    </div>
                                    <div class="bd-coming-soon-form">

                                    </div>

                                </div>
                            </div>
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
                            <form id="whatsappForm">
                                <div class="row g-30 bd-form-setup-content" id="formStepOne">
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="parentName">{{ __('messages.register_page_form_parent_name') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="parentName" id="parentName" type="text"
                                                    placeholder="{{ __('messages.register_page_form_parent_name') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="studentName">{{ __('messages.register_page_form_student_name') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="studentName" id="studentName" type="text"
                                                    placeholder="{{ __('messages.register_page_form_student_name') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="email">{{ __('messages.register_page_form_email') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="email" id="email" type="email"
                                                    placeholder="{{ __('messages.register_page_form_email') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="phone">{{ __('messages.register_page_form_phone_number') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="phone" id="phone" type="text"
                                                    placeholder="{{ __('messages.register_page_form_phone_number') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="course">{{ __('messages.register_page_form_course') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <select name="course" id="course" required>
                                                    <option value="" disabled selected>
                                                        {{ __('messages.register_page_form_course') }}</option>
                                                    <option value="TOEFL">TOEFL</option>
                                                    <option value="IELTS">IELTS</option>
                                                    <option value="ELTA">ELTA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="mode">{{ __('messages.register_page_form_edu_type') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <select name="mode" id="mode" required>
                                                    <option value="" disabled selected>
                                                        {{ __('messages.register_page_form_edu_type') }}</option>
                                                    <option value="Online">Online</option>
                                                    <option value="Əyani">Əyani</option>
                                                    <option value="Hibrid">Hibrid</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label
                                                    for="note">{{ __('messages.register_page_form_note') }}<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <textarea id="note" rows="2" placeholder="{{ __('messages.register_page_form_note') }}"></textarea>
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
@section('custom-js')

<script>
    document.getElementById("whatsappForm").addEventListener("submit", function(event) {
    event.preventDefault(); 


    var parentName = document.getElementById("parentName").value;
    var studentName = document.getElementById("studentName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var course = document.getElementById("course").value;
    var mode = document.getElementById("mode").value;
    var note = document.getElementById("note").value;


    var message = "*Yeni Qeydiyyat Məlumatı* %0A%0A" +
        " *Valideyn Adı Soyadı:* " + parentName + "%0A" +
        " *Təhsil Alanın Adı Soyadı:* " + studentName + "%0A" +
        " *E-poçt:* " + email + "%0A" +
        " *Əlaqə Nömrəsi:* " + phone + "%0A" +
        " *Seçilmiş Kurs:* " + course + "%0A" +
        " *Tədris Növü:* " + mode + "%0A" +
        " *Qeyd:* " + note;


    var phoneNumber = "994604042000";


    var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + message;


    window.open(whatsappURL, "_blank");
});
</script>
@endsection