<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApiDocController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\OcrController;
use App\Http\Controllers\TermController;
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| O portal e multilingue (pt/en/fr/es). As rotas do site sao definidas uma
| unica vez em registerSiteRoutes() e registadas 4 vezes: sem prefixo para
| pt (idioma por omissao) e com prefixo /en, /fr, /es para os restantes.
| Os nomes das rotas ganham o prefixo do idioma (ex: "en.search"), exceto
| em pt, que mantem o nome "canonico" (ex: "search"). Usa o helper lroute()
| para resolver o nome certo consoante o idioma atual.
|
*/

function registerSiteRoutes(?string $namePrefix = null): void
{
    $name = fn (string $base) => $namePrefix ? "{$namePrefix}.{$base}" : $base;

    Route::get('/', [HomeController::class, 'index'])->name($name('home'));
    Route::get('/about', [AboutController::class, 'index'])->name($name('about'));
    Route::get('/terms', [TermController::class, 'index'])->name($name('terms'));
    Route::get('/api-docs', [ApiDocController::class, 'index'])->name($name('api.docs'));
    Route::get('/vagas-de-emprego-em-portugal', [JobController::class, 'vagasPortugal'])->name($name('vagas.portugal'));

    // Landings SEO de vagas (Portugal, Espanha, Franca e cidades) a partir de config/landings.php
    foreach ((array) config('landings') as $landingKey => $landingCfg) {
        Route::get('/' . $landingCfg['slug'], [LandingController::class, 'show'])
            ->defaults('key', $landingKey)
            ->name($name('landing.' . $landingKey));
    }

    Route::get('/categories/{id}', [JobController::class, 'getByCategoryId'])
        ->where('id', '[0-9]+')
        ->name($name('categories.show'));

    Route::get('/empregos', [JobController::class, 'index'])->name($name('jobs.index'));
    Route::get('/empregos/{slug}', [JobController::class, 'getBySlug'])->name($name('jobs.show'));

    Route::get('/{country}/empregos', [JobController::class, 'getByCountry'])
        ->whereIn('country', ['pt', 'es', 'fr', 'eu'])
        ->name($name('jobs.country'));

    Route::get('/jobs', [JobController::class, 'index'])->name($name('jobs.index.alias'));
    Route::get('/jobs/{id}', [JobController::class, 'getById'])
        ->where('id', '[0-9]+')
        ->name($name('jobs.show.byid'));

    Route::get('/pesquisar', [JobController::class, 'search'])->name($name('search'));

    Route::get('/articles', [ArticleController::class, 'index'])->name($name('articles.index'));
    Route::get('/articles/{id}', [ArticleController::class, 'getById'])
        ->where('id', '[0-9]+')
        ->name($name('articles.show.byid'));
    Route::get('/articles/{slug}', [ArticleController::class, 'getBySlug'])->name($name('articles.show'));

    Route::get('/modelos-de-curriculos', [CurriculoController::class, 'index'])->name($name('curriculos.index'));
    Route::get('/modelos-de-curriculos/{slug}', [CurriculoController::class, 'getBySlug'])->name($name('curriculos.show'));
}

registerSiteRoutes();

foreach (SetLocale::SUPPORTED_LOCALES as $locale) {
    Route::prefix($locale)->group(function () use ($locale) {
        registerSiteRoutes($locale);
    });
}

// Ferramentas auxiliares (OCR / quiz / dashboard) - fora do esquema de idiomas acima.
Route::get('/onlineocr', [OcrController::class, 'index'])->name('ocr');
Route::get('/quiz', [OcrController::class, 'indexQuizPt'])->name('quiz');
Route::get('/en/onlineocr', [OcrController::class, 'indexEn'])->name('ocren');
Route::get('/en/dashboard', [OcrController::class, 'indexDashboardEn'])->name('dashboardEn');
Route::get('/dashboard', [OcrController::class, 'indexDashboardPt'])->name('dashboardPt');

// Sitemap: indice + sub-sitemaps paginados (cobre todas as paginas do site)
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemap-pages.xml', [SitemapController::class, 'pages']);
Route::get('/sitemap-categories.xml', [SitemapController::class, 'categories']);
Route::get('/sitemap-jobs-{page}.xml', [SitemapController::class, 'jobs'])->where('page', '[0-9]+');
Route::get('/sitemap-articles-{page}.xml', [SitemapController::class, 'articles'])->where('page', '[0-9]+');
Route::get('/sitemap-curriculos-{page}.xml', [SitemapController::class, 'curriculos'])->where('page', '[0-9]+');

Route::get('/feed', [JobController::class, 'feedGenerator'])->name('feed');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
