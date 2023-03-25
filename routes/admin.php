<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adsController as AdminAdsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ExternalAdsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubscriptionsController;

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

Route::prefix("admin")->group(function () {
    /**
     * Home Routes
     */
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');


    /**
     * Logout Routes
     */
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout.perform');
    // Route::get('/logout', 'LogoutController@perform');

    /**
     * User Routes
     */

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UsersController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/show', [UsersController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}/update', [UsersController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}/delete', [UsersController::class, 'destroy'])->name('users.destroy');


    /**
     * User Routes
     */
    Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::post('/posts/create', [PostsController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/show', [PostsController::class, 'show'])->name('posts.show');
    Route::get('/posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{post}/update', [PostsController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}/delete', [PostsController::class, 'destroy'])->name('posts.destroy');


    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);

    // dashboard


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/category', [CategoriesController::class, 'index'])->name('category');
    Route::post('/category_store', [CategoriesController::class, 'store'])->name('store_category');
    Route::post('/category_update', [CategoriesController::class, 'update'])->name('update_category');

    Route::get('/ads', [AdminAdsController::class, 'index'])->name('admin.ads');




    Route::get('/subcategory/{id}', [CategoriesController::class, 'subcategory'])->name('subcategory');
    Route::post('/subcategory_store', [CategoriesController::class, 'storeSubcategory'])->name('store_subcategory');
    Route::post('/subcategory_update', [CategoriesController::class, 'updateSubcategory'])->name('update_subcategory');

    Route::get('/ads_type', [CategoriesController::class, 'adsType'])->name('ads_type');
    Route::post('/ads_type_store', [CategoriesController::class, 'storeType'])->name('store_ads_type');
    Route::put('/ads_type_store', [CategoriesController::class, 'updateType'])->name('update_ads_type');

    Route::get('/country', [CategoriesController::class, 'country'])->name('country');
    Route::post('/country_store', [CategoriesController::class, 'storeCountry'])->name('store_country');
    Route::put('/country_update', [CategoriesController::class, 'updateCountry'])->name('update_country');

    Route::get('/city/{id}', [CategoriesController::class, 'city'])->name('city');
    Route::post('/city_store', [CategoriesController::class, 'storeCity'])->name('store_city');
    Route::put('/city_update', [CategoriesController::class, 'updateCity'])->name('update_city');

    Route::get('/external', [ExternalAdsController::class, 'external'])->name('external');
    Route::post('/external_store', [ExternalAdsController::class, 'externalStore'])->name('store_external');
    Route::put('/external_update', [ExternalAdsController::class, 'externalUpdate'])->name('update_external');

    Route::get('/news_ads', [ExternalAdsController::class, 'newsAds'])->name('news_ads');
    Route::post('/news_ads_store', [ExternalAdsController::class, 'newsAdsStore'])->name('store_news_ads');
    Route::put('/news_ads_update', [ExternalAdsController::class, 'newsAdsUpdate'])->name('update_news_ads');

    Route::get('/subscription', [SubscriptionsController::class, 'index'])->name('subscription');
    Route::post('/subscription_store', [SubscriptionsController::class, 'store'])->name('store_subscription');
    Route::put('/subscription_update', [SubscriptionsController::class, 'update'])->name('update_subscription');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('/setting_store', [SettingController::class, 'store'])->name('store_setting');
    Route::put('/setting_update/{setting}', [SettingController::class, 'update'])->name('update_setting');
});
