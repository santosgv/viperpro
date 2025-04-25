<?php

use App\Models\Game;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|Sme
*/

Route::get('/{any}', function () {
    return view('layouts.app'); // Certifique-se de que resources/views/app.blade.php existe
})->where('any', '.*');


Route::get('/test', function() {
   $wallet = \App\Models\Wallet::find(1);
   $price = 5;

   \App\Helpers\Core::payBonusVip($wallet, $price);

});
Route::get('clear', function() {
    Artisan::command('clear', function () {
        Artisan::call('optimize:clear');
       return back();
    });

    return back();
});

// GAMES PROVIDER
include_once(__DIR__ . '/groups/provider/venix.php');

// GATEWAYS
include_once(__DIR__ . '/groups/gateways/sharkpay.php');

/// SOCIAL
include_once(__DIR__ . '/groups/auth/social.php');

// APP
include_once(__DIR__ . '/groups/layouts/app.php');

