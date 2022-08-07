<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::redirect('/', '/books');
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
//Route::resource('books', BookController::class)->middleware(['auth']);

//Route::resource('books', BookController::class);

Route::get('books/create', [BookController::class, 'create'])->name('books.create')->middleware(['auth']);

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/{book}', [BookController::class, 'show'])->name('books.show');

Route::post('books', [BookController::class, 'store'])->name('books.store')->middleware(['auth']);
Route::match(['put', 'patch'],'books/{book}', [BookController::class, 'update'])->name('books.update')->middleware(['auth']);
Route::delete('books', [BookController::class, 'destroy'])->name('books.destroy')->middleware(['auth']);
Route::get('books/{book}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware(['auth']);

require __DIR__.'/auth.php';
