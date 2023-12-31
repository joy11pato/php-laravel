<?php

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

//Route::get('/', 'HomeController@index');
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index']);

/*
Route::get('/test', function(){
    return 'Hola Mundo';
});


Route::get('/test', function(){
    return [
        'saludo' => 'Hola',
        'nombre' => 'Mundo'
    ];
});
*/

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

Route::resource('/expense_reports', \App\Http\Controllers\ExpenseReportController::class);

//Route::get('/expense_reports/{id}/confirmDelete', '\App\Http\Controllers\ExpenseReportController@confirmDelete');

Route::get('/expense_reports/{id}/confirmDelete', [\App\Http\Controllers\ExpenseReportController::class, 'confirmDelete']);

Route::get('/expense_reports/{expense_report}/expenses/create', [\App\Http\Controllers\ExpenseController::class, 'create']);
Route::post('/expense_reports/{expense_report}/expenses', [\App\Http\Controllers\ExpenseController::class, 'store']);