<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;
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
Route::get('/',function(){
    return view('welcome');
});
// Book 
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
Route::get('books/create',[BookController::class,'create'])->name('products.book.create');
Route::post('/books',[BookController::class,'store'])->name('products.book.store');
Route::get('/books',[BookController::class,'index'])->name('products.book.index');
Route::put('/books/{book}',[BookController::class,'update'])->name('products.book.update');
Route::get('books/{book}/edit',[BookController::class,'edit'])->name('products.book.edit');
Route::delete('/books/{book}',[BookController::class,'destroy'])->name('products.book.delete');

//Cds
Route::get('cds/create',[CdController::class,'create'])->name('products.cd.create');
Route::post('/cds',[CdController::class,'store'])->name('products.cd.store');
Route::get('/cds',[CdController::class,'index'])->name('products.cd.index');
Route::put('/cds/{cd}',[CdController::class,'update'])->name('products.cd.update');
Route::get('cds/{cd}/edit',[CdController::class,'edit'])->name('products.cd.edit');
Route::delete('/cds/{cd}',[CdController::class,'destroy'])->name('products.cd.delete');

//games
Route::get('games/create',[GameController::class,'create'])->name('products.game.create');
Route::post('/games',[GameController::class,'store'])->name('products.game.store');
Route::get('/games',[GameController::class,'index'])->name('products.game.index');
Route::put('/games/{game}',[GameController::class,'update'])->name('products.game.update');
Route::get('games/{game}/edit',[GameController::class,'edit'])->name('products.game.edit');
Route::delete('/games/{game}',[GameController::class,'destroy'])->name('products.game.delete');

});

//Authentication
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search',[App\Http\Controllers\HomeController::class,'search']);
Route::get('/about',function(){
    return view('products.aboutus');
});
