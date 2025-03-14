@extends('layouts.base')

@section('title')
    {{ getLocalizedField($personal, 'head') }}
@endsection

@section('meta')
    <meta property="og:title" content="{{ getLocalizedField($personal, 'name') }}">
    <meta property="og:description" content="{{ getLocalizedField($personal, 'about') }}">
    <meta name="description" content="{{ getLocalizedField($personal, 'about') }}">
@endsection

@section('content')
    <main>

        <!-- dashboard breadcrumb start -->
        <div class="bd-dashboard-breadcrumb section-space-small-top">

        </div>
        <!-- dashboard breadcrumb end -->

        <!-- Start Instructor Certificate Dashboard Area -->
        <div class="bd-dashboard-area section-space-bottom">
            <div class="container">
                <div class="bd-dashboard-main">
                    <div class="row gy-30">

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="bd-dashboard-inner">
                                <div class="bd-dashboard-title-inner">
                                    <div class="d-flex justify-content-between">
                                        <h1>Hi Languages</h1>

                                    </div>
                                    <p style="font-size: 25px;">{{ __('messages.certificates') }}</p>
                                </div>
                                <div class="bd-dashboard-profile-info">
                                    <div class="bd-dashboard-profile-inner">
                                        <div class="row g-30">
                                            @foreach ($personal->certificates as $certificate)
                                                <div class="col-lg-4 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="bd-dashboard-certificate">
                                                        <div class="thumb">
                                                            <a href="{{ asset('storage/' . $certificate->image) }}"
                                                                class="popup-image"><img
                                                                    src="{{ asset('storage/' . $certificate->image) }}"
                                                                    alt="{{ $certificate->alternative }}"></a>
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
            <!-- End Instructor Certificate Dashboard Area -->

    </main>
@endsection

@section('custom-js')
    <script>
        $(document).ready(function() {
            var lang_az = document.getElementById('lang_az');
            var lang_en = document.getElementById('lang_en');
            var lang_ru = document.getElementById('lang_ru');
            lang_az.href = "{{ localized_route('ourTeamDetail', ['slug' => $personal->slug_az], 'az') }}";
            lang_en.href = "{{ localized_route('ourTeamDetail', ['slug' => $personal->slug_en], 'en') }}";
            lang_ru.href = "{{ localized_route('ourTeamDetail', ['slug' => $personal->slug_ru], 'ru') }}";
        });
    </script>
@endsection
