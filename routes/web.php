<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsentiallController;
use App\Http\Controllers\DataController;
/*
|--------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/welcome',[EsentiallController::class, 'welcome']);
Route::get('/about',[EsentiallController::class, 'about']);
Route::get('/contact',[EsentiallController::class, 'contact']);
 Route::get('/create',[EsentiallController::class, 'create']);
Route::get('/edit/{id}',[EsentiallController::class, 'edit']);



 Route::resource('Datas', DataController::class);






// Route::get('/welcome', function () {
// return view('welcome');
//  });

//  Route::get('/store', function () {
    // $filter= request('style');
    // if (isset($filter)){
        // return 'this page is viewing <span style="color:blue">'.$filter.'</span>';
// 
    // }
    // return 'this page is viewing <span style="color:blue">All product</span>';
    //  });
    
     

