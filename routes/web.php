<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

//Clear configurations:
Route::get('/config-clear', function() {
    $status = Artisan::call('config:clear');
    return '<h1 style="color: #4CAF50">Configurations cleared</h1>';
});

//Clear cache:
Route::get('/cache-clear', function() {
    $status = Artisan::call('cache:clear');
    return '<h1 style="color: #4CAF50">Cache cleared</h1>';
});

//Clear view:
Route::get('/view-clear', function() {
    $status = Artisan::call('view:clear');
    return '<h1 style="color: #4CAF50">Views cleared</h1>';
});

//Clear route:
Route::get('/route-clear', function() {
    $status = Artisan::call('route:clear');
    return '<h1 style="color: #4CAF50">Routes cleared</h1>';
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'login'    => true,
    'register' => true,
    'logout'   => true,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::prefix('admin')->name('admin.')->middleware('verified')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('index');

    //Routes for Categories
    Route::get('categories/deactivate/{uuid}',    [CategoryController::class, 'deactivate'])->name('categories.deactivate');
    Route::post('categories/reassign/{uuid}',     [CategoryController::class, 'reassign'])->name('categories.reassign');
    Route::resource('categories',                 CategoryController::class);

    //Routes for Blog Posts
    Route::get('posts/publish/{uuid}',            [PostController::class, 'publishPost'])->name('posts.publish');
    Route::get('posts/unpublish/{uuid}',          [PostController::class, 'unpublishPost'])->name('posts.unpublish');
    Route::resource('posts',                      PostController::class);

    //Routes for Profile management feature
    Route::put('profile/change-password',         [ProfileController::class, 'changePassword'])->name('profile.change_password');
    Route::resource('profile',                    ProfileController::class);

    //Routes for Website Settings
    Route::resource('settings',                   SettingsController::class);

    //Routes for Tags
    Route::get('tags/deactivate/{uuid}',         [TagController::class, 'deactivate'])->name('tags.deactivate');
    Route::post('tags/reassign/{uuid}',          [TagController::class, 'reassign'])->name('tags.reassign');
    Route::resource('tags',                      TagController::class);
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
