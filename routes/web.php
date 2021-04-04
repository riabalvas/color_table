<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SimpleTab;
use App\Http\Controllers\ColorTab;

Route::get('/', function () {
  

  return view('welcome');
});

Route::get('/start_page',  function () {
  

  return view('welcome');
});

Route::get('/simple_tab', [SimpleTab::class,'simple_tab']);

// Route::get('/color_tab', [ ColorTab :: class , 'color_tab' ] );


