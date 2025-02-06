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
                                            <a href="index.html">HiLanguages</a>
                                        </span>
                                        <span class="divider">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </span>
                                        <span class="active">Vakansiya</span>
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
                            <h2 class="bd-section-title mb-20">HiLanguages Kursları </h2>
                            <p class="bd-section-paragraph">
                                Peşəkar insanlarla işləmək istəyir
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row gy-30 justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="bd-joining-main-thumb">
                            <p class="bd-section-paragraph">
                                Zəhmət olmasa bütün sahələri tam doldurun. HiLanguages qəbul komissiyası müraciətlərinizi
                                nəzərdən keçirəcək və uyğun namizədlərlə görüş təyin edilərək müsahibə üçün dəvət ediləcək.
                                Uğurlar!
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
                                        <a href="#formStepOne" class="bd-form-step-title bd-step-active">Məlumatlarınız</a>
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
                                                <label for="parentName">Adınız Soyadınız <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="parentName" id="parentName" type="text"
                                                    placeholder="Adınız Soyadınız" required>
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
                                                <label for="fileUpload">Fayl Yüklə <span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input type="file" name="fileUpload" id="fileUpload" required>
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
