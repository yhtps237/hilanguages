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
                                        <span><a href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-solid fa-angle-right"></i></span>
                                        <span class="active">Əlaqə</span>
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
                                <h2 class="bd-section-title mb-20">Bizimlə əlaqə</h2>
                                <p class="bd-section-paragraph">Bizim mehriban komandamız sizdən eşitmək istərdi.</p>
                            </div>
                            <div class="bd-contact-form">
                                <form action="#">
                                    <div class="row gy-30">
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="firstName">Ad soyad<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="firstName" id="firstName" type="text"
                                                        placeholder="Ad soyad">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="emailAddress">E-poçt<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="email" id="emailAddress" type="email"
                                                        placeholder="E-poçt">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-input-box">
                                                <div class="form-input-title">
                                                    <label for="subject">Mövzu</label>
                                                </div>
                                                <div class="form-input">
                                                    <input name="subject" id="subject" type="text" placeholder="Mövzu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="form-input-box mb-15">
                                                <div class="form-input-title">
                                                    <label for="message">Qeyd<span>*</span></label>
                                                </div>
                                                <div class="form-input">
                                                    <textarea id="message" placeholder="Qeyd"></textarea>
                                                </div>
                                            </div>
                                            <div class="checkbox-option">
                                                <input id="course-check-1" type="checkbox">
                                                <label for="course-check-1">Məlumatların düzgünlüyünü təsdiq edirəm.</label>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="bd-contact-form-btn">
                                                <button class="bd-btn btn-primary w-100" type="button">Göndər</button>
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
                            <span class="bd-section-subtitle">Ünvanımız</span>
                            <h2 class="bd-section-title mb-20">Ofisimiz</h2>
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
                                <h6 class="title">Bakı</h6>
                                <p>Akademik Həsən Əliyev küçəsi, 80D</p>
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
                                <h6 class="title">Zəng et</h6>
                                <p>+994 77 220 18 08</p>
                                <p>+994 77 220 18 08</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="bd-contact-address-box">
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6 class="title">E-poçt</h6>
                                <p><a href="mailto:info@hilanguages.az">info@hilanguages.az</a></p>
                                <p><a href="mailto:hr@hilanguages.az">hr@hilanguages.az</a></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.7212066682782!2d49.84298717642714!3d40.40133195657574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dabaf46eccb%3A0x8ee4131cc5159817!2zSMmZZMmZZiDFnmlya8mZdGzJmXIgUXJ1cHU!5e1!3m2!1str!2saz!4v1738582782890!5m2!1str!2saz"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact address area end -->

    </main>
@endsection
