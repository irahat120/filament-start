<?php

use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetils;
use App\Livewire\ShowServicePage;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}',ShowServiceDetils::class)->name('serviceDetils');
