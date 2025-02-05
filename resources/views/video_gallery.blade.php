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
                                    <h1 class="bd-breadcrumb-title text-center">Video Qalereya</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.html">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">Video Qalereya</span>
                                    </div>
                                </div>
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


        <section class="bd-video-gallery section-space-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bd-section-title-wrapper text-center">
                            <span class="bd-section-subtitle">Video Anlarımız</span>
                            <h2 class="bd-section-title">Seçilmiş Video Anlar</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($videos as $video)
                        <!-- 1-ci Video -->
                        <div class="col-lg-4 col-md-6">
                            <div class="bd-video-gallery-wrapper">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal1">
                                    <img src="https://img.youtube.com/vi/{{ $video->url }}/hqdefault.jpg"
                                        alt="Video Thumbnail">
                                </a>
                                <h6 class="bd-video-title">{{ getLocalizedField($video, 'head') }}</h6>
                            </div>
                        </div>

                        <!-- Modal 1 -->
                        <div class="modal fade" id="videoModal1" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe id="video1" src="https://www.youtube.com/embed/{{ $video->url }}"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



    </main>
@endsection
