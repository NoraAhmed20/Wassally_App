<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\AdminController;


Route::get('/about', function () {return view("about");});
Route::get('/contact', function () {return view("contact");});
Route::get('/Home', function () {return view("Home");});
Route::get('/services', function () {return view("services");});
Route::get('/user', function () { return view("user");});
// Route::get('/orders', function () { return view("orders");});

Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'save'])->name('contact.store');


Route::get('/addOrder', [OrderController::class, 'create']);
Route::post('/storeOrder', [OrderController::class, 'store'])->name('storeOrder');
Route::get('/post', [OrderController::class, 'index'])->name('post');
Route::get('/delete/{id}',[OrderController::class, 'destroy'])->name('delete');
Route::get('/edit/{order}',[OrderController::class, 'edit'])->name('edit');
Route::put('/storeOrder/{order}',[OrderController::class, 'update'])->name('update');
Route::get('/offer/{order}',[OrderController::class, 'show'])->name('offer');
Route::get('allOrders',[OrderController::class, 'allOrders'])->name('allOrders');


Route::post('/addOffer', [OfferController::class, 'store'])->name('addOffer');
Route::get('/delOffer/{id}',[OfferController::class, 'destroy'])->name('delOffer');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("providers",App\Http\Controllers\ProviderController::class);
Route::post('/store_user', [ProviderController::class, 'store_user'])->name('store_user');
Route::post('/store_provider', [ProviderController::class, 'store_provider'])->name('store_provider');
Route::get('/sign_in', function () {return view("login");})->name("sign_in");
Route::get('/registration', function () {return view("register");})->name("registration");
Route::get('/logout', [ProviderController::class, 'logout'])->name("logout");
Route::post("/myLogin",[ProviderController::class, "myLogin"])->name("myLogin");

Route::get('/profile', [ProviderController::class, 'index'])->name('profile');
Route::get('/editProfile/{provider}',[ProviderController::class, 'edit'])->name('editProfile');
Route::put('/profile/{provider}',[ProviderController::class, 'update'])->name('updateProfile');
Route::get('/contactOffer/{provider}', [ProviderController::class, 'show'])->name('contactOffer');

Route::get('/search', [OrderController::class, 'search']);





Route::get('/dashboard', [AdminController::class, 'create'])->name('dashboard');
Route :: get ('/GetUsers',[AdminController::class,'registered']);
Route :: Delete('remove/{user}',[AdminController::class,'destroy_User'])->name("remove");
Route :: get ('/GetProvider',[AdminController::class,'registered_provider']);
Route :: Delete('deleteProvider/{provider}',[AdminController::class,'destroy_provider'])->name('deleteProvider');
Route :: get ('/DelOrder',[AdminController::class,'getorder']);
Route :: Delete('deleteOrder/{order}',[AdminController::class,'Destroy_Order'])-> name("deleteOrder");
Route :: get ('/DelOffer',[AdminController::class,'getoffer']);
Route :: Delete('deleteOffer/{offer}',[AdminController::class,'Delete_Offer'])-> name("deleteOffer");