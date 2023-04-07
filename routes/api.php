<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;
use function Pest\Laravel\post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(App\Http\Controllers\userController::class)->group(function(){
Route::post('admin/add-users','store');
Route::get('admin/show-users','show');
Route::put('admin/update-users/{id}','update');
});
Route::controller(App\Http\Controllers\coursesController::class)->group(function(){
Route::post('add-courses','store');
Route::get('admin/show-courses','show');
Route::put('admin/update-course/{course}','update');


});
Route::controller(App\Http\Controllers\sessionsController::class)->group(function(){
Route::post('admin/add-sessions','store');
Route::put('admin/update-sessions/{session_id}','update');

});
