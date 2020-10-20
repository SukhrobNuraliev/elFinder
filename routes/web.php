<?php

use App\Http\Controllers\FolderController;
use App\Http\Controllers\MainPage;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\FileController;
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

Route::get('/', [ShelfController::class, 'index'])->name('shelf.index');

Route::get('/boxes/{box}', [BoxController::class, 'show'])->name('box.show');
Route::post('/boxes', [FolderController::class, 'store'])->name('folder.store');

Route::get('/boxes/{box}/folders/{folder}', [FolderController::class, 'show'])->name('folder.show');
Route::get('/boxes/{box}/folders/{folder}/file/create', [FileController::class, 'create'])->name('file.create');
Route::post('/boxes/{box}/folders/', [FileController::class, 'store'])->name('file.store');

Route::get('/boxes/{box}/folders/{folder}/files/{file}', [FileController::class, 'show'])->name('file.show');

Route::get('/folders/create', [FolderController::class, 'create'])->name('folder.create');
Route::post('/folders', [FolderController::class, 'newStore'])->name('newFolder.store');

Route::get('/files/create', [FileController::class, 'create'])->name('newFile.create');
Route::post('/files', [FileController::class, 'newStore'])->name('newFile.store');

Route::get('/search', [FolderController::class, 'search'])->name('search');
Route::post('/search', [FolderController::class, 'search'])->name('search');

Route::post('/', [FolderController::class, 'search'])->name('search');

Route::get('/box/folder/create', [FolderController::class, 'create'])->name('folder.create');
