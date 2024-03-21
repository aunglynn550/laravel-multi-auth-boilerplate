<?php 
use App\Http\Controllers\Instructor\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'instructor' , 'as' => 'instructor.'], function(){
  
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});
