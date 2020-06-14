<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/movies/popular', 'MovieController@popular');
$router->get('/tv/popular', 'TvShowController@popular');
