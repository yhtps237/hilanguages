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
                                    <h1 class="bd-breadcrumb-title">{{ __('messages.students_page_title') }}</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a
                                                href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">{{ __('messages.students_page_title') }}</span>
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
            </br>
        </section>
        <!-- breadcrumb area end -->

        <!-- history area start -->
        <section class="bd-promotion-area section-space">
            <div class="container">
                <div class="row g-30 justify-content-between align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="bd-section-title-wrapper">
                            <h2 class="bd-section-title mb-20">Lorem ipsum dolor sit amet consectetur</h2>
                            <p class="bd-section-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                                recusandae ex reiciendis, inventore in quaerat laboriosam libero minima eius tenetur
                                adipisci quis consequatur cumque doloremque nobis! Laborum eaque nam illo.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- history area end -->

        <!-- 1600s history area start -->
        <section class="bd-history-centuries section-space-bottom">
            <div class="container">
                <div class="row">
                    <div class="bd-history-timeline">
                        @foreach ($students as $student)
                            <div class="bd-history-timeline-single">
                                <div class="bd-history-timeline-thumb">
                                    <div class="bd-campus-gallery-wrapper">
                                        <a href="#galleryOne" class="bd-campus-gallery-thumb">
                                            <img src="{{ asset('storage/' . optional($student->getFirstImage())->image) ?? asset('default-image.jpg') }}"
                                                alt="image">

                                        </a>
                                        <div id="galleryOne" class="hidden">
                                            <a href="assets/images/banner/baner.webp" title="Snapshots of Campus - 01"
                                                alt="image"></a>
                                            <a href="assets/images/banner/baner.webp" title="Snapshots of Campus - 01"
                                                alt="image"></a>
                                            <a href="assets/images/banner/baner.webp" title="Snapshots of Campus - 01"
                                                alt="image"></a>
                                            <a href="assets/images/banner/baner.webp" title="Snapshots of Campus - 01"
                                                alt="image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-history-timeline-content">
                                    <h4 class="title">İlham Hüseynəliyev 1</h4>
                                    <p class="bd-history-timeline-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit.
                                        Delectus quasi, exercitationem soluta molestiae possimus laboriosam accusamus
                                        voluptatem
                                        molestias et dolorem sunt rerum veritatis esse magnam excepturi aperiam provident
                                        veniam
                                        quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cupiditate
                                        culpa adipisci unde, ipsa soluta, harum ea nam voluptas quia necessitatibus qui
                                        perspiciatis, itaque autem! Expedita excepturi aliquid id! Explicabo! Lorem ipsum
                                        dolor
                                        sit amet consectetur adipisicing elit. Beatae sit eum quasi fugit eius, at quia
                                        facilis
                                        labore enim quibusdam quos ducimus repellat error accusamus nam officia saepe? Eos,
                                        perferendis!</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- 1600s history area end -->


    </main>
@endsection
