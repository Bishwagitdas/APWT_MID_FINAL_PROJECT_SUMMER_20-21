<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogviewController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\BlogcreateController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\QuestiondetailsController;
use App\Http\Controllers\AppointmentdetailsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/blogcreate', function () {
//     return view('doctor.blogcreate');
// });


Route::get("/login", [LoginController::class,'login']);
 Route::post("/login", [LoginController::class,'verify']);

Route::get("/signup", [SignupController::class,'signup']);
Route::post("/signup", [SignupController::class,'store']);

Route::get('/logout', [LogoutController::class,'index']);

Route::group(['middleware'=> 'SessVfy'], function(){
    Route::get("/index", [IndexController::class,'viewIndex']);

    Route::get("/profile", [ProfileController::class,'viewProfile'])->middleware('SessVfy');
    Route::post("/profile", [ProfileController::class,'upProfile'])->middleware('SessVfy');
    Route::get("/blogs", [BlogController::class,'viewBlog']);
    Route::get("/blogcreate", [BlogcreateController::class,'blogcreate']);
    Route::post("/blogcreate", [BlogcreateController::class,'store']);
    Route::get("/blogview", [BlogviewController::class,'viewBlogview']);
    Route::get("/appointment", [AppointmentController::class,'viewAppointment']);
    Route::get("/appointmentdetails", [AppointmentdetailsController::class,'viewAppointmentdetails']);
    Route::get("/question", [QuestionController::class,'viewQuestion']);
    Route::get("/questiondetails", [QuestiondetailsController::class,'viewQuestiondetails']);
    Route::post("/questiondetails", [QuestiondetailsController::class,'store']);
    Route::get("/commentcreate", [CommentController::class,'viewComment']);
    Route::post("/commentcreate", [CommentController::class,'store']);
    Route::get("/wallet", [WalletController::class,'viewWallet']);

});




