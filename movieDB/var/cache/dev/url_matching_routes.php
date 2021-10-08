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
        '/backoffice/category' => [[['_route' => 'backoffice_category_index', '_controller' => 'App\\Controller\\Backoffice\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/category/new' => [[['_route' => 'backoffice_category_new', '_controller' => 'App\\Controller\\Backoffice\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/character' => [[['_route' => 'backoffice_character_index', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/character/new' => [[['_route' => 'backoffice_character_new', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/episode' => [[['_route' => 'backoffice_episode_index', '_controller' => 'App\\Controller\\Backoffice\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/episode/new' => [[['_route' => 'backoffice_episode_new', '_controller' => 'App\\Controller\\Backoffice\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/season' => [[['_route' => 'backoffice_season_index', '_controller' => 'App\\Controller\\Backoffice\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/season/new' => [[['_route' => 'backoffice_season_new', '_controller' => 'App\\Controller\\Backoffice\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backoffice/tvshow' => [[['_route' => 'backoffice_tv_show_index', '_controller' => 'App\\Controller\\Backoffice\\TvShowController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backoffice/tvshow/new' => [[['_route' => 'backoffice_tv_show_new', '_controller' => 'App\\Controller\\Backoffice\\TvShowController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/character' => [[['_route' => 'character_index', '_controller' => 'App\\Controller\\CharacterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/character/new' => [[['_route' => 'character_new', '_controller' => 'App\\Controller\\CharacterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fake/data/got' => [[['_route' => 'fake_data_got', '_controller' => 'App\\Controller\\FakeMakerController::got'], null, null, null, true, false, null]],
        '/fake/data/mrRobot' => [[['_route' => 'fake_data_robot', '_controller' => 'App\\Controller\\FakeMakerController::mrRobot'], null, null, null, true, false, null]],
        '/fake/data/bob' => [[['_route' => 'fake_data_bob', '_controller' => 'App\\Controller\\FakeMakerController::bob'], null, null, null, true, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'tv_show_index', '_controller' => 'App\\Controller\\TvShowController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'tv_show_new', '_controller' => 'App\\Controller\\TvShowController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                .')'
                .'|/backoffice/(?'
                    .'|c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:172)'
                            .'|/edit(*:185)'
                            .'|(*:193)'
                        .')'
                        .'|haracter/([^/]++)(?'
                            .'|(*:222)'
                            .'|/edit(*:235)'
                            .'|(*:243)'
                        .')'
                    .')'
                    .'|episode/([^/]++)(?'
                        .'|(*:272)'
                        .'|/edit(*:285)'
                        .'|(*:293)'
                    .')'
                    .'|season/([^/]++)(?'
                        .'|(*:320)'
                        .'|/edit(*:333)'
                        .'|(*:341)'
                    .')'
                    .'|tvshow/(?'
                        .'|(\\d+)(*:365)'
                        .'|edit/(\\d+)(*:383)'
                        .'|delete/(\\d+)(*:403)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategory/([^/]++)(?'
                        .'|(*:437)'
                        .'|/edit(*:450)'
                        .'|(*:458)'
                    .')'
                    .'|haracter/([^/]++)(?'
                        .'|(*:487)'
                        .'|/edit(*:500)'
                        .'|(*:508)'
                    .')'
                .')'
                .'|/episode/([^/]++)(?'
                    .'|(*:538)'
                    .'|/edit(*:551)'
                    .'|(*:559)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:587)'
                    .'|/edit(*:600)'
                    .'|(*:608)'
                .')'
                .'|/([^/]++)(?'
                    .'|(*:629)'
                    .'|/edit(*:642)'
                    .'|(*:650)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:687)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        172 => [[['_route' => 'backoffice_category_show', '_controller' => 'App\\Controller\\Backoffice\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'backoffice_category_edit', '_controller' => 'App\\Controller\\Backoffice\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'backoffice_category_delete', '_controller' => 'App\\Controller\\Backoffice\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        222 => [[['_route' => 'backoffice_character_show', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'backoffice_character_edit', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'backoffice_character_delete', '_controller' => 'App\\Controller\\Backoffice\\CharacterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'backoffice_episode_show', '_controller' => 'App\\Controller\\Backoffice\\EpisodeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'backoffice_episode_edit', '_controller' => 'App\\Controller\\Backoffice\\EpisodeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        293 => [[['_route' => 'backoffice_episode_delete', '_controller' => 'App\\Controller\\Backoffice\\EpisodeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'backoffice_season_show', '_controller' => 'App\\Controller\\Backoffice\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'backoffice_season_edit', '_controller' => 'App\\Controller\\Backoffice\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'backoffice_season_delete', '_controller' => 'App\\Controller\\Backoffice\\SeasonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        365 => [[['_route' => 'backoffice_tv_show_show', '_controller' => 'App\\Controller\\Backoffice\\TvShowController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'backoffice_tv_show_edit', '_controller' => 'App\\Controller\\Backoffice\\TvShowController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        403 => [[['_route' => 'backoffice_tv_show_delete', '_controller' => 'App\\Controller\\Backoffice\\TvShowController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        437 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        450 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        458 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        487 => [[['_route' => 'character_show', '_controller' => 'App\\Controller\\CharacterController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        500 => [[['_route' => 'character_edit', '_controller' => 'App\\Controller\\CharacterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        508 => [[['_route' => 'character_delete', '_controller' => 'App\\Controller\\CharacterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        538 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        551 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        559 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => 'tv_show_show', '_controller' => 'App\\Controller\\TvShowController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        642 => [[['_route' => 'tv_show_edit', '_controller' => 'App\\Controller\\TvShowController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        650 => [[['_route' => 'tv_show_delete', '_controller' => 'App\\Controller\\TvShowController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        687 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
