<?php

use Illuminate\Support\Str;
use Carbon\Carbon;
$languageCode = app()->getLocale();

?>

@extends('layouts.base')

@section('title')
    {{ getLocalizedField($blog, 'head') }}
@endsection

@section('meta')
@endsection

@section('content')
    <main>
        <!-- blog details breadcrumb area start -->
        <section class="bd-blog-details-breadcrumb-area bd-blog-details-breadcrumb-bg section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <div class="bd-blog-details-breadcrumb-content">

                            <h1 class="bd-blog-details-breadcrumb-title">{{ getLocalizedField($blog, 'head') }}</h1>
                            <div class="bd-blog-details-breadcrumb-meta">
                                <div class="bd-blog-meta-item has-separator">


                                </div>
                                <div class="bd-blog-meta-item has-separator">
                                    <span class="meta-icon">
                                        <i class="fa-sharp fa-light fa-calendar-days"></i>
                                    </span>
                                    <span class="meta-text">
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
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-shape-dots">
                <img src="{{ asset('images/shape/inner-dots-shape.webp') }}" alt="">
            </div>
        </section>
        <!-- blog details breadcrumb area end -->

        <!-- postbox area start -->
        <section class="bd-postbox-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-xxl-8 col-lg-8">
                        <div class="bd-postbox-wrapper">
                            <div class="bd-blog-feature-thumb"><img src="{{ asset('storage/' . $blog->image) }}"
                                    alt="blog feature image">
                            </div>
                            <div class="bd-postbox-content">
                                {!! getLocalizedField($blog, 'content') !!}
                            </div>



                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-xxl-4 col-lg-4">
                        <div class="bd-blog-sidebar sidebar-right sidebar-sticky">
                            <div class="bd-blog-widget widget-search">
                                <h5 class="bd-widget-title mb-20">Axtarış</h5>
                                <div class="bd-sidebar-search">
                                    <form class="bd-sidebar-search-form" action="#" method="get">
                                        <input type="text" value="" required="" name="s"
                                            placeholder="Axtarış">
                                        <button type="submit"> <i class="far fa-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <div class="bd-blog-widget widget-latest-posts">
                                <h5 class="bd-widget-title mb-20">Son xəbərlər</h5>
                                <div class="bd-widget-posts">
                                    @foreach ($latestBlogs as $latestBlog)
                                        <div class="bd-recent-post-item">
                                            <div class="bd-recent-post-thumb">
                                                <a
                                                    href="{{ localized_route('blogDetail', ['slug' => $latestBlog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}"><img
                                                        src="{{ asset('storage/' . $latestBlog->image) }}"
                                                        alt="image"></a>
                                            </div>
                                            <div class="bd-recent-post-content">
                                                <div class="bd-recent-post-meta">
                                                    <span class="icon"><i class="fa-light fa-calendar-days"></i></span>
                                                    <span class="date">
                                                        @php
                                                            $date = Carbon::parse($latestBlog->date);
                                                        @endphp

                                                        @if ($languageCode == 'az')
                                                            {{ get_month($date->month) }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @else
                                                            {{ $date->format('F') }} {{ $date->day }}
                                                            {{ $date->year }}
                                                        @endif
                                                    </span>
                                                </div>
                                                <h6 class="bd-recent-post-title underline"><a
                                                        href="{{ localized_route('blogDetail', ['slug' => $latestBlog->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">İngilis
                                                        {{ getLocalizedField($latestBlog, 'head') }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->



    </main>
@endsection
