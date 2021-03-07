<?php

use App\Http\Controllers\About1sectionController;
use App\Http\Controllers\About2sectionImageController;
use App\Http\Controllers\About2sectionListeController;
use App\Http\Controllers\Home1tController;
use App\Http\Controllers\Home2tController;
use App\Http\Controllers\Home3tController;
use App\Http\Controllers\NavbarBtnController;
use App\Http\Controllers\NavBarLienController;
use App\Http\Controllers\NavbarTitreController;
use App\Models\About1section;
use App\Models\About2sectionImage;
use App\Models\About2sectionListe;
use App\Models\Home1t;
use App\Models\Home2t;
use App\Models\Home3t;
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
    $homet1=Home1t::all();
    $homet2=Home2t::all();
    $homet3=Home3t::all();
    $about1section=About1section::all();
    $about2sectionListe=About2sectionListe::all();
    $about2sectionImage=About2sectionImage::all();
    return view('front/pages/allFront',compact('navbarLien','navbarTitre','navbarBtn','homet1','homet2','homet3','about1section','about2sectionListe','about2sectionImage',));
});
Route::get('/backoffice', function () {
    $navbarLien = NavBarLien::all();
    $navbarTitre = NavbarTitre::all();
    $navbarBtn=NavbarBtn::all();
    $homet1=Home1t::all();
    $homet2=Home2t::all();
    $homet3=Home3t::all();
    $about1section=About1section::all();
    $about2sectionListe=About2sectionListe::all();
    $about2sectionImage=About2sectionImage::all();
    return view('back/pages/allBack',compact('navbarLien','navbarTitre','navbarBtn','homet1','homet2','homet3','about1section','about2sectionListe','about2sectionImage',));
});

// NavBar
Route::resource('navbarLien',NavBarLienController::class);
Route::post('/delet-all',[NavBarLienController::class,'destroyAll']);
Route::resource('navbarTitre',NavbarTitreController::class);
Route::resource('navbarBtn',NavbarBtnController::class);
Route::resource('homet1',Home1tController::class);
Route::resource('homet2',Home2tController::class);
Route::resource('homet3',Home3tController::class);
Route::resource('about1section',About1sectionController::class);
Route::resource('about2sectionListe',About2sectionListeController::class);
Route::resource('about2sectionImage',About2sectionImageController::class);



