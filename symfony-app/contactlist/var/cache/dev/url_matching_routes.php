<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/app' => [[['_route' => 'app', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'index', '_controller' => 'App\\Controller\\AppController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create', '_controller' => 'App\\Controller\\AppController::create'], null, ['POST' => 0], null, false, false, null],
        ],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\AppController::new'], null, ['GET' => 0], null, false, false, null]],
        '/updatefav' => [[['_route' => 'ajaxupdate', '_controller' => 'App\\Controller\\AppController::ajaxupdate'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/update/([^/]++)(*:58)'
                .'|/edit/([^/]++)(*:79)'
                .'|/([^/]++)(?'
                    .'|(*:98)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'update', '_controller' => 'App\\Controller\\AppController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AppController::edit'], ['id'], ['GET' => 0], null, false, true, null]],
        98 => [
            [['_route' => 'read', '_controller' => 'App\\Controller\\AppController::read'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'delete', '_controller' => 'App\\Controller\\AppController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
