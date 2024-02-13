<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingPageController;

use App\Http\Controllers\LocaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::get("/",function(){
    if(Auth()->check()){
        return view('list');
    }else{
 return view('landing');
    }
   
})->name('home');

Route::get('/login', [LandingPageController::class,'login'])->name('login');
Route::post('/register', [Controller::class,'registerUser'])->name('register');
Route::post("/verifyOtp",[Controller::class,'verifyOtp'])->name('verifyOtp');
Route::post('/authUser', [LandingPageController::class,'authUser'])->name('authUser');
Route::get('/logout',[Controller::class,'logOut'])->name('logout');
Route::get('/cook', function(Request $request){
    return view('detail');
})->name('cook');
Route::get('/{locale}', [LocaleController::class,'setLocale'])->name('set.locale');
