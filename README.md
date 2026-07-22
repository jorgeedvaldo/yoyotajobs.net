# YoyotaJobs

Portal de emprego multilingue (Português, English, Français, Español) para
Portugal, Espanha, França e restante Europa. Baseado na plataforma
[empregosyoyota.net](https://empregosyoyota.net), adaptado para o mercado
europeu.

## Idiomas

- `pt` — Português (idioma por omissão, sem prefixo na URL: `/empregos`)
- `en` — English (`/en/empregos`)
- `fr` — Français (`/fr/empregos`)
- `es` — Español (`/es/empregos`)

O idioma é detetado a partir do prefixo da URL pelo middleware
`App\Http\Middleware\SetLocale`. Os textos da interface estão em
`lang/{locale}/*.php`. Use os helpers `lurl()`, `lroute()` e
`locale_switch_url()` (definidos em `app/helpers.php`) para gerar ligações
internas que respeitem o idioma atual.

## Stack

- Laravel 9 (PHP 8.0+)
- Filament 2 (painel de administração)
- MySQL
- Vite + Bootstrap 5

## Configuração local

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run build
php artisan serve
```

O seeder cria os países base (`Portugal`, `Espanha`, `França`, `Europa`) com
os IDs assumidos em `JobController`, `LandingController` e
`config/landings.php` (1 = Portugal, 2 = Espanha, 3 = França, 4 = Europa).

Defina `GA4_MEASUREMENT_ID` e `ADSENSE_CLIENT_ID` no `.env` com as
credenciais próprias do yoyotajobs.net (não reutilizar as do
empregosyoyota.net).
