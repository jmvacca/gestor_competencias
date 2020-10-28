<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'competencia_deportiva_index' => [[], ['_controller' => 'App\\Controller\\CompetenciaDeportivaController::index'], [], [['text', '/competencia/']], [], []],
    'competencia_deportiva_new' => [[], ['_controller' => 'App\\Controller\\CompetenciaDeportivaController::new'], [], [['text', '/competencia/new']], [], []],
    'competencia_deportiva_show' => [['id'], ['_controller' => 'App\\Controller\\CompetenciaDeportivaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competencia']], [], []],
    'competencia_deportiva_edit' => [['id'], ['_controller' => 'App\\Controller\\CompetenciaDeportivaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/competencia']], [], []],
    'competencia_deportiva_delete' => [['id'], ['_controller' => 'App\\Controller\\CompetenciaDeportivaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/competencia']], [], []],
    'menu' => [[], ['_controller' => 'App\\Controller\\IndexController::menuPrincipal'], [], [['text', '/']], [], []],
    'lugar_de_realizacion_index' => [[], ['_controller' => 'App\\Controller\\LugarDeRealizacionController::index'], [], [['text', '/lugar/']], [], []],
    'lugar_de_realizacion_new' => [[], ['_controller' => 'App\\Controller\\LugarDeRealizacionController::new'], [], [['text', '/lugar/new']], [], []],
    'lugar_de_realizacion_show' => [['id'], ['_controller' => 'App\\Controller\\LugarDeRealizacionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/lugar']], [], []],
    'lugar_de_realizacion_edit' => [['id'], ['_controller' => 'App\\Controller\\LugarDeRealizacionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/lugar']], [], []],
    'lugar_de_realizacion_delete' => [['id'], ['_controller' => 'App\\Controller\\LugarDeRealizacionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/lugar']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
