<?php

/*
|--------------------------------------------------------------------------
| Landings SEO de vagas (paises e cidades/distritos)
|--------------------------------------------------------------------------
|
| Registo central das paginas de aterragem geradas pelo LandingController.
| Cada entrada gera automaticamente: rota, pagina e entrada no sitemap.
|
| country_id: 1 = Portugal, 2 = Espanha, 3 = Franca, 4 = Europa (generico)
| type:       'country' ou 'city'
| province:   (apenas cidades) termo usado para filtrar as vagas pela
|             coluna "province".
|
*/

return [

    // ---- Paises ----
    'espanha' => [
        'slug' => 'vagas-de-emprego-em-espanha',
        'name' => 'Espanha',
        'country_id' => 2,
        'type' => 'country',
        'explore' => '/es/empregos',
    ],
    'franca' => [
        'slug' => 'vagas-de-emprego-em-franca',
        'name' => 'França',
        'country_id' => 3,
        'type' => 'country',
        'explore' => '/fr/empregos',
    ],
    'europa' => [
        'slug' => 'vagas-de-emprego-na-europa',
        'name' => 'Europa',
        'country_id' => 4,
        'type' => 'country',
        'explore' => '/eu/empregos',
    ],

    // Portugal (country_id 1, mercado por omissao) tem uma landing propria e
    // mais completa em '/vagas-de-emprego-em-portugal', servida pela rota
    // dedicada JobController::vagasPortugal (ver routes/web.php).

    // ---- Portugal: distritos e cidades ----
    'lisboa' => [
        'slug' => 'vagas-de-emprego-em-lisboa',
        'name' => 'Lisboa', 'country_id' => 1, 'type' => 'city', 'province' => 'Lisboa', 'explore' => '/pt/empregos',
    ],
    'porto' => [
        'slug' => 'vagas-de-emprego-no-porto',
        'name' => 'Porto', 'country_id' => 1, 'type' => 'city', 'province' => 'Porto', 'explore' => '/pt/empregos',
    ],
    'braga' => [
        'slug' => 'vagas-de-emprego-em-braga',
        'name' => 'Braga', 'country_id' => 1, 'type' => 'city', 'province' => 'Braga', 'explore' => '/pt/empregos',
    ],
    'coimbra' => [
        'slug' => 'vagas-de-emprego-em-coimbra',
        'name' => 'Coimbra', 'country_id' => 1, 'type' => 'city', 'province' => 'Coimbra', 'explore' => '/pt/empregos',
    ],
    'setubal' => [
        'slug' => 'vagas-de-emprego-em-setubal',
        'name' => 'Setúbal', 'country_id' => 1, 'type' => 'city', 'province' => 'Setúbal', 'explore' => '/pt/empregos',
    ],
    'faro' => [
        'slug' => 'vagas-de-emprego-em-faro',
        'name' => 'Faro', 'country_id' => 1, 'type' => 'city', 'province' => 'Faro', 'explore' => '/pt/empregos',
    ],
    'aveiro' => [
        'slug' => 'vagas-de-emprego-em-aveiro',
        'name' => 'Aveiro', 'country_id' => 1, 'type' => 'city', 'province' => 'Aveiro', 'explore' => '/pt/empregos',
    ],
    'leiria' => [
        'slug' => 'vagas-de-emprego-em-leiria',
        'name' => 'Leiria', 'country_id' => 1, 'type' => 'city', 'province' => 'Leiria', 'explore' => '/pt/empregos',
    ],

    // ---- Espanha: comunidades e cidades ----
    'madrid' => [
        'slug' => 'vagas-de-emprego-em-madrid',
        'name' => 'Madrid', 'country_id' => 2, 'type' => 'city', 'province' => 'Madrid', 'explore' => '/es/empregos',
    ],
    'barcelona' => [
        'slug' => 'vagas-de-emprego-em-barcelona',
        'name' => 'Barcelona', 'country_id' => 2, 'type' => 'city', 'province' => 'Barcelona', 'explore' => '/es/empregos',
    ],
    'valencia' => [
        'slug' => 'vagas-de-emprego-em-valencia',
        'name' => 'Valência', 'country_id' => 2, 'type' => 'city', 'province' => 'Valencia', 'explore' => '/es/empregos',
    ],
    'sevilha' => [
        'slug' => 'vagas-de-emprego-em-sevilha',
        'name' => 'Sevilha', 'country_id' => 2, 'type' => 'city', 'province' => 'Sevilla', 'explore' => '/es/empregos',
    ],
    'bilbau' => [
        'slug' => 'vagas-de-emprego-em-bilbau',
        'name' => 'Bilbau', 'country_id' => 2, 'type' => 'city', 'province' => 'Bilbao', 'explore' => '/es/empregos',
    ],
    'malaga' => [
        'slug' => 'vagas-de-emprego-em-malaga',
        'name' => 'Málaga', 'country_id' => 2, 'type' => 'city', 'province' => 'Málaga', 'explore' => '/es/empregos',
    ],

    // ---- Franca: regioes e cidades ----
    'paris' => [
        'slug' => 'vagas-de-emprego-em-paris',
        'name' => 'Paris', 'country_id' => 3, 'type' => 'city', 'province' => 'Paris', 'explore' => '/fr/empregos',
    ],
    'lyon' => [
        'slug' => 'vagas-de-emprego-em-lyon',
        'name' => 'Lyon', 'country_id' => 3, 'type' => 'city', 'province' => 'Lyon', 'explore' => '/fr/empregos',
    ],
    'marselha' => [
        'slug' => 'vagas-de-emprego-em-marselha',
        'name' => 'Marselha', 'country_id' => 3, 'type' => 'city', 'province' => 'Marseille', 'explore' => '/fr/empregos',
    ],
    'toulouse' => [
        'slug' => 'vagas-de-emprego-em-toulouse',
        'name' => 'Toulouse', 'country_id' => 3, 'type' => 'city', 'province' => 'Toulouse', 'explore' => '/fr/empregos',
    ],
    'bordeus' => [
        'slug' => 'vagas-de-emprego-em-bordeus',
        'name' => 'Bordéus', 'country_id' => 3, 'type' => 'city', 'province' => 'Bordeaux', 'explore' => '/fr/empregos',
    ],
    'nantes' => [
        'slug' => 'vagas-de-emprego-em-nantes',
        'name' => 'Nantes', 'country_id' => 3, 'type' => 'city', 'province' => 'Nantes', 'explore' => '/fr/empregos',
    ],

];
