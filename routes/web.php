<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\TypeController;

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

Route::get('/', function () {
    return view('site.home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Categorias dos Immóveis
    Route::get('/categorias',[CategoryController::class,'index'])->name('category.index');
    Route::get('/categorias/cadastrar',[CategoryController::class,'create'])->name('category.create');
    Route::post('/categorias/cadastrar',[CategoryController::class,'store'])->name('category.store');
    Route::get('/categorias/editar/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('/categorias/atualizar/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('/categorias/apagar/{id}',[CategoryController::class,'destroy'])->name('category.delete');

    //Administração dos Imóveis
    Route::get('/imoveis',[PropertyController::class,'index'])->name('imoveis.index');
    Route::get('/imoveis/cadastrar',[PropertyController::class,'create'])->name('imoveis.create');
    Route::post('/imoveis/cadastrar',[PropertyController::class,'store'])->name('imoveis.store');
    Route::get('/imoveis/editar/{id}',[PropertyController::class,'edit'])->name('imoveis.edit');
    Route::put('/imoveis/atualizar/{id}',[PropertyController::class,'update'])->name('imoveis.update');
    Route::delete('/imoveis/apagar/{id}',[PropertyController::class,'destroy'])->name('imoveis.delete');
    //Tipos de Imóveis
    Route::get('/imoveis/tipo',[TypeController::class,'index'])->name('imoveis.type.index');
    Route::get('/imoveis/tipo/cadastrar',[TypeController::class,'create'])->name('imoveis.type.create');
    Route::post('/imoveis/tipo/cadastrar',[TypeController::class,'store'])->name('imoveis.type.store');
    Route::get('/imoveis/tipo/editar/{id}',[TypeController::class,'edit'])->name('imoveis.type.edit');
    Route::put('/imoveis/tipo/atualizar/{id}',[TypeController::class,'update'])->name('imoveis.type.update');
    Route::delete('/imoveis/tipo/apagar/{id}',[TypeController::class,'destroy'])->name('imoveis.type.delete');
});

require __DIR__.'/auth.php';
