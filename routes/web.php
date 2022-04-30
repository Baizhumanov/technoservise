<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SectionController;
use App\Models\News;
use App\Models\Section;
use App\Models\Author;
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
    return view('main', ['items' => News::all(), 'sections' => Section::all()]);
})->name('news');

Route::get('/manage-news/', function () {
    return view('manage_news', ['authors' => Author::all(), 'sections' => Section::all()]);
});

Route::get('/task', function () {
    return view('task');
});

Route::get('/news/{id}', [NewsController::class, 'news']);

Route::post('/author', [AuthorController::class, 'store']);
Route::post('/section', [SectionController::class, 'store']);
Route::post('/news', [NewsController::class, 'store']);
