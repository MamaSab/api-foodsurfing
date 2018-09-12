<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/personnes/',  'PersonneController@index');

//$router->get('foo', 'Photos\AdminController@method');

$router->get('/personnes/{id}/',  'PersonneController@show');

$router->get('/repas',  'RepasController@index');

$router->post('/repas', 'RepasController@store');

$router->get('/themes', 'ThemesController@index');

$router->post('/login', 'LoginController@index');


