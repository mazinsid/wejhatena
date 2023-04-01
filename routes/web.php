<?php


use App\Http\Controllers\adsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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












Route::get('language/{locale}', [HomeController::class, 'language'])->name('language-web');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('filter', [HomeController::class, 'filter'])->name('home.filter');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/ad_details/{id}', [adsController::class, 'adsDetails'])->name('ads.details');
    Route::get('/ads_post', [adsController::class, 'create'])->name('ads.post');
    Route::match(['get', 'post'], '/step_one', [adsController::class, 'stepOne'])->name('ads.stepOne');
    Route::match(['get', 'post'], '/step-two', [adsController::class, 'stepTwo'])->name('ads.stepTwo');
    Route::match(['get', 'post'], '/step-three', [adsController::class, 'stepThree'])->name('ads.stepThree');

    Route::match(['get', 'post'], 'confirm', [adsController::class, 'confirm'])->name('ads.confirm');
    Route::get('payment', [adsController::class, 'payment'])->name('payment.index');

    //

    Route::get('/rooms/{id}', [RoomController::class, 'getUserRooms'])->name('getUserRooms');

    Route::get('/room/messages/{id}', [RoomController::class, 'messages'])->name('room.messages');

    Route::get('/ads/{id}/message', [MessagesController::class, 'adsMessage'])->name('ads.message');

    Route::post('/add/message', [MessagesController::class, 'storeMessage'])->name('add.message');
    Route::get('/message/room/{id}', [MessagesController::class, 'messageRoom']);
});




Route::get('/ad_list', [adsController::class, 'adsList'])->name('ads.list');

//ajax

Route::get('/ads/{id}/getCities', [adsController::class, 'getCities']);

require __DIR__ . '/auth.php';
