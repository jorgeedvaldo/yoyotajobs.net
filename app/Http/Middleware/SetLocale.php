<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Idiomas suportados pelo yoyotajobs.net, além do idioma por omissão (pt).
     * O prefixo de URL corresponde à chave (ex: /en/jobs, /fr/emplois).
     */
    public const SUPPORTED_LOCALES = ['en', 'fr', 'es'];

    public const DEFAULT_LOCALE = 'pt';

    public function handle(Request $request, Closure $next)
    {
        $segment = $request->segment(1);

        $locale = in_array($segment, self::SUPPORTED_LOCALES, true)
            ? $segment
            : self::DEFAULT_LOCALE;

        app()->setLocale($locale);

        return $next($request);
    }
}
