<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index']);

Route::get('/imageupload', [MainController::class, 'imageupload']);

Route::post('/imageupload/{qty}', [MainController::class, 'imageuploadpost'])->name('uploadimg');

Route::get('/information', [MainController::class, 'information']);

Route::post('/information/{qty}/{uuid}', [MainController::class, 'orderinfordet'])->name('orderinfo');

Route::get('/paymentsuccess', [MainController::class, 'paymentsuccess']);

Route::get('/relation/contactus', [MainController::class, 'contactus']);

Route::get('/relation/refund&cancellation', [MainController::class, 'refundcan']);

Route::get('/relation/privacypolicy', [MainController::class, 'privacypol']);

Route::get('/relation/terms-and-condition', [MainController::class, 'termsandcon']);








