<?php

use Illuminate\Support\Str;
use Carbon\Carbon;
$languageCode = app()->getLocale();

?>


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
                                    <h1 class="bd-breadcrumb-title text-center">Xəbərlər</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a href="index.html">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">Xəbərlər</span>
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
                <div class="row gy-30">
                    @foreach ($blogs as $blog)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <article class="bd-blog-wrapper style-four">
                                <div class="bd-blog-thumb">
                                    <a
                                        href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}"><img
                                            src="{{ $blog->getImageUrlAttribute() }}" alt="image"></a>
                                </div>
                                <div class="bd-blog-content">
                                    <div class="bd-blog-meta-list">

                                        <div class="bd-blog-meta-item">
                                            <span class="meta-icon">
                                                <i class="fa-sharp fa-light fa-calendar-days"></i>
                                            </span>
                                            <span class="meta-text"><a
                                                    href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">

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
                                    <h5 class="title underline"><a
                                            href="{{ localized_route('blogDetail', ['slug' => $blog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">
                                            {{ getLocalizedField($blog, 'head') }}</a></h5>
                                    <p>{{ Str::limit(strip_tags(getLocalizedField($blog, 'content')), 100) }}</p>

                                    <div class="bd-blog-btn">
                                        <div class="icon-text-btn p-relative">
                                            <a
                                                href="{{ localized_route('blogDetail', ['slug' => $blog->slug_az], app()->getLocale()) }}">
                                                <span>Ətraflı</span>
                                                <i>
                                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2871 1L17 6.71285L11.2871 12.4257"
                                                            stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M1 6.71313H16.8397" stroke="currentColor"
                                                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        {{-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="bd-blog-wrapper style-four">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/banner/baner.webp') }}"
                                        alt="image"></a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="bd-blog-meta-list">

                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text"><a href="blog-details.html">Fevral 03 2025</a></span>
                                    </div>
                                </div>
                                <h5 class="title underline"><a href="blog-details.html">İngilis dili kursları</a></h5>
                                <p>İngilis dili kursları ilə danışıq, qrammatika və dinləmə bacarıqlarınızı inkişaf etdirin.
                                </p>
                                <div class="bd-blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="blog-details.html">
                                            <span>Ətraflı</span>
                                            <i>
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="bd-blog-wrapper style-four">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/banner/baner.webp') }}"
                                        alt="image"></a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="bd-blog-meta-list">

                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text"><a href="blog-details.html">Fevral 03 2025</a></span>
                                    </div>
                                </div>
                                <h5 class="title underline"><a href="blog-details.html">İngilis dili kursları</a></h5>
                                <p>İngilis dili kursları ilə danışıq, qrammatika və dinləmə bacarıqlarınızı inkişaf etdirin.
                                </p>
                                <div class="bd-blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="blog-details.html">
                                            <span>Ətraflı</span>
                                            <i>
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="bd-blog-wrapper style-four">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/banner/baner.webp') }}"
                                        alt="image"></a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="bd-blog-meta-list">

                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text"><a href="blog-details.html">Fevral 03 2025</a></span>
                                    </div>
                                </div>
                                <h5 class="title underline"><a href="blog-details.html">İngilis dili kursları</a></h5>
                                <p>İngilis dili kursları ilə danışıq, qrammatika və dinləmə bacarıqlarınızı inkişaf etdirin.
                                </p>
                                <div class="bd-blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="blog-details.html">
                                            <span>Ətraflı</span>
                                            <i>
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="bd-blog-wrapper style-four">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/banner/baner.webp') }}"
                                        alt="image"></a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="bd-blog-meta-list">

                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text"><a href="blog-details.html">Fevral 03 2025</a></span>
                                    </div>
                                </div>
                                <h5 class="title underline"><a href="blog-details.html">İngilis dili kursları</a></h5>
                                <p>İngilis dili kursları ilə danışıq, qrammatika və dinləmə bacarıqlarınızı inkişaf etdirin.
                                </p>
                                <div class="bd-blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="blog-details.html">
                                            <span>Ətraflı</span>
                                            <i>
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <article class="bd-blog-wrapper style-four">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/banner/baner.webp') }}"
                                        alt="image"></a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="bd-blog-meta-list">

                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text"><a href="blog-details.html">Fevral 03 2025</a></span>
                                    </div>
                                </div>
                                <h5 class="title underline"><a href="blog-details.html">İngilis dili kursları</a></h5>
                                <p>İngilis dili kursları ilə danışıq, qrammatika və dinləmə bacarıqlarınızı inkişaf etdirin.
                                </p>
                                <div class="bd-blog-btn">
                                    <div class="icon-text-btn p-relative">
                                        <a href="blog-details.html">
                                            <span>Ətraflı</span>
                                            <i>
                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2871 1L17 6.71285L11.2871 12.4257" stroke="currentColor"
                                                        stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M1 6.71313H16.8397" stroke="currentColor" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> --}}
                    @endforeach


                </div>
                <!-- pagination style -->
                <div class="basic-pagination">
                    {{-- <nav>
                        <ul>
                            <li>
                                <a href="#" class="prev">
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a class="current" href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#" class="next">
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> --}}
                    {{ $blogs->links('pagination::bootstrap-5') }}
                </div>
                <!-- pagination style end -->
            </div>
        </section>
        <!-- course list area end -->

    </main>
@endsection
