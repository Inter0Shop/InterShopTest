<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/sidemenu', [MainController::class, 'side']);

/*Route:prefix('shop')->group( function ()) {

}
*/
