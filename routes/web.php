<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/movies/popular', 'MovieController@popular');
$router->get('/tv/popular', 'TvShowController@popular');
$router->get('/movies/upcoming', 'MovieController@upcoming');
$router->get('/movies/{movie_id}/videos', 'MovieController@videos');
$router->get('/movies/trending/{time_window}', 'MovieController@trending');
$router->get('/tv/trending/{time_window}', 'TvShowController@trending');
