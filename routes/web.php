<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', [StudentController::class, 'get_all_student']);
Route::get('student/create', [StudentController::class, 'create']);
Route::post('student/create',  [StudentController::class, 'store']);

Route::get('student/{id}/student_edit', [StudentController::class, 'get_student_by_id']);
Route::post('student/{id}/student_edit', [StudentController::class, 'edit']);