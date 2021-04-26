<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllController;
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


//ABOUT

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