<?php

use App\Http\Controllers\QrCodeController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/qr-redirect', [QrCodeController::class, 'redirectUser'])->name('qr-redirect');
Route::get('/qr-code', [QRCodeController::class, 'generateQrCode']);
Route::get('/redirect', [QRCodeController::class, 'redirect']);
Route::get('/choose-url', [QRCodeController::class, 'showSelectionList']);
Route::post('/redirect-to-selected-url', [QRCodeController::class, 'redirectToSelectedUrl']);