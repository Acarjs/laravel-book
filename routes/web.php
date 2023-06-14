<?php

use App\Http\Controllers\Api\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/home','/books/latest');

//2.create route
Route::get('/books/latest', function () {

    //authentication
    $user = auth()->user();
    // dd($user);
    return 'Hello '. $user->name;


    return view('books.latest');
});
