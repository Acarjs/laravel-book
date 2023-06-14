<!-- Create a new file /routes/admin.php

In /app/Providers/RouteServiceProvider.php in the boot() method, there is a statement that imports the api.php file and a statement that imports the web.php file (find it!).

Somewhere among them, add also a similar statement to import the admin.php file:

    Route::middleware('web')
    ->group(base_path('routes/admin.php')); 

with this we are able to use admin.php instead of web.php
-->



<?php

use App\Http\Controllers\Admin\AuthorController;
use Illuminate\Support\Facades\Route;


//3.step of Book CRUD
Route::get('/admin/authors',[AuthorController::class,'index'])->name('authors.index'); 

Route::get('/admin/authors/create',[AuthorController::class,'create'])->name('authors.create'); //name is used for route()

Route::post('admin/authors',[AuthorController::class,'store'])->name('authors.store');

Route::get('/admin/{id}/show',[AuthorController::class,'show'])->name('authors.show');

Route::get('admin/authors/{id}/edit',[AuthorController::class,'edit'])->name('authors.edit');

Route::put('admin/authors/{id}',[AuthorController::class,'update'])->name('authors.update');

