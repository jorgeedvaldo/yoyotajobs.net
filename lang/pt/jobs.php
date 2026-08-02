<?php

/*
|--------------------------------------------------------------------------
| Traducoes - familia de paginas de vagas/pesquisa
|--------------------------------------------------------------------------
|
| Usado por: LandingController, landing-vagas.blade.php,
| vagas-de-emprego-em-portugal.blade.php, jobs.blade.php, job.blade.php,
| category.blade.php e search.blade.php.
|
*/

return [

    // Textos partilhados entre varias paginas desta familia
    'common' => [
        'filter_label' => 'Filtrar',
        'filter_all' => 'Todos',
        'search_placeholder' => 'Digite a sua pesquisa',
        'search_button' => 'Pesquisar',
        'breadcrumb_home' => 'Início',
        'site_name' => 'YoyotaJobs',
    ],

    // LandingController + landing-vagas.blade.php (landings genericas de pais/cidade)
    'landing' => [
        'meta_title' => 'Vagas de Emprego em :loc',
        'meta_description' => 'Vagas de emprego em :loc atualizadas: oportunidades, estágios, primeiro emprego, recrutamento e trabalho remoto. Encontre e candidate-se gratuitamente na YoyotaJobs.',
        'intro_country' => 'Esta é a página principal de vagas de emprego em :loc. Aqui encontra oportunidades atualizadas em todo o país, com atalhos para vagas de entrada, júnior e estágio, além de buscas amplas como trabalho, recrutamento, jobs, CV e oportunidades remotas.',
        'intro_city' => 'Procura vagas de emprego em :loc? Reunimos as oportunidades de trabalho mais recentes em :loc, incluindo vagas para iniciantes, estágios, primeiro emprego e oportunidades remotas e presenciais. Consulte e candidate-se gratuitamente.',
        'button_explore' => 'Explorar vagas em :loc',
        'button_category' => 'Ver vagas por categoria',
        'button_city' => 'Ver vagas por cidade',

        'section_filters' => 'Filtros recomendados',
        'section_cities' => 'Vagas por cidade e província em :loc',
        'city_pill' => 'Vagas em :city',
        'section_related' => 'Pesquisas relacionadas a vagas de emprego em :loc',
        'section_latest_jobs' => 'Últimos empregos em :loc',
        'no_jobs' => 'De momento não há vagas para mostrar em :loc. Volte em breve ou explore todas as oportunidades.',
        'view_all_button' => 'Ver todas as vagas em :loc',
        'section_faq' => 'Perguntas frequentes sobre vagas de emprego em :loc',

        'schema_item_list_name' => 'Últimas vagas de emprego em :loc',
        'schema_site_description' => 'Site com vagas de emprego em Portugal, Espanha, França e por toda a Europa e oportunidades de recrutamento.',

        'filtro' => [
            'geral_label' => 'Pesquisa geral',
            'geral_title' => 'Vagas de emprego em :loc hoje',
            'junior_label' => 'Nível júnior e primeira experiência',
            'junior_title' => 'Vagas para iniciantes em :loc',
            'sem_experiencia_label' => 'Entrada no mercado de trabalho',
            'sem_experiencia_title' => 'Vagas sem experiência em :loc',
            'estudantes_label' => 'Oportunidades para estudantes',
            'estudantes_title' => 'Estágios em :loc',
            'remoto_label' => 'Trabalho à distância',
            'remoto_title' => 'Vagas remotas em :loc',
            'recrutamento_label' => 'Vagas com processos ativos',
            'recrutamento_title' => 'Recrutamento em :loc',
            'ampla_label' => 'Pesquisa ampla sem filtro',
            'ampla_title' => 'Trabalho em :loc',
            'cv_label' => 'Guia de currículo e candidatura',
            'cv_title' => 'CV para emprego em :loc',
        ],

        'rel' => [
            'emprego' => 'emprego',
            'trabalho' => 'trabalho',
            'recrutamento' => 'recrutamento',
            'jobs' => 'jobs',
            'vagas' => 'vagas',
            'vagas_emprego' => 'vagas de emprego',
            'cv' => 'cv',
            'curriculo' => 'curriculo',
            'vagas_emprego_loc' => 'vagas de emprego em :loc',
            'vaga_emprego_loc' => 'vaga de emprego em :loc',
            'empregos_loc' => 'empregos em :loc',
            'trabalho_loc' => 'trabalho em :loc',
            'oportunidades_trabalho_loc' => 'oportunidades de trabalho em :loc',
            'recrutamento_loc' => 'recrutamento em :loc',
            'empresas_contratam_loc' => 'empresas que contratam em :loc',
            'vagas_abertas_loc' => 'vagas abertas em :loc',
            'vagas_atualizadas_loc' => 'vagas atualizadas em :loc',
            'vagas_iniciantes_loc' => 'vagas para iniciantes em :loc',
            'vagas_sem_experiencia_loc' => 'vagas sem experiencia em :loc',
            'primeiro_emprego_loc' => 'primeiro emprego em :loc',
            'emprego_jovens_loc' => 'emprego para jovens em :loc',
            'vagas_junior_loc' => 'vagas junior em :loc',
            'estagios_loc' => 'estagios em :loc',
            'estagios_remunerados_loc' => 'estagios remunerados em :loc',
            'vagas_part_time_loc' => 'vagas part time em :loc',
            'vagas_tempo_integral_loc' => 'vagas tempo integral em :loc',
            'vagas_remotas_loc' => 'vagas remotas em :loc',
            'trabalho_remoto_loc' => 'trabalho remoto em :loc',
            'vagas_presenciais_loc' => 'vagas presenciais em :loc',
        ],

        'faq' => [
            'q1' => 'Como encontrar vagas de emprego em :loc?',
            'a1' => 'Na YoyotaJobs encontra vagas de emprego em :loc atualizadas regularmente. Pode explorar todas as oportunidades, filtrar por categoria ou pesquisar por cargo e empresa.',
            'q2' => 'As vagas de emprego em :loc são gratuitas?',
            'a2' => 'Sim. Consultar vagas e candidatar-se através da YoyotaJobs é totalmente gratuito. Nunca é pedido qualquer pagamento para se candidatar a uma vaga.',
            'q3' => 'Existem vagas para quem não tem experiência em :loc?',
            'a3' => 'Sim. Publicamos regularmente vagas para iniciantes, primeiro emprego e estágios em :loc, ideais para quem está a entrar no mercado de trabalho.',
            'q4' => 'Há vagas remotas em :loc?',
            'a4' => 'Sim. Além de vagas presenciais, divulgamos oportunidades de trabalho remoto e híbrido que podem ser realizadas a partir de :loc.',
            'q5' => 'Com que frequência as vagas em :loc são atualizadas?',
            'a5' => 'As vagas são atualizadas com frequência. Recomendamos visitar a página regularmente ou instalar a nossa aplicação na Google Play para receber as novidades no telemóvel.',
        ],
    ],

    // vagas-de-emprego-em-portugal.blade.php (landing "rica" de Portugal)
    'pt_landing' => [
        'country_name' => 'Portugal',
        'meta_title' => 'Vagas de Emprego em Portugal',
        'meta_description' => 'Vagas de emprego em Portugal atualizadas: oportunidades em Lisboa, Porto e em todo o país, estágios, primeiro emprego, recrutamento e concursos públicos. Encontre e candidate-se gratuitamente.',
        'schema_page_name' => 'Vagas de Emprego em Portugal - YoyotaJobs',
        'breadcrumb_current' => 'Vagas de Emprego em Portugal',
        'schema_item_list_name' => 'Últimas vagas de emprego em Portugal',
        'schema_site_description' => 'Site com vagas de emprego em Portugal e oportunidades de recrutamento.',

        'hero_intro' => 'Esta é a landing principal para quem pesquisa vagas de emprego em Portugal. Aqui encontra oportunidades atualizadas, links por cidade e categoria, e atalhos para vagas de entrada, júnior e estágio num único ponto de descoberta. Também ligamos para pesquisas amplas como trabalho, recrutamento, jobs, CV e concursos públicos.',
        'button_explore' => 'Explorar vagas em Portugal',
        'button_by_location' => 'Ver vagas por localização',
        'button_by_category' => 'Ver vagas por categoria',

        'section_cities' => 'Vagas por cidade e distrito em Portugal',
        'section_related' => 'Pesquisas relacionadas a vagas de emprego em Portugal',
        'section_latest_jobs' => 'Últimos empregos em Portugal',
        'no_jobs' => 'De momento não há vagas para mostrar. Volte em breve.',
        'view_all_button' => 'Ver todas as vagas em Portugal',
        'section_faq' => 'Perguntas frequentes sobre vagas de emprego em Portugal',

        'filtro' => [
            'f1_label' => 'Pesquisa geral no país',
            'f1_title' => 'Vagas de emprego em Portugal hoje',
            'f2_label' => 'Oportunidades na capital',
            'f2_title' => 'Vagas de emprego em Lisboa',
            'f3_label' => 'Nível júnior e primeira experiência',
            'f3_title' => 'Vagas para iniciantes em Portugal',
            'f4_label' => 'Entrada no mercado de trabalho',
            'f4_title' => 'Vagas sem experiência em Portugal',
            'f5_label' => 'Oportunidades para estudantes',
            'f5_title' => 'Estágios em Portugal',
            'f6_label' => 'Expanda a pesquisa por cidade',
            'f6_title' => 'Vagas no Porto',
            'f7_label' => 'Pesquisa ampla sem filtro de vagas',
            'f7_title' => 'Trabalho em Portugal',
            'f8_label' => 'Vagas com processos ativos',
            'f8_title' => 'Recrutamento em Portugal',
            'f9_label' => 'Setor público e oportunidades relacionadas',
            'f9_title' => 'Concursos públicos em Portugal',
            'f10_label' => 'Guia de currículo e candidatura',
            'f10_title' => 'CV para emprego em Portugal',
        ],

        // Termos exclusivos desta landing (os restantes reutilizam jobs.landing.rel.* com loc=Portugal)
        'rel' => [
            'concursos_publicos' => 'concursos públicos',
            'concursos_publicos_loc' => 'concursos públicos em :loc',
            'portal_empregos_loc' => 'portal de empregos :loc',
            'site_vagas_loc' => 'site de vagas em :loc',
            'anuncios_emprego_loc' => 'anúncios de emprego em :loc',
            'vagas_entry_level_loc' => 'vagas entry level em :loc',
        ],

        'faq' => [
            'q1' => 'Como encontrar vagas de emprego em Portugal?',
            'a1' => 'Na YoyotaJobs encontra vagas de emprego em Portugal atualizadas diariamente. Pode explorar todas as oportunidades na página de vagas de Portugal, filtrar por categoria ou pesquisar por cargo, empresa ou cidade como Lisboa e Porto.',
            'q2' => 'As vagas de emprego em Portugal são gratuitas?',
            'a2' => 'Sim. A consulta de vagas e a candidatura através da YoyotaJobs são totalmente gratuitas. Nunca é pedido qualquer pagamento para se candidatar a uma vaga.',
            'q3' => 'Existem vagas para quem não tem experiência?',
            'a3' => 'Sim. Publicamos regularmente vagas para iniciantes, primeiro emprego, estágios e oportunidades de nível júnior em Portugal, ideais para quem está a entrar no mercado de trabalho.',
            'q4' => 'Onde encontro vagas de emprego em Lisboa?',
            'a4' => 'Lisboa concentra grande parte das oportunidades. Use a pesquisa por cidade para ver as vagas de emprego em Lisboa, ou explore outras cidades como Porto e Braga.',
            'q5' => 'Há estágios e concursos públicos em Portugal?',
            'a5' => 'Sim. Além de vagas de empresas privadas, divulgamos estágios (incluindo estágios remunerados) e informação sobre concursos públicos e recrutamento no setor público em Portugal.',
            'q6' => 'Com que frequência as vagas são atualizadas?',
            'a6' => 'As vagas são atualizadas diariamente. Recomendamos visitar a página com frequência ou instalar a nossa aplicação na Google Play para receber as oportunidades mais recentes no telemóvel.',
        ],
    ],

    // jobs.blade.php (listagem geral de vagas)
    'listing' => [
        'meta_title_default' => 'Vagas de Emprego',
        'meta_description' => 'A YoyotaJobs é uma plataforma que reúne vagas de emprego em Portugal, Espanha, França e por toda a Europa. Encontre a sua próxima oportunidade e candidate-se gratuitamente.',
        'schema_page_name' => 'Vagas de Emprego - YoyotaJobs',
        'schema_breadcrumb_current' => 'Vagas de Emprego',
    ],

    // job.blade.php (detalhe de uma vaga)
    'job' => [
        'published_on' => 'Publicado em:',
        'share_label' => 'Partilhar',
        'previous_job_button' => 'Ver próxima vaga',
        'description_heading' => 'Descrição:',
        'company_label' => 'Empresa:',
        'apply_label' => 'E-mail ou link de candidatura:',
        'whatsapp_intro' => 'Entre no nosso canal do WhatsApp',
        'whatsapp_cta' => 'CLICANDO AQUI',
        'sidebar_latest_jobs' => 'Últimas Oportunidades',
        'sidebar_latest_news' => 'Últimas Notícias',
        'labor_law_heading' => 'Conheça o Código do Trabalho português',
        'labor_law_text' => 'Informe-se sobre os seus direitos e deveres como trabalhador em Portugal. O Código do Trabalho regula as relações laborais no mercado de trabalho português.',
        'labor_law_cta' => 'Consultar o Código do Trabalho',
        'schema_site_description' => 'Vagas de emprego, estágios e oportunidades de recrutamento na Europa.',
    ],

    // category.blade.php (vagas por categoria)
    'category' => [
        'meta_title' => 'Categorias',
        'meta_description' => 'A YoyotaJobs reúne oportunidades de emprego por categoria em Portugal, Espanha, França e em toda a Europa. Encontre a vaga certa para o seu perfil profissional.',
    ],

    // search.blade.php (resultados de pesquisa)
    'search' => [
        'results_heading' => 'Resultados da pesquisa: :query',
    ],

];
