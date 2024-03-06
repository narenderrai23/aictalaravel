<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BranchController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/student-zone', function () {
    return view('student-zone');
});

// Route::get('/{id}', function (string $id) {
//     // return ;
//     dd($id);
// });

Route::get('/branch/{id}', [BranchController::class, 'index']);


Route::post('/get-student-details', [StudentController::class, 'getStudentDetails']);
