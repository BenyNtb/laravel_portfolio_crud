<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\PortfolioController;
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

//Create
Route::get('/admin/number/create', [FactController::class, 'create'])->name('facts.create');

//Delete
Route::delete('/admin/number/{id}/delete', [FactController::class, 'destroy'])->name('facts.destroy');

//Show
Route::get('/admin/number/{id}', [FactController::class, 'show'])->name('facts.show');

//Edit || Update
Route::get('/admin/number/{id}/edit', [FactController::class, 'edit'])->name('facts.edit');
Route::put('/admin/number/{id}/update', [FactController::class, 'update'])->name('facts.update');

// ------------------------------------------------------------------------------------

// S K I L L S

//Create
Route::get('/admin/competence/create', [SkillController::class, 'create'])->name('skills.create');

//Delete
Route::delete('/admin/competence/{id}/delete', [SkillController::class, 'destroy'])->name('skills.destroy');

//Show
Route::get('/admin/competence/{id}', [SkillController::class, 'show'])->name('skills.show');

//Edit || Update
Route::get('/admin/competence/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit');
Route::put('/admin/competence/{id}/update', [SkillController::class, 'update'])->name('skills.update');


// -----------------------------------------------------------------------------------------------

// P O R T F O L I O

//Create
Route::get('/admin/cards/create', [PortfolioController::class, 'create'])->name('portfolios.create');

//Delete
Route::delete('/admin/cards/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

//Show
Route::get('/admin/cards/{id}', [PortfolioController::class, 'show'])->name('portfolios.show');

//Edit || Update
Route::get('/admin/cards/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
Route::put('/admin/cards/{id}/update', [PortfolioController::class, 'update'])->name('portfolios.update');


// ---------------------------------------------------------------------------------------------------

// S E R V I C E 

//Create
Route::get('/admin/number/create', [FactController::class, 'create'])->name('facts.create');

//Delete
Route::delete('/admin/number/{id}/delete', [FactController::class, 'destroy'])->name('facts.destroy');

//Show
Route::get('/admin/number/{id}', [FactController::class, 'show'])->name('facts.show');

//Edit || Update
Route::get('/admin/number/{id}/edit', [FactController::class, 'edit'])->name('facts.edit');
Route::put('/admin/number/{id}/update', [FactController::class, 'update'])->name('facts.update');