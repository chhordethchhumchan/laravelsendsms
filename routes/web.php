<?php
use Nexmo\Laravel\Facade\Nexmo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    Nexmo::message()->send([
        'to'   => '85581409642',
        'from' => '16105552344',
        'text' => 'Using the facade to send a message.'
    ]);
});
