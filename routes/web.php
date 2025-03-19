<?php

use App\Http\Controllers\DashBoardController;
use Illuminate\Foundation\Console\RouteCacheCommand;
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




Route::group(['prefix' => 'admin'] , function () {
     
    Route::get('/home' , [DashBoardController::class, 'home'])->name("home");
    Route::get('/task' , [DashBoardController::class, 'task_list'])->name("task.list");
});

// Route::get('/task' , function () {
//     return view('pages.tasks');
// });