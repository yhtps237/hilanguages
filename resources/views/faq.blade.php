@extends('layouts.base')

@section('title')
@endsection

@section('meta')
@endsection

@section('content')
    <main>

        <!-- breadcrumb area start -->
        <section class="bd-breadcrumb-area p-relative fix z-index-11">
            <div class="bd-breadcrumb-bg-two" data-background="{{ asset('images/breadcrumb/breadcrumb-bg-2.webp') }}"></div>
            <div class="bd-breadcrumb-wrapper p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bd-breadcrumb style-two d-flex-center">
                                <div class="bd-breadcrumb-content">
                                    <h1 class="bd-breadcrumb-title text-center">FAQ</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.html">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">FAQ</span>

                                    </div>
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                    <div class="bd-breadcrumb-shape">
                        <div class="shape-1"><img src="{{ asset('images/shape/breadcrumb-shape-1.webp') }}" alt="shape">
                        </div>
                        <div class="shape-3"><img src="{{ asset('images/shape/bulb-shape.webp') }}" alt="shape"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- faq area start -->
        <section class="bd-faq-area section-space-top p-relative">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-xl-4 col-lg-5">
                        <div class="bd-section-title-wrapper section-title-space">
                            <h2 class="bd-section-title">Kömək lazımdır?<br class="d-none d-lg-block">Cavabları Burada Tapın
                            </h2>
                        </div>
                        <div class="bd-faq-tab-menu">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Ümumi suallar</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Ödənişlər</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="bd-faq-tab-content">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab" tabindex="0">
                                    <div class="bd-faq-accordion">
                                        <div class="accordion-common-style accordion-transparent accordion-style-one">
                                            <div class="accordion" id="accordionExampleTwo">
                                                @foreach ($faqsGeneral as $faq)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $faq->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $faq->id }}">
                                                                {{ getLocalizedField($faq, 'head') }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $faq->id }}"
                                                            class="accordion-collapse collapse @if ($loop->iteration == 1) show @endif"
                                                            aria-labelledby="heading{{ $faq->id }}"
                                                            data-bs-parent="#accordionExampleTwo">
                                                            <div class="accordion-body">
                                                                {{ getLocalizedField($faq, 'content') }}

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab" tabindex="0">
                                    <div class="bd-faq-accordion">
                                        <div class="accordion-common-style accordion-transparent accordion-style-one">
                                            <div class="accordion" id="accordionExampleThree">
                                                @foreach ($faqsPeyment as $faq)
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{ $faq->id }}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse{{ $faq->id }}">
                                                                {{ getLocalizedField($faq, 'head') }}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{ $faq->id }}"
                                                            class="accordion-collapse collapse @if ($loop->iteration == 1) show @endif"
                                                            aria-labelledby="heading{{ $faq->id }}"
                                                            data-bs-parent="#accordionExampleThree">
                                                            <div class="accordion-body">
                                                                {{ getLocalizedField($faq, 'content') }}

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
        <!-- faq area end -->

        </br>

    </main>
@endsection
