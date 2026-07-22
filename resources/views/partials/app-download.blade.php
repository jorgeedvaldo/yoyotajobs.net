{{--
    Card promocional reutilizavel para sidebars (ex.: detalhe de emprego).
--}}
<div class="card my-4 border-0 shadow-sm app-promo-card" style="border-radius: 12px; overflow: hidden;">
    <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #1a1a1a 0%, #343a40 100%); color: #fff;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.5-11.5v4l3 1.5-.5 1-3.5-2v-4.5h1z"/>
        </svg>
        <h5 class="fw-bold mt-3 mb-2" style="color: #fff;">{{ __('nav.promo_title') }}</h5>
        <p class="small mb-3" style="color: rgba(255, 255, 255, 0.8);">
            {{ __('nav.promo_description') }}
        </p>
        <a href="{{ lurl('empregos') }}" class="btn btn-light btn-sm fw-bold">
            {{ __('nav.promo_cta') }}
        </a>
    </div>
</div>
