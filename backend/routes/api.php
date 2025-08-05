<?php

use App\Http\Controllers\MosqueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix'=> 'mosque', 'as' =>  'mosque.'],function(){
    Route::post('/',[MosqueController::class, 'index'])->name('view');
    Route::get( 'create',[MosqueController::class,'create'])->name('create');
    Route::post('store',[MosqueController::class,'store'])->name('store');
    Route::get('/backend', [MosqueController::class,'backend']);
    
});