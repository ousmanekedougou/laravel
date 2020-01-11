<?php

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/', 'Auth\RegisterController@comment')->name('comment');
Route::post('/home', 'Auth\RegisterController@user_comment')->name('user_comment');
Route::get('/home-client','HomeController@client')->name('register-client');
Route::get('/home-table','HomeController@table')->name('home-table');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home-demande', 'HomeController@demande')->name('demande');
Route::get('/home-preparer/{id}', 'HomeController@preparer')->name('preparer');
Route::post('/home-reponse','HomeController@reponse')->name('reponse');
Route::put('/patient-carres/{id}','Medecin\HomeController@fixer')->name('fixer');
Route::get('/home-red/{id}','HomeController@notif')->name('notif');

//Authentification medecin
Route::get('/login-medecin', 'Medecin\LoginController@showLoginForm')->name('login-medecin');
Route::post('/login-medecin', 'Medecin\LoginController@login')->name('login-medecin');
Route::post('/logout-medecin', 'Medecin\LoginController@logout')->name('logout-medecin');

//Inscription medecin
Route::get('/register-medecin', 'Medecin\RegisterController@showRegisterForm')->name('register-medecin');
Route::post('/register-medecin', 'Medecin\RegisterController@register')->name('register-medecin');
Route::post('/comment-medecin', 'Medecin\RegisterController@medecin_comment')->name('medecin_comment');

//Specialite


//Page de bureau medecin
Route::get('/home-medecin', 'Medecin\HomeController@index')->name('home-medecin');

// Authentification admin
Route::get('/login-admin', 'Admin\LoginController@showLoginForm')->name('login-admin');
Route::post('/login-admin', 'Admin\LoginController@login')->name('login-admin');
Route::post('/logout-admin', 'Admin\LoginController@logout')->name('logout-admin');

//Inscription admin
Route::get('/register-admin', 'Admin\RegisterController@showRegisterForm')->name('register-admin');
Route::post('/register-admin', 'Admin\RegisterController@register')->name('register-admin');

//Page de bureau admin
Route::get('/home-admin', 'Admin\HomeController@index')->name('home-admin');
Route::post('/home-admin', 'Admin\GestionController@specialite')->name('specialite-medecin');
Route::patch('/home-admin', 'Admin\GestionController@update')->name('spacialite_update');
Route::get('/patient-list-admin', 'Admin\GestionController@patient1')->name('patient1');
Route::get('/patient-carre-admin', 'Admin\GestionController@patient2')->name('patient2');
Route::get('/medecin-list-admin', 'Admin\GestionController@medecin1')->name('medecin1');
Route::get('/medecin-carre-admin', 'Admin\GestionController@medecin2')->name('medecin2');

Route::get('/patient-list-admin', 'Admin\HomeController@patient_list')->name('patient-list');
Route::get('/patient-carre-admin', 'Admin\HomeController@patient_carre')->name('patient-carre');
Route::get('/comment', 'Admin\HomeController@comment')->name('comment_affiche');
Route::get('/medecin-list-admin', 'Admin\HomeController@medecin_list')->name('medecin-list');
Route::get('/medecin-carre-admin', 'Admin\HomeController@medecin_carre')->name('medecin-carre');

//Affichage pour les medecin

Route::get('/patient-liste', 'Medecin\HomeController@patient_list')->name('patient-liste');
Route::get('/patient-carres', 'Medecin\HomeController@patient_carre')->name('patient-carres');

// La partie des editions de admin
Route::get('/edit_admin/{id}','Admin\HomeController@edite')->name("editer_admin");
Route::patch('/auth.{id}/edit_admin', 'Admin\HomeController@update')->name('update_admin');

// La partie des editions de medecin
Route::get('/edit_medecin/{id}','Medecin\RegisterController@edite')->name("editer_medecin");
Route::patch('/auth.{id}/edit_medecin', 'Medecin\RegisterController@update')->name('update_medecin');

// La partie des editions de user
Route::get('/editer_patient/{id}','Auth\RegisterController@editer')->name("editer_patient");
Route::patch('/auth.{id}/editer_patient','Auth\RegisterController@update')->name('update_patient');

// La partie de la suppression
Route::delete('/patient-liste/{id}', 'Medecin\HomeController@delete');
Route::delete('/patient-list-admin/{id}', 'Admin\HomeController@delete');
Route::delete('/medecin-list-admin/{id}', 'Admin\HomeController@sup');
Route::delete('/home-admin/{id}', 'Admin\HomeController@supp');
Route::delete('/home-patient-comment/{id}', 'Admin\HomeController@patient_comment');
Route::delete('/home-medecin-comment/{id}', 'Admin\HomeController@medecin_comment');

//Recuperation des medecins et des patients
Route::get('auth.home-patient', 'Admin\HomeController@patient');
Route::get('auth.home-admin', 'Admin\HomeController@medecin');
