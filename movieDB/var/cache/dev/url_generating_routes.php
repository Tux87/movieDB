<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'backoffice_category_index' => [[], ['_controller' => 'App\\Controller\\Backoffice\\CategoryController::index'], [], [['text', '/backoffice/category/']], [], []],
    'backoffice_category_new' => [[], ['_controller' => 'App\\Controller\\Backoffice\\CategoryController::new'], [], [['text', '/backoffice/category/new']], [], []],
    'backoffice_category_show' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/category']], [], []],
    'backoffice_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/category']], [], []],
    'backoffice_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/category']], [], []],
    'backoffice_character_index' => [[], ['_controller' => 'App\\Controller\\Backoffice\\CharacterController::index'], [], [['text', '/backoffice/character/']], [], []],
    'backoffice_character_new' => [[], ['_controller' => 'App\\Controller\\Backoffice\\CharacterController::new'], [], [['text', '/backoffice/character/new']], [], []],
    'backoffice_character_show' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CharacterController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/character']], [], []],
    'backoffice_character_edit' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CharacterController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/character']], [], []],
    'backoffice_character_delete' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\CharacterController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/character']], [], []],
    'backoffice_episode_index' => [[], ['_controller' => 'App\\Controller\\Backoffice\\EpisodeController::index'], [], [['text', '/backoffice/episode/']], [], []],
    'backoffice_episode_new' => [[], ['_controller' => 'App\\Controller\\Backoffice\\EpisodeController::new'], [], [['text', '/backoffice/episode/new']], [], []],
    'backoffice_episode_show' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\EpisodeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/episode']], [], []],
    'backoffice_episode_edit' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\EpisodeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/episode']], [], []],
    'backoffice_episode_delete' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\EpisodeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/episode']], [], []],
    'backoffice_season_index' => [[], ['_controller' => 'App\\Controller\\Backoffice\\SeasonController::index'], [], [['text', '/backoffice/season/']], [], []],
    'backoffice_season_new' => [[], ['_controller' => 'App\\Controller\\Backoffice\\SeasonController::new'], [], [['text', '/backoffice/season/new']], [], []],
    'backoffice_season_show' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\SeasonController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/season']], [], []],
    'backoffice_season_edit' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\SeasonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/season']], [], []],
    'backoffice_season_delete' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\SeasonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/backoffice/season']], [], []],
    'backoffice_tv_show_index' => [[], ['_controller' => 'App\\Controller\\Backoffice\\TvShowController::index'], [], [['text', '/backoffice/tvshow/']], [], []],
    'backoffice_tv_show_new' => [[], ['_controller' => 'App\\Controller\\Backoffice\\TvShowController::new'], [], [['text', '/backoffice/tvshow/new']], [], []],
    'backoffice_tv_show_show' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\TvShowController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/tvshow']], [], []],
    'backoffice_tv_show_edit' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\TvShowController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/tvshow/edit']], [], []],
    'backoffice_tv_show_delete' => [['id'], ['_controller' => 'App\\Controller\\Backoffice\\TvShowController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/backoffice/tvshow/delete']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category/']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'character_index' => [[], ['_controller' => 'App\\Controller\\CharacterController::index'], [], [['text', '/character/']], [], []],
    'character_new' => [[], ['_controller' => 'App\\Controller\\CharacterController::new'], [], [['text', '/character/new']], [], []],
    'character_show' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'character_edit' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'character_delete' => [['id'], ['_controller' => 'App\\Controller\\CharacterController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/character']], [], []],
    'episode_index' => [[], ['_controller' => 'App\\Controller\\EpisodeController::index'], [], [['text', '/episode/']], [], []],
    'episode_new' => [[], ['_controller' => 'App\\Controller\\EpisodeController::new'], [], [['text', '/episode/new']], [], []],
    'episode_show' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'episode_edit' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'episode_delete' => [['id'], ['_controller' => 'App\\Controller\\EpisodeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'fake_data_got' => [[], ['_controller' => 'App\\Controller\\FakeMakerController::got'], [], [['text', '/fake/data/got/']], [], []],
    'fake_data_robot' => [[], ['_controller' => 'App\\Controller\\FakeMakerController::mrRobot'], [], [['text', '/fake/data/mrRobot/']], [], []],
    'fake_data_bob' => [[], ['_controller' => 'App\\Controller\\FakeMakerController::bob'], [], [['text', '/fake/data/bob/']], [], []],
    'season_index' => [[], ['_controller' => 'App\\Controller\\SeasonController::index'], [], [['text', '/season/']], [], []],
    'season_new' => [[], ['_controller' => 'App\\Controller\\SeasonController::new'], [], [['text', '/season/new']], [], []],
    'season_show' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'season_edit' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'season_delete' => [['id'], ['_controller' => 'App\\Controller\\SeasonController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/season']], [], []],
    'tv_show_index' => [[], ['_controller' => 'App\\Controller\\TvShowController::index'], [], [['text', '/']], [], []],
    'tv_show_new' => [[], ['_controller' => 'App\\Controller\\TvShowController::new'], [], [['text', '/new']], [], []],
    'tv_show_show' => [['id'], ['_controller' => 'App\\Controller\\TvShowController::show'], [], [['variable', '/', '[^/]++', 'id', true]], [], []],
    'tv_show_edit' => [['id'], ['_controller' => 'App\\Controller\\TvShowController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], []],
    'tv_show_delete' => [['id'], ['_controller' => 'App\\Controller\\TvShowController::delete'], [], [['variable', '/', '[^/]++', 'id', true]], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
