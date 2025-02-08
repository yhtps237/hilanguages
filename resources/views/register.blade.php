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
                                            <a href={{ localized_route('index', [], app()->getLocale()) }}>HiLanguages</a>
                                        </span>
                                        <span class="divider">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </span>
                                        <span class="active">Əlaqə</span>
                                    </div>
                                    <h1 class="bd-breadcrumb-title fontregs">Qeydiyyatdan keç</h1>
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
                            <h2 class="bd-section-title">HiLanguages-də Təhsil Alın</h2>
                        </div>
                        <div class="tab-style-four">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-item-one-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-one" type="button" role="tab"
                                        aria-controls="pills-item-one" aria-selected="true">
                                        Sürətli Qeydiyyat
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-two-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-two" type="button" role="tab"
                                        aria-controls="pills-item-two" aria-selected="false">
                                        Kursunuzu Seçin
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-item-three-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-item-three" type="button" role="tab"
                                        aria-controls="pills-item-three" aria-selected="false">
                                        Dərslərə Başlayın
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
                                            <h6 class="title">Qeydiyyatdan keçin</h6>
                                            <p class="description">HiLanguages platformasında qeydiyyatdan keçərək ingilis
                                                dili öyrənməyə başlayın.</p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">Səviyyənizi Müəyyən Edin</h6>
                                            <p class="description">Səviyyə təyin testindən keçərək sizin üçün uyğun olan
                                                kursu seçin və dərhal təhsilə başlayın.</p>
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
                                            <h6 class="title">Kurslar Arasından Seçim Edin</h6>
                                            <p class="description">Fərqli səviyyələr və kateqoriyalara uyğun kurslarımız
                                                arasından seçim edərək, sizin üçün ən uyğun proqramı tapın.</p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">Dərs Materiallarına Giriş əldə Edin</h6>
                                            <p class="description">Video dərslər, testlər və interaktiv materiallarla
                                                ingilis dilini öyrənməyə başlayın.</p>
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
                                            <h6 class="title">Canlı və Öz-Öyrənmə Dərslərinə Qoşulun</h6>
                                            <p class="description">Canlı dərslərə qoşularaq müəllimlərdən birbaşa öyrənin və
                                                ya istədiyiniz vaxt öz-öyrənmə materialları ilə dərs keçin.</p>
                                        </div>
                                        <div class="bd-joining-content">
                                            <h6 class="title">Tapşırıqları Yerinə Yetirin və İnkişafınızı İzləyin</h6>
                                            <p class="description">Tapşırıqları tamamlayın, imtahanlardan keçin və
                                                sertifikat əldə edərək dil bacarıqlarınızı inkişaf etdirin.</p>
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
                            <h2 class="bd-section-title mb-20">İngilis dili kursuna qeydiyyatdan keçin</h2>
                            <p class="bd-section-paragraph">
                                HiLanguages ilə öyrənməyi həm əyləncəli, həm də praktik təcrübəyə çevirin!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gy-30 justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="bd-joining-main-thumb">
                            <div class="row text-center justify-content-center">
                                <div class="bd-coming-soon-content">


                                    <p class="bd-coming-soon-subtitle">Endirimdən istifadə etmək üçün qeydiyyatdan keçin
                                    </p>
                                    <p class="bd-coming-soon-subtitle">ELTA kurslarına 30% endirim!</p>
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
                                            class="bd-form-step-title bd-step-active">Məlumatlarınız</a>
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
                                                <label for="parentName">Valideyn Adı Soyadı <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="parentName" id="parentName" type="text"
                                                    placeholder="Valideyn Adı Soyadı" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="studentName">Təhsil alanın Adı Soyadı <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="studentName" id="studentName" type="text"
                                                    placeholder="Təhsil alanın Adı Soyadı" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="email">E-poçt <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="email" id="email" type="email" placeholder="E-poçt"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="phone">Əlaqə nömrəsi <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="phone" id="phone" type="text"
                                                    placeholder="Əlaqə nömrəsi" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="course">Kursu Seçin <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <select name="course" id="course" required>
                                                    <option value="" disabled selected>Kursu seçin</option>
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
                                                <label for="mode">Tədris növü <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <select name="mode" id="mode" required>
                                                    <option value="" disabled selected>Tədris növü</option>
                                                    <option value="Online">Online</option>
                                                    <option value="Əyani">Əyani</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="note">Qeyd <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <textarea id="note" rows="2" placeholder="Qeyd"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <button class="nextBtn bd-btn btn-primary" type="submit">Göndər</button>
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
