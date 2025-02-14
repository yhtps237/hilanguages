<?php

use Illuminate\Support\Str;
use Carbon\Carbon;
$languageCode = app()->getLocale();

?>
@extends('layouts.base')

@section('title')
    {{ __('messages.search') }}
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
                                    <h1 class="bd-breadcrumb-title">{{ __('messages.search') }} {{ $query }}</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a
                                                href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">{{ __('messages.search') }} {{ $query }}</span>
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

        <!-- course list area start -->
        <section class="bd-course-list-area section-space">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-xl-6 ">
                        <div class="bd-section-wrapper section-title-space text-center ">
                            <span class="bd-section-subtitle ">{{ __('messages.menu_item3') }}</span>
                            <h2 class="bd-section-title mb-20 ">{{ __('messages.category_subtitle') }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-12">
                        <div class="row g-30 grid">
                            @foreach ($courses as $course)
                                <div class="col-xl-4 col-lg-6 col-md-6 grid-item">
                                    <div class="bd-course-wrapper style-two">
                                        <a href="{{ localized_route('courseDetail', ['slug' => $course->{'slug_' . app()->getLocale()}], app()->getLocale()) }}"
                                            class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">
                                            <div class="bd-course-badge">

                                            </div>
                                            <div class="bd-course-thumb-bg bg-1"><img
                                                    src="{{ $course->getImage2UrlAttribute() }}" alt="images"></div>


                                            {{-- <div class="bd-course-overly-title fs-200 text-white">TOEFL</div> --}}
                                        </a>
                                        <div class="bd-course-content">
                                            <div class="bd-course-meta d-flex-between mb-15">
                                                <div class="bd-course-tag">
                                                    <a class="bd-badge badge-outline-light badge-transparent"
                                                        href="#">{{ getLocalizedField($course, 'help_text') }}</a>
                                                </div>

                                            </div>
                                            <h5 class="bd-course-title underline mb-10"><a
                                                    href="{{ localized_route('courseDetail', ['slug' => $course->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                                    {{ getLocalizedField($course, 'head') }}</a></h5>
                                            <div class="bd-course-rating d-flex-between">


                                            </div>
                                            <div class="bd-course-full-border"></div>
                                            <div class="btn-wrap d-flex align-items-center justify-content-between">

                                                <div class="bd-course-btn">
                                                    <a class="bd-text-btn"
                                                        href="{{ localized_route('courseDetail', ['slug' => $course->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">Ətraflı
                                                        <span class="box-icon">
                                                            <i class="fa-regular fa-arrow-right-long first-icon"></i>
                                                            <i class="fa-regular fa-arrow-right-long second-icon"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course list area end -->

        <section class="bd-blog-area section-space-bottom fix ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-xl-6 ">
                        <div class="bd-section-title-wrapper section-title-space text-center ">
                            <span class="bd-section-subtitle ">{{ __('messages.blog_title') }}</span>
                            <h2 class="bd-section-title ">{{ __('messages.blog_desc') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="swiper blogSlideActivation swiper-shadow-add ">
                    <div class="swiper-wrapper ">
                        @foreach ($blogs as $blog)
                            <div class="swiper-slide ">
                                <article class="bd-blog-wrapper style-four ">
                                    <div class="bd-blog-thumb ">
                                        <a
                                            href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }} ">
                                            <img src="{{ $blog->getImageUrlAttribute() }}" alt="image "></a>
                                    </div>
                                    <div class="bd-blog-content ">
                                        <div class="bd-blog-meta-list ">

                                            <div class="bd-blog-meta-item ">
                                                <span class="meta-icon ">
                                                    <i class="fa-sharp fa-light fa-calendar-days "></i>
                                                </span>
                                                <span class="meta-text "><a
                                                        href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }} ">
                                                        @php
                                                            $date = Carbon::parse($blog->date);
                                                        @endphp

                                                        @if ($languageCode == 'az')
                                                            {{ get_month($date->month) }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @else
                                                            {{ $date->format('F') }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @endif
                                                    </a></span>
                                            </div>
                                        </div>
                                        <h5 class="title underline "><a
                                                href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                                {{ getLocalizedField($blog, 'head') }}</a></h5>
                                        <p>{{ Str::limit(strip_tags(getLocalizedField($blog, 'content')), 100) }}</p>
                                        <div class=" ">
                                            <div class="icon-text-btn p-relative ">
                                                <a
                                                    href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                                    <span>Ətraflı</span>
                                                    <i class="fa-regular fa-arrow-right-long "></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="bd-blog-pagination bd-dots-pagination has-primary "></div>
                </div>
            </div>
        </section>
    </main>
@endsection
