<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;


//1. we create a api controller with the command "php artisan make:controller Api/BookController"
//then we go to api.php in routes
class BookController extends Controller
{
//     public function example ()
//     {
// //         return [
// //     'The Shawshank redemption',
// //     'The Godfather',
// //     'The Godfather II',
// //     'Dark Knight', 
// //     '12 angry men', 
// //     'Schindler\'s list',
// //     'Pulp fiction',
// //     'Lord of the Rings: Return of the King',
// //     'The good, the bad and the ugly',
// //     'Fight club'
// // ];

//     return Book::orderBy('title')->limit(2)->get(); //from book table


//     // return [
//     //     'status' => 'success'
//     // ];

//     }


    //1. set your function here and then go to view.php create route
    public function latest()
    {
        return Book::orderBy('publication_data', 'DESC')->limit(5)->get();
    }

}
