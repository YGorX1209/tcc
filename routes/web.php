<?php
use App\Http\Controllers\PostagemController;
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
    return view('welcome');
});


Route::get('/postagens' , [PostagemController::class, 'index'])->name('postagens.index');
route::get('/postagens/novo',[postagemcontroller::class, 'create'])->name('postagens.create');