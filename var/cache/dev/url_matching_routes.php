<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/competencias' => [[['_route' => 'competencia_deportiva_index', '_controller' => 'App\\Controller\\CompetenciaDeportivaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competencias/nueva' => [[['_route' => 'competencia_deportiva_new', '_controller' => 'App\\Controller\\CompetenciaDeportivaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/disponibilidad' => [[['_route' => 'disponibilidad_index', '_controller' => 'App\\Controller\\DisponibilidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/disponibilidad/new' => [[['_route' => 'disponibilidad_new', '_controller' => 'App\\Controller\\DisponibilidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\IndexController::menuPrincipal'], null, null, null, false, false, null]],
        '/lugar' => [[['_route' => 'lugar_de_realizacion_index', '_controller' => 'App\\Controller\\LugarDeRealizacionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lugar/new' => [[['_route' => 'lugar_de_realizacion_new', '_controller' => 'App\\Controller\\LugarDeRealizacionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participantes' => [[['_route' => 'participante_index', '_controller' => 'App\\Controller\\ParticipanteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participantes/new' => [[['_route' => 'participante_new', '_controller' => 'App\\Controller\\ParticipanteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/competencias/([^/]++)(?'
                    .'|(*:194)'
                    .'|/edit(*:207)'
                    .'|(*:215)'
                .')'
                .'|/disponibilidad/([^/]++)(?'
                    .'|(*:251)'
                    .'|/edit(*:264)'
                    .'|(*:272)'
                .')'
                .'|/lugar/([^/]++)(?'
                    .'|(*:299)'
                    .'|/edit(*:312)'
                    .'|(*:320)'
                .')'
                .'|/participantes/([^/]++)(?'
                    .'|(*:355)'
                    .'|/edit(*:368)'
                    .'|(*:376)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'competencia_deportiva_show', '_controller' => 'App\\Controller\\CompetenciaDeportivaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        207 => [[['_route' => 'competencia_deportiva_edit', '_controller' => 'App\\Controller\\CompetenciaDeportivaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        215 => [[['_route' => 'competencia_deportiva_delete', '_controller' => 'App\\Controller\\CompetenciaDeportivaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'disponibilidad_show', '_controller' => 'App\\Controller\\DisponibilidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'disponibilidad_edit', '_controller' => 'App\\Controller\\DisponibilidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'disponibilidad_delete', '_controller' => 'App\\Controller\\DisponibilidadController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'lugar_de_realizacion_show', '_controller' => 'App\\Controller\\LugarDeRealizacionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'lugar_de_realizacion_edit', '_controller' => 'App\\Controller\\LugarDeRealizacionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'lugar_de_realizacion_delete', '_controller' => 'App\\Controller\\LugarDeRealizacionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        355 => [[['_route' => 'participante_show', '_controller' => 'App\\Controller\\ParticipanteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        368 => [[['_route' => 'participante_edit', '_controller' => 'App\\Controller\\ParticipanteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        376 => [
            [['_route' => 'participante_delete', '_controller' => 'App\\Controller\\ParticipanteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
