<?php

// Import class Route dari Laravel untuk mendefinisikan routing
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;

//Photo route
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy'
]);

//Basic routing
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/world', function () { return 'World';
});
Route::get('/Home', [HomeController::class,'Home']);
Route::get('/about', [AboutController::class,'about']);
//Route parameters
Route::get('/user/{name}', function ($name) { return 'Paudra Akbar Buana'.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
Route::get('/articles/{id}', [ArticleController::class,'articles']);
//Optional Parameters
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile']);

//Memanggil view
Route::get('/greeting', [WelcomeController::class, 'greeting']);

//Route Products category
Route::prefix('category')->group(function () {
    Route::get('/foodBeverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beautyHealth', [ProductsController::class, 'beautyHealth']);
    Route::get('/homeCare', [ProductsController::class, 'homeCare']);
    Route::get('/babyKid', [ProductsController::class, 'babyKid']);
});
//Route Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);
//Route Name
// Route::get('/user/profile', function () {
//     //
//     })->name('profile');
    
//     Route::get(
//     '/user/profile', [UserProfileController::class, 'show']
//     )->name('profile');
    
//     // Generating URLs...
//     $url = route('profile');
    
//     // Generating Redirects...
//     return redirect()->route('profile');

//-	Route Group dan Route Prefixes
// Route::middleware(['first', 'second'])->group(function () {
//      Route::get('/', function () {
//     // Uses first & second middleware...
//     });
    
//     Route::get('/user/profile', function () {
//     // Uses first & second middleware...
//     });
//     });
    
//     Route::domain('{account}.example.com')->group(function () {
//          Route::get('user/{id}', function ($account, $id) {
//     //
//     });
//     });
    
//     Route::middleware('auth')->group(function () { 
//         Route::get('/user', [UserController::class, 'index']); 
//         Route::get('/post', [PostController::class, 'index']); 
//         Route::get('/event', [EventController::class, 'index']);
//     });

//Route Prefixes
// Route::prefix('admin')->group(function () { 
//     Route::get('/user', [UserController::class, 'index']); 
//     Route::get('/post', [PostController::class, 'index']); 
//     Route::get('/event', [EventController::class, 'index']);

// });
//Redirect Routes
Route::redirect('/here', '/there');
//View Routes
Route::view('/welcome', 'welcome'); 
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// Import ItemController untuk menghubungkan route dengan controller
use App\Http\Controllers\ItemController;

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
// Route untuk halaman utama ('/') yang menampilkan view welcome
Route::get('/', function () {
    return view('welcome'); // Tampilkan halaman welcome
});

// Route resource untuk ItemController
// Ini otomatis membuat route untuk CRUD (Create, Read, Update, Delete) item
Route::resource('items', ItemController::class);