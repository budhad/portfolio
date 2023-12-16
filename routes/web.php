<?php

use App\Http\Controllers\AdvertController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('im');
})->name('im');

Route::get('/inertia', function () {
    return Inertia::render('index', [
        'title' => 'Laravel 10, Inertia.js, Svelte, Tailwind CSS',
    ]);
})->name('inertia');

Route::get('/inertiacontact', function () {
    return Inertia::render('contact', [
        'title' => 'Laravel 10, Inertia.js, Svelte, Tailwind CSS',
    ]);
})->name('inertiacontact');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/adverts', [AdvertController::class, 'index'])->name('adverts');
Route::get('/adverts/{advert}', [AdvertController::class, 'detail'])->name('advert');

// Auth
Auth::routes();

Route::get('/cabinet', [App\Http\Controllers\CabinetController::class, 'index'])->name('cabinet');


Route::get('/cabinet/add', [App\Http\Controllers\CabinetController::class, 'showAddAdvertForm'])->name('advert.add');
Route::post('/cabinet', [App\Http\Controllers\CabinetController::class, 'storeAdvert'])->name('advert.store');

Route::get('/cabinet/{ad}/edit', [App\Http\Controllers\CabinetController::class, 'showEditAdvertForm'])
->name('advert.edit')
->middleware('can:update,ad');

Route::patch('/cabinet/{ad}', [App\Http\Controllers\CabinetController::class, 'updateAdvert'])
->name('advert.update')
->middleware('can:update,ad');

Route::get('/cabinet/{ad}/delete', [App\Http\Controllers\CabinetController::class, 'showDeleteAdvertForm'])
->name('advert.delete')
->middleware('can:destroy,ad');

Route::delete('/cabinet/{ad}', [App\Http\Controllers\CabinetController::class, 'destroyAdvert'])
->name('advert.destroy')
->middleware('can:destroy,ad');
