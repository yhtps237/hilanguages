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
                                    <h1 class="bd-breadcrumb-title">Kurslarımız</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">Kurslarımız</span>
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

        <!-- course details area start -->
        <section class="bd-course-details-area bd-course-details-top section-space-bottom">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="bd-course-details-wrapper mb-30">
                            <div class="bd-course-details-heading mb-30">
                                <h2 class="bd-course-details-title mb-5">
                                    {{ getLocalizedField($course, 'head') }}
                                </h2>

                            </div>

                            <div class="bd-course-details-content mb-30">
                                {!! getLocalizedField($course, 'content') !!}
                                {{-- <h3 class="bd-course-details-content-title">Description</h3>
                                <p class="description">This comprehensive course covers all aspects of web development from
                                    the
                                    basics of HTML, CSS, and JavaScript to advanced topics like React, Node.js, and database
                                    integration. Whether you're a complete beginner or an experienced developer looking to
                                    hone
                                    your skills, this course has everything you need to master web development. Learn best
                                    practices and gain hands-on experience with real-world projects.</p> --}}
                            </div>






                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- course details area end -->



    </main>
@endsection
