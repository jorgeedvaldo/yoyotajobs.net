<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

if (! function_exists('lurl')) {
    /**
     * Gera uma URL absoluta prefixada com o idioma actual (pt = sem prefixo).
     */
    function lurl(string $path = ''): string
    {
        $locale = app()->getLocale();
        $prefix = $locale === SetLocale::DEFAULT_LOCALE ? '' : '/' . $locale;
        $path = ltrim($path, '/');

        return url($prefix . ($path !== '' ? '/' . $path : ''));
    }
}

if (! function_exists('lroute')) {
    /**
     * Resolve uma rota nomeada tendo em conta o prefixo do idioma actual
     * (ex: 'search' -> 'en.search' quando app()->getLocale() === 'en').
     */
    function lroute(string $name, array $params = []): string
    {
        $locale = app()->getLocale();
        $localized = $locale === SetLocale::DEFAULT_LOCALE ? $name : $locale . '.' . $name;

        return Route::has($localized) ? route($localized, $params) : route($name, $params);
    }
}

if (! function_exists('locale_switch_url')) {
    /**
     * URL da página actual traduzida para outro idioma, substituindo apenas
     * o prefixo de idioma no caminho (os slugs mantêm-se iguais entre idiomas).
     */
    function locale_switch_url(string $locale): string
    {
        $segments = array_values(array_filter(explode('/', request()->path()), fn ($s) => $s !== ''));

        if (! empty($segments) && in_array($segments[0], SetLocale::SUPPORTED_LOCALES, true)) {
            array_shift($segments);
        }

        $prefix = $locale === SetLocale::DEFAULT_LOCALE ? '' : '/' . $locale;
        $rest = implode('/', $segments);
        $query = request()->getQueryString();

        return url($prefix . ($rest !== '' ? '/' . $rest : '')) . ($query ? '?' . $query : '');
    }
}
