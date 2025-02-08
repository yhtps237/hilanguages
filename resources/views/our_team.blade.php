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
                                    <h1 class="bd-breadcrumb-title">{{ __('messages.menu_item2_3') }}</h1>
                                    <div class="bd-breadcrumb-list">
                                        <span><a
                                                href="{{ localized_route('index', [], app()->getLocale()) }}">HiLanguages</a></span>
                                        <span class="divider"><i class="fa-regular fa-angle-right"></i></span>
                                        <span class="active">{{ __('messages.menu_item2_3') }}</span>
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

        <!-- instructor page area start -->
        <div class="bd-instructor-area section-space">
            <div class="container">
                <div class="row gy-30">
                    @foreach ($personals as $personal)
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-instructor-wrapper style-two">
                                <div class="bd-instructor-item">
                                    <div class="bd-instructor-thumb-wrap">
                                        <a
                                            href="{{ localized_route('ourTeamDetail', ['slug' => $personal->{'slug_' . app()->getLocale()}], app()->getLocale()) }}"><img
                                                src="{{ asset('storage/' . $personal->image) }}" alt="image"></a>
                                    </div>
                                    <div class="bd-instructor-info">
                                        <h6 class="name underline"><a
                                                href="{{ localized_route('ourTeamDetail', ['slug' => $personal->{'slug_' . app()->getLocale()}], app()->getLocale()) }}">{{ getLocalizedField($personal, 'name') }}</a>
                                        </h6>
                                        <span>{{ getLocalizedField($personal, 'position') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- instructor page area end -->

    </main>
@endsection
