<?php

use App\Livewire\BlogDetils;
use App\Livewire\ShowBlog;
use App\Livewire\ShowHome;
use App\Livewire\ShowServiceDetils;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeam;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',ShowHome::class)->name('home');
Route::get('/services',ShowServicePage::class)->name('servicePage');
Route::get('/service/{id}',ShowServiceDetils::class)->name('serviceDetils');
Route::get('/teams',ShowTeam::class)->name('teams');
Route::get('/articles',ShowBlog::class)->name('blog');
Route::get('/blog/{id}',BlogDetils::class)->name('blogDetils');
