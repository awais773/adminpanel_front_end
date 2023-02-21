<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');

});

Route::get('/email/invitation', [App\Http\Controllers\admin\EmailInvitationController::class, 'index']);
Route::post('/invitation/send', [App\Http\Controllers\admin\EmailInvitationController::class, 'sendInvitation'])->name('send.invite');
Route::post('/verify/otp', [App\Http\Controllers\admin\EmailInvitationController::class, 'otpVerification'])->name('verify.otp');
Route::post('/user/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerUser'])->name('register.user');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\admin\CategoryController::class, 'index']);

Route::get('/addprduct', [App\Http\Controllers\admin\ProductController::class, 'create']);
Route::post('/storePrduct', [App\Http\Controllers\admin\ProductController::class, 'addproduct']);
Route::get('/prductlist', [App\Http\Controllers\admin\ProductController::class, 'show']);

Route::get('/addcategory', [App\Http\Controllers\admin\CategoryController::class, 'create']);
Route::post('/storeCategory', [App\Http\Controllers\admin\CategoryController::class, 'store']);
Route::get('/listCategory', [App\Http\Controllers\admin\CategoryController::class, 'show']);
Route::delete('/destroy/{id}', [App\Http\Controllers\admin\CategoryController::class, 'destroy']);
Route::get('/subcategory', [App\Http\Controllers\admin\CategoryController::class, 'subCategory']);
Route::get('/listsubCategory', [App\Http\Controllers\admin\CategoryController::class, 'listsubCategory']);


Route::get('/adddistribution', [App\Http\Controllers\admin\DistributerController::class, 'create']);
Route::get('/distributionlist', [App\Http\Controllers\admin\DistributerController::class, 'show']);
Route::post('/storedistribution', [App\Http\Controllers\admin\DistributerController::class, 'store']);


Route::get('/suggestion', [App\Http\Controllers\admin\SuggestionController::class, 'store']);
Route::get('/Reported_problems', [App\Http\Controllers\admin\Reported_problemsController::class, 'store']);
Route::get('/Messages', [App\Http\Controllers\admin\MessagesController::class, 'store']);

Route::get('/AddStores', [App\Http\Controllers\admin\StoresController::class, 'store']);
Route::get('/StoresList', [App\Http\Controllers\admin\StoresController::class, 'show']);

Route::get('/Notifications', [App\Http\Controllers\admin\NotificationsController::class, 'store']);

Route::get('/AddAdvertisement', [App\Http\Controllers\admin\AdvertisementController::class, 'store']);
Route::get('/AdvertisementList', [App\Http\Controllers\admin\AdvertisementController::class, 'show']);

Route::get('/Others', [App\Http\Controllers\admin\OthersController::class, 'store']);
Route::get('/Users', [App\Http\Controllers\admin\UsersController::class, 'store']);






Route::post('/invitation/send', [App\Http\Controllers\admin\EmailInvitationController::class, 'sendInvitation'])->name('send.invite');
Route::post('/verify/otp', [App\Http\Controllers\admin\EmailInvitationController::class, 'otpVerification'])->name('verify.otp');

Route::post('/user/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerUser'])->name('register.user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
