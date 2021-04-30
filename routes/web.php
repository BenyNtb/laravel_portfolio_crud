<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
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

// Route::get('/', function(){
//     return view('home');
// })->name('home');

// all controller 
Route::get('/', [AllController::class, 'index'])->name('home');

//ADMIN


//BACKEND
Route::get('/admin/index', function(){
    return view('admin.index');
})->name('admin');


// A B O U T

//read
Route::get('admin/presentation', [AboutController::class, 'index'])->name('abouts.index');

//Create
Route::get('/admin/presentation/create', [AboutController::class, 'create'])->name('abouts.create');
Route::post('/admin/presentation/store', [AboutController::class, 'store'])->name('abouts.store');

//Store
Route::post('/admin/presentation/store', [AboutController::class, 'store'])->name('abouts.store');

//Delete
Route::delete('/admin/presentation/{id}/delete', [AboutController::class, 'destroy'])->name('abouts.destroy');

//Show
Route::get('/admin/presentation/{id}', [AboutController::class, 'show'])->name('abouts.show');

//Edit || Update
Route::get('/admin/presentation/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
Route::put('/admin/presentation/{id}/update', [AboutController::class, 'update'])->name('abouts.update');
// --------------------------------------------------------------------------

// F A C T

//read
Route::get('admin/facts', [FactController::class, 'index'])->name('facts.index');

//Create
Route::get('/admin/facts/create', [FactController::class, 'create'])->name('facts.create');
Route::post('/admin/facts/store', [FactController::class, 'store'])->name('facts.store');

//Delete
Route::delete('/admin/facts/{id}/delete', [FactController::class, 'destroy'])->name('facts.destroy');

//Show
Route::get('/admin/facts/{id}', [FactController::class, 'show'])->name('facts.show');

//Edit || Update
Route::get('/admin/facts/{id}/edit', [FactController::class, 'edit'])->name('facts.edit');
Route::put('/admin/facts/{id}/update', [FactController::class, 'update'])->name('facts.update');

// ------------------------------------------------------------------------------------

// S K I L L S

//read
Route::get('admin/skills', [SkillController::class, 'index'])->name('skills.index');

//Create
Route::get('/admin/competence/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/admin/competence/store', [SkillController::class, 'store'])->name('skills.store');

//Delete
Route::delete('/admin/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skills.destroy');

//Show
Route::get('/admin/skills/{id}', [SkillController::class, 'show'])->name('skills.show');

//Edit || Update
Route::get('/admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::put('/admin/skills/{id}/update', [SkillController::class, 'update'])->name('skills.update');


// -----------------------------------------------------------------------------------------------

// P O R T F O L I O

//read
Route::get('admin/cards', [PortfolioController::class, 'index'])->name('portfolios.index');

//Create
Route::get('/admin/cards/create', [PortfolioController::class, 'create'])->name('portfolios.create');
Route::post('/admin/cards/store', [PortfolioController::class, 'store'])->name('portfolios.store');

//Delete
Route::delete('/admin/cards/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

//Show
Route::get('/admin/cards/{id}', [PortfolioController::class, 'show'])->name('portfolios.show');

//Edit || Update
Route::get('/admin/cards/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
Route::put('/admin/cards/{id}/update', [PortfolioController::class, 'update'])->name('portfolios.update');


// ---------------------------------------------------------------------------------------------------

// S E R V I C E 

//read
Route::get('/admin/service', [ServiceController::class, 'index'])->name('services.index');

//Create
Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('services.store');

//Delete
Route::delete('/admin/service/{id}/delete', [ServiceController::class, 'destroy'])->name('services.destroy');

//Show
Route::get('/admin/service/{id}', [ServiceController::class, 'show'])->name('services.show');

//Edit || Update
Route::get('/admin/service/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/admin/service/{id}/update', [ServiceController::class, 'update'])->name('services.update');