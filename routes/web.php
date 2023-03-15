<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the 'web' middleware group. Make something great!
|
*/
// controller
Route::get('/my', [UserController::class, 'test']);
Route::get('/my/{name}', [UserController::class, 'testWithParameter']);
Route::post('/getInput', [UserController::class, 'postRequtest']);

Route::get('/homePage', [UserController::class, 'homePage']);
Route::get('/galleryPage', [UserController::class, 'galleryPage']);
Route::get('/aboutPage', [UserController::class, 'aboutPage']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return 'hi';
});

Route::get('/array', function() {
    return ['name' => 'Saabbir Ahmmed'];
});

Route::get('/postId/{name}', function ($id) {
    return $id;
});

// Route::post('/getInput', function(Request $request) {
//     $newName = $request->all();
//     print_r($newName);
// });

// 2

Route::get('/my_blade_template/{name}', function($name) {
    return view('my_blade_template',[
        'name' => $name,
    ]);
});

// Route::post('/getInput', function(Request $request) {
//     $newName = $request->all();
//     return view('my_blade_template', [
//         'name' => $newName['name'],
//     ]);
// });