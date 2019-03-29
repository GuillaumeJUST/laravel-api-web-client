<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => '/v1',
], function (\Illuminate\Routing\Router $router) {
    $router->get('/', function () {
        return ['API Version 1'];
    });

    $router->post('login', 'Auth\LoginController@loginApi');

    $router->group(['middleware' => 'auth:api'], function ($router) {
        $router->post('logout', 'Auth\LoginController@logoutApi');
    });
});


