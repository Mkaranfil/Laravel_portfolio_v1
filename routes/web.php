<?php

use App\Http\Controllers\NavbarBtnController;
use App\Http\Controllers\NavBarLienController;
use App\Http\Controllers\NavbarTitreController;
use App\Models\NavbarBtn;
use App\Models\NavBarLien;
use App\Models\NavbarTitre;
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
    $navbarLien = NavBarLien::all();
    $navbarTitre = NavbarTitre::all();
    $navbarBtn=NavbarBtn::all();
    return view('front/pages/allFront',compact('navbarLien','navbarTitre','navbarBtn'));
});
Route::get('/backoffice', function () {
    return view('back/pages/allBack');
});

// NavBar
Route::resource('navbarLien',NavBarLienController::class);
Route::resource('navbarTitre',NavbarTitreController::class);
Route::resource('navbarBtn',NavbarBtnController::class);



