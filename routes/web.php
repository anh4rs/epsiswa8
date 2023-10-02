<?php

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
    return view('kelas.list');
});

Route::view('/kelas', 'kelas.list');
Route::view('/kelas/add', 'kelas.add');
Route::get('/kelas/{slug}/edit', function ($slug) {
    return view('kelas.edit', ['slug' => $slug]);
});


// Route::get('/', function () {
//     return view('kelas.list');
// });
// Route::get('/kelas', function () {
//     return view('kelas.list');
// });
// Route::get('/kelas/add', function () {
//     return view('kelas.add');
// });
// Route::get('/guru', function () {
//     return view('guru.list');
// });
// Route::get('/siswa', function () {
//     return view('siswa.list');
// });
// Route::get('/mengajar', function () {
//     return view('mengajar.list');
// });
