<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',[JobController::class,'index']);
Route::get('/jobs/create',[JobController::class,'create'])->middleware('auth');
Route::get('/jobs/{job}',[JobController::class,'show']);
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');


Route::get('/search',SearchController::class);
Route::get('/tags/{tag:name}',TagController::class); //default laravel take tag as id so if it is else then write with it
Route::get('/employerInfo/{user_id}',function($user_id){
    return view('auth.employerInfo',compact('user_id'));
})->name('employer.info');
Route::post('/employerInfo',function(Request $request){
    dd($request->university);
});

Route::get('/jobSeekerInfo/{user_id}',function($user_id){
    return view('auth.jobSeekerInfo',compact('user_id'));
})->name('jobseeker.info');
Route::post('/jobSeekerInfo',function(Request $request){
    dd($request);
});


Route::middleware('guest')->group(function(){
    Route::get('/register',[RegisteredUserController::class,'create']);
    Route::post('/register',[RegisteredUserController::class,'store']);

    Route::get('/login',[SessionController::class,'create']);
    Route::post('/login',[SessionController::class,'store']);

});
//Route::get('/employerInfo',[RegisteredUserController::class,'append']);
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');
