<?php
use App\Http\Controllers\QueryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\ServiceRequestController;
Route::get('/', function () {
    return view('ddd');
});
Route::get('/request-support', [ServiceRequestController::class, 'create']);
Route::post('/request-support', [ServiceRequestController::class, 'store']);
Route::get('/receive', [ServiceRequestController::class, 'receive']);
Route::get('/action', [ServiceRequestController::class, 'action']);
Route::get('/handing', [ServiceRequestController::class, 'handing']);
Route::get('/query-requests', [QueryController::class , 'queryRequests']);
Route::get('/evaluation', [ServiceRequestController::class, 'evaluation']);
Route::get('/SpareParts', [ServiceRequestController::class , 'SpareParts']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
