@extends('layouts.base')

@section('title')
    {{ __('messages.menu_item4_1') }}
@endsection

@section('meta')
    <meta property="og:title" content="{{ __('messages.menu_item4_1') }}">
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
                                    <h1 class="bd-breadcrumb-title text-center">{{ __('messages.menu_item4_1') }}</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a
                                                href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">{{ __('messages.menu_item4_1') }}</span>
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

        <!-- gallery area start -->
        <section class="bd-campus-gallery-area section-space-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="bd-section-title-wrapper section-title-space text-center">
                            <span class="bd-section-subtitle">{{ __('messages.photo_gallery_title') }}</span>
                            <h2 class="bd-section-title">{{ __('messages.photo_gallery_desc') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-30 justify-content-center">
                    @foreach ($photoGalleries as $gallery)
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="bd-campus-gallery-wrapper">
                                <a href="#gallery{{ $loop->index + 1 }}" class="bd-campus-gallery-thumb">
                                    <img src="{{ $gallery->getImageUrlAttribute() }}" alt="{{ $gallery->alternative }}">
                                </a>
                                <h6 class="bd-campus-gallery-title">{{ getLocalizedField($gallery, 'head') }}</h6>
                                <div id="gallery{{ $loop->index + 1 }}" class="hidden">
                                    @foreach ($gallery->photos as $photo)
                                        <a href="{{ $photo->getImageUrlAttribute() }}" title="Snapshots of Campus - 01"
                                            alt="{{ $photo->alternative }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- gallery-more style -->
                <div class="bd-gallery-more-btn d-flex justify-content-center mt-50">

                </div>
                <!-- gallery-more style end -->
            </div>
        </section>
        <!-- gallery area end -->



    </main>
@endsection
