<?php

use App\Livewire\Dashboard;
use App\Livewire\Data;
use App\Livewire\Home;
use App\Livewire\Mahasiswa\CreateMahasiswa;
use App\Livewire\Mahasiswa\EditMahasiswa;
use App\Livewire\Mahasiswa\ListMahasiswa;
use App\Livewire\ShowMahasiswa;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/OneToMany', ShowMahasiswa::class);
Route::get('/ManyToMany', Data::class);