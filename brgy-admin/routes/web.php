<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('login', [
'as' => 'login', 'uses' => 'BrgyController@page']);

$router->post('validation', [
'as' => 'validation', 'uses' => 'BrgyController@verify' ]);

$router->get('dashboard', [
'as' => 'dashboard', 'uses' => 'BrgyController@crud']);

$router->get('history', [
'as' => 'history', 'uses' => 'BrgyController@history']);


$router->post('deleteUser', [
'as' => 'deleteUser', 'uses' => 'BrgyController@deleteUser']);


$router->post('approve', [
'as' => 'approve', 'uses' => 'BrgyController@approve']);

