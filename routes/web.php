<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SimpleTab;
use App\Http\Controllers\ColorTab;
use App\Http\Controllers\Answer;
use App\Http\Controllers\Work_form;

Route::get('/', function () {
  

  return view('welcome',['print_form' => "false"]);
});

Route::get('/start_page',  function () {
  

  return view('welcome',['print_form' => "false"]);
});

Route::get('/simple_tab', [SimpleTab::class,'simple_tab']);

Route::get('/color_tab', [ ColorTab :: class , 'color_tab' ] );
Route::get('/form', [ Answer :: class , 'answer' ] );
Route::post('/submit', [ Work_form :: class , 'work' ] );


