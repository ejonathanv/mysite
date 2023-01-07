<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestimonialController;

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

// RUTAS DE SITIO WEB

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('sobre-mi', [SiteController::class, 'about'])->name('about');
Route::get('paginas-web', [SiteController::class, 'websites'])->name('websites');
Route::get('comienza-tu-pagina-web', [SiteController::class, 'start'])->name('start');
Route::get('terminos-y-condiciones', [SiteController::class, 'terms'])->name('terms');
Route::get('proyectos', [SiteController::class, 'projects'])->name('projects');
Route::get('ingresar', [SiteController::class, 'login'])->name('login');
Route::redirect('/login', '/ingresar', 301);

// RUTAS PARA EL FORMULARIO DE CONTACTO
Route::post('contacto', [SiteController::class, 'contact'])->name('contact');

// RUTAS PARA ADMINISTRACION

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('projects', ProjectController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
