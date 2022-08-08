<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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


  

Auth::routes();

  

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {

  

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {

  

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});


Route::resource('utilisateurs','UtilisateurController');
Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Route::get('admin/indexentrant', function () {
//     return view('admin.indexentrant');
// });


Route::get('/admin/indexentrant', [App\Http\Controllers\CourriersEntrantsController::class, 'index'])->name('courrierentrant');


Route::get('/entreprise/create', [App\Http\Controllers\EntreprisesController::class, 'index'])->name('entreprise.Regist');
Route::post('/entreprise', [App\Http\Controllers\EntreprisesController::class, 'store'])->name('entreprise.register');

Route::get('/departement/index', [App\Http\Controllers\DepartementsController::class, 'index'])->name('departement.index');

Route::post('/departement/index', [App\Http\Controllers\DepartementsController::class, 'store'])->name('departement.register');
