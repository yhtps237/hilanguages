@extends('layouts.base')

@section('title')
@endsection

@section('meta')
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
                                        <span class="active">Haqqımızda</span>
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
                            <span class="bd-section-subtitle">Bizim Missiyamız & Vizyonumuz</span>
                            <h2 class="bd-section-title mb-20">Təhsilin Gələcəyinə Rəhbərlik edirik <span
                                    class="text-primary">HiLanguage</span></h2>
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
                            <h3 class="bd-mission-vision-title">Bizim Missiyamız</h3>
                            <p class="bd-mission-vision-desc"> <strong>HiLanguages</strong> olaraq, missiyamız tələbələri
                                sürətlə dəyişən dünyada uğur qazanmaq üçün lazım olan bilik və bacarıqlarla gücləndirməkdir.
                                Biz marağı, innovasiyanı və mükəmməlliyi təşviq edən öyrənmə mühiti yaratmağa sadiqik.</p>
                        </div>
                        <div class="bd-mission-vision-wrapper">
                            <h3 class="bd-mission-vision-title">Bizim Vizyonumuz</h3>
                            <p class="bd-mission-vision-desc">Biz <strong>HiLanguages</strong>-ni qlobal təhsil lideri kimi
                                görürük, gələcəyin düşünənlərini, yaradıcılarını və liderlərini formalaşdırmaq üçün
                                çalışırıq.
                                Məqsədimiz tələbələrin tam potensialına çatmasını təmin edəcək müasir öyrənmə təcrübələri
                                təqdim etmək və onların cəmiyyətə müsbət təsir etməsinə kömək etməkdir.</p>
                        </div>
                    </div>
                </div>
                <div class="bd-counter-wrapper bd-counter-style-five has-transparent pt-50">
                    <div class="bd-counter-item">
                        <div class="bd-counter-content">
                            <h2><span data-purecounter-duration="1" data-purecounter-end="950" class="purecounter">0</span>+
                            </h2>
                            <p>Ümumi Kurslar</p>
                        </div>
                    </div>
                    <div class="bd-counter-item">
                        <div class="bd-counter-content">
                            <h2><span data-purecounter-duration="1" data-purecounter-end="3" class="purecounter">0</span>K+
                            </h2>
                            <p>Tələbə Qeydiyyatı</p>
                        </div>
                    </div>
                    <div class="bd-counter-item">
                        <div class="bd-counter-content">
                            <h2><span data-purecounter-duration="1" data-purecounter-end="89" class="purecounter">0</span>+
                            </h2>
                            <p>Sertifikatlı Təlimçilər</p>
                        </div>
                    </div>
                    <div class="bd-counter-item">
                        <div class="bd-counter-content">
                            <h2><span data-purecounter-duration="1" data-purecounter-end="1" class="purecounter">0</span>M+
                            </h2>
                            <p>Məzunlar</p>
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
                            <h2 class="bd-section-title white-text mb-20">Əsas Dəyərlər & Fəlsəfə</h2>
                            <p class="bd-section-paragraph white-text">HiLanguages təhsil yanaşmasını irəli aparan
                                prinsiplər</p>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="bd-core-values-box-wrapper">
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/handshake.svg') }}"
                                        alt="icon">
                                </div>
                                <h4 class="bd-core-values-title">Dürüstlük</h4>
                                <p class="bd-core-values-desc">Biz, bütün qarşılıqlı əlaqələrimizdə yüksək dərəcədə
                                    dürüstlük və etik davranış standartlarına riayət edirik, tələbələrimizin və
                                    işçilərimizin
                                    etibarlı və hörmətli bir mühitdə inkişaf etməsini təmin edirik.</p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/innovation.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">İnnovasiya</h4>
                                <p class="bd-core-values-desc">Biz yaradıcılığı və innovasiyanı dəstəkləyir, təhsil
                                    metodlarımızı
                                    təkmilləşdirmək və müasir tədris üsullarını tətbiq etmək üçün daima yeniliklər
                                    axtarırıq.</p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/excellence.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">Mükəmməllik</h4>
                                <p class="bd-core-values-desc">Biz təhsil proqramlarımızın bütün aspektlərində mükəmməlliyə
                                    nail olmağa həsr olunmuşuq, davamlı inkişaf və yüksək keyfiyyətli tədrisə önəm veririk.
                                </p>
                            </div>
                            <div class="bd-core-values-box bg-flashlight">
                                <div class="bd-core-values-icon"><img src="{{ asset('images/icon/text-books.svg') }}"
                                        alt="icon"></div>
                                <h4 class="bd-core-values-title">Bizim Təhsil Fəlsəfəmiz</h4>
                                <p class="bd-core-values-desc"> <strong>HiLanguages</strong> olaraq, biz tələbə-mərkəzli
                                    yanaşmaya inanırıq,
                                    fərdi gücləri inkişaf etdirən və ömürboyu öyrənməyə həvəs yaradan bir mühit yaratmağı
                                    hədəfləyirik. Fəlsəfəmiz, hər bir tələbənin inkişaf etməsi və cəmiyyətə müsbət töhfə
                                    verməsi
                                    üçün dəstəkçi və inklüziv bir mühit təmin etmək üzərində qurulmuşdur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core Values area end -->
    </main>
@endsection
