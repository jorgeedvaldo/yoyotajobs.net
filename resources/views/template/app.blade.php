<!doctype html>
@php
    $localeHtmlMap = ['pt' => 'pt-PT', 'en' => 'en', 'fr' => 'fr-FR', 'es' => 'es-ES'];
    $ogLocaleMap = ['pt' => 'pt_PT', 'en' => 'en_GB', 'fr' => 'fr_FR', 'es' => 'es_ES'];
    $currentLocale = app()->getLocale();
@endphp
<html lang="{{ $localeHtmlMap[$currentLocale] ?? $currentLocale }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ asset('storage/images/logo-16x16.png') }}" sizes="16x16" />
		<link rel="icon" href="{{ asset('storage/images/logo-32x32.png') }}" sizes="32x32" />
		<link rel="icon" href="{{ asset('storage/images/logo-96x96.png') }}" sizes="96x96" />
		<link rel="apple-touch-icon" href="{{ asset('storage/images/logo-180x180.png') }}" />

        <title>@yield('title') - {{env('APP_NAME')}}</title>
        <meta name="description" content="@yield('description')" />
		<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>

        @if(config('services.tracking.ga4_id'))
        <!-- Google tag (gtag.js) - GA4 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.tracking.ga4_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '{{ config('services.tracking.ga4_id') }}');
        </script>
        @endif

        <!-- AdSense -->
        @if(($adsEnabled ?? true) && config('services.tracking.adsense_client'))
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client={{ config('services.tracking.adsense_client') }}" crossorigin="anonymous"></script>
        @endif

        <!-- Open Graph / Facebook -->
		<meta property="og:type" content="article" />
		<meta property="og:title" content="@yield('title') - {{env('APP_NAME')}}" />
		<meta property="og:url" content="@yield('canonical_link')" />
		<meta property="og:description" content="@yield('description')" />
		<meta property="article:published_time" content="@yield('created_at')" />
		<meta property="article:modified_time" content="@yield('updated_at')" />
		<meta property="og:site_name" content="{{ env('APP_NAME') }}" />
		<meta property="og:image" content="@yield('url')" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="700" />
		<meta property="og:image:alt" content="{{ env('APP_NAME') }}" />
		<meta property="og:locale" content="{{ $ogLocaleMap[$currentLocale] ?? $currentLocale }}" />
		<meta name="author" content="Edivaldo" />
		<meta name="twitter:text:title" content="@yield('title') - {{env('APP_NAME')}}" />
		<meta name="twitter:image" content="@yield('url')" />
		<meta name="twitter:card" content="summary_large_image" />

		<!-- Feed -->
    	<link rel="alternate" type="application/rss+xml" title="{{ env('APP_NAME') }} &raquo; Feed" href="{{url('/feed')}}" />

		<!-- Canonical Link -->
        <link rel="canonical" href="@yield('canonical_link')"/>

        <!-- Hreflang: versoes de idioma desta pagina -->
        @foreach(config('app.supported_locales') as $locCode => $locInfo)
            <link rel="alternate" hreflang="{{ $locCode === 'pt' ? 'pt-PT' : $locCode }}" href="{{ locale_switch_url($locCode) }}" />
        @endforeach
        <link rel="alternate" hreflang="x-default" href="{{ locale_switch_url('pt') }}" />

        <!-- Preconnect to font origins -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

        <!-- Site CSS (inlined: includes Bootstrap fallbacks for instant render) -->
        <style>{!! @file_get_contents(public_path('assets/css/style.css')) !!}</style>

        <!-- Bootstrap CSS (async: fallbacks above cover initial render) -->
        <link rel="preload" as="style" href="{{ asset('assets/css/bootstrap.min.css') }}" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"></noscript>

        <!-- Non-critical CSS (deferred: fonts and decorative icons) -->
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"></noscript>

        <link rel="preload" as="style" href="{{ asset('assets/css/icons.css') }}?v={{ @filemtime(public_path('assets/css/icons.css')) ?: '1' }}" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"></noscript>

			@yield('head-scripts')
    </head>

    <body>
        <div id="app">
            <!-- Header -->
            <header class="navbar navbar-expand-lg navbar-light" role="banner">
                <div class="container">
                    <a class="navbar-brand" href="{{ lurl('/') }}">
                        <span class="empregos">YOYOTA</span><span class="yoyota">JOBS</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('nav.open_menu') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav class="collapse navbar-collapse justify-content-end" id="navbarNav" aria-label="{{ __('nav.main_nav') }}">
                        <ul class="navbar-nav ms-auto align-items-lg-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ lurl('/') }}"><i class="bi bi-house me-1" aria-hidden="true"></i>{{ __('nav.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ lurl('about') }}"><i class="bi bi-info-circle me-1" aria-hidden="true"></i>{{ __('nav.about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ lurl('empregos') }}">{{ __('nav.jobs') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ lurl('articles') }}"><i class="bi bi-journal-text me-1" aria-hidden="true"></i>{{ __('nav.blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ lurl('dashboard') }}"><i class="bi bi-tools me-1" aria-hidden="true"></i>{{ __('nav.tools') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="{{ __('nav.choose_language') }}">
                                    {{ config('app.supported_locales.' . $currentLocale . '.flag') }} {{ strtoupper($currentLocale) }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                                    @foreach(config('app.supported_locales') as $locCode => $locInfo)
                                        <li>
                                            <a class="dropdown-item {{ $currentLocale === $locCode ? 'active' : '' }}" href="{{ locale_switch_url($locCode) }}">
                                                {{ $locInfo['flag'] }} {{ $locInfo['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>

            <main id="main-content">
                @yield('content')
            </main>

            <footer class="footer" role="contentinfo">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <a href="{{ lurl('/') }}" class="footer-brand"><span class="empregos">YOYOTA</span><span class="yoyota">JOBS</span></a>
                            <p class="footer-description">
                                {{ __('nav.footer_description') }}
                            </p>
                            <div class="social-links">
                                <a href="https://facebook.com/yoyotajobs" aria-label="Facebook"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/yoyotajobs" aria-label="LinkedIn"><i class="bi bi-linkedin" aria-hidden="true"></i></a>
                                <a href="https://instagram.com/yoyotajobs" aria-label="Instagram"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="footer-section">
                                <h5>{{ __('nav.footer_navigation') }}</h5>
                                <ul class="footer-links">
                                    <li><a href="{{ lurl('/') }}">{{ __('nav.home') }}</a></li>
                                    <li><a href="{{ lurl('about') }}">{{ __('nav.about') }}</a></li>
                                    <li><a href="{{ lurl('empregos') }}">{{ __('nav.jobs') }}</a></li>
                                    <li><a href="{{ lurl('articles') }}">{{ __('nav.blog') }}</a></li>
                                    <li><a href="{{ lurl('dashboard') }}">{{ __('nav.tools') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="footer-section">
                                <h5>{{ __('nav.footer_jobs_by_country') }}</h5>
                                <ul class="footer-links">
                                    <li><a href="{{ lurl('vagas-de-emprego-em-portugal') }}">&#127477;&#127481; Portugal</a></li>
                                    <li><a href="{{ lurl('vagas-de-emprego-em-espanha') }}">&#127466;&#127480; Espanha</a></li>
                                    <li><a href="{{ lurl('vagas-de-emprego-em-franca') }}">&#127467;&#127479; França</a></li>
                                    <li><a href="{{ lurl('vagas-de-emprego-na-europa') }}">&#127466;&#127482; Europa (geral)</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="footer-section">
                                <h5>{{ __('nav.footer_for_candidates') }}</h5>
                                <ul class="footer-links">
                                    <li><a href="{{ lurl('empregos') }}">{{ __('nav.footer_search_jobs') }}</a></li>
                                    <li><a href="{{ lurl('modelos-de-curriculos') }}">{{ __('nav.footer_cv_templates') }}</a></li>
                                    <li><a href="#">{{ __('nav.footer_career_tips') }}</a></li>
                                    <li><a href="#">{{ __('nav.footer_interview_prep') }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 mb-4">
                            <div class="footer-section">
                                <h5>{{ __('nav.footer_for_companies') }}</h5>
                                <ul class="footer-links">
                                    <li><a href="mailto:geral@yoyotajobs.net">{{ __('nav.footer_post_jobs') }}</a></li>
                                    <li><a href="#">{{ __('nav.footer_search_candidates') }}</a></li>
                                    <li><a href="#">{{ __('nav.footer_hr_resources') }}</a></li>
                                    <li><a href="#">{{ __('nav.footer_business_contact') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @php
                        $footerCityGroups = [
                            ['id' => 1, 'label' => __('nav.footer_cities_pt')],
                            ['id' => 2, 'label' => __('nav.footer_cities_es')],
                            ['id' => 3, 'label' => __('nav.footer_cities_fr')],
                        ];
                    @endphp
                    @foreach ($footerCityGroups as $group)
                        @php
                            $footerCities = array_filter(config('landings'), function ($c) use ($group) {
                                return ($c['type'] ?? null) === 'city' && ($c['country_id'] ?? null) == $group['id'];
                            });
                        @endphp
                        @if (!empty($footerCities))
                        <div class="footer-section mb-4">
                            <h5>{{ $group['label'] }}</h5>
                            <ul class="footer-links footer-cities" style="display:flex; flex-wrap:wrap; gap:.25rem 1.5rem; list-style:none; padding-left:0; margin-bottom:0;">
                                @foreach ($footerCities as $landingCfg)
                                    <li><a href="{{ lurl($landingCfg['slug']) }}">{{ $landingCfg['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    @endforeach

                    <div class="footer-bottom">
                        <div class="footer-bottom-links">
                            <a href="{{ lurl('terms') }}">{{ __('nav.footer_terms') }}</a>
                            <a href="{{ lurl('api-docs') }}">{{ __('nav.footer_api') }}</a>
                            <a href="#">{{ __('nav.footer_cookies') }}</a>
                            <a href="#">{{ __('nav.footer_support') }}</a>
                            <a href="#">{{ __('nav.footer_contact') }}</a>
                        </div>
                        <p class="copyright">
                            &copy; {{ date('Y') }} YoyotaJobs. {{ __('nav.footer_rights') }}
                        </p>
                    </div>
                </div>
            </footer>
        </div>
		@yield('footer-scripts')
		<!-- Bootstrap 5 JS Bundle (deferred) -->
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
