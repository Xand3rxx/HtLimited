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
use App\Http\Controllers\Frontend\BlogController;

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

Auth::routes([
    'login'    => true,
    'register' => true,
    'logout'   => true,
    'reset'    => false,   // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

//Clear configurations:
Route::get('/config-clear', function() {
    $status = Artisan::call('optimize:clear');
    return '<h1 style="color: #4CAF50">Configurations cleared</h1>';
});

// Routes for frontend
Route::view('/',                                'frontend.home')->name('frontend.index');
Route::view('/about-us',                        'frontend.about')->name('frontend.about');
Route::view('/our-team',                        'frontend.our-team')->name('frontend.our_team');
Route::view('/contact-us',                      'frontend.contact')->name('frontend.contact');

Route::view('/services',                        'frontend.services.services')->name('frontend.services');
Route::view('/services/training',               'frontend.services.training')->name('frontend.services_training');

Route::view('/services/consultancy/consultancy-services',          'frontend.services.consultancy.consultancy')->name('frontend.services_consultancy_services');
Route::view('/services/consultancy/business-development',          'frontend.services.consultancy.business-development')->name('frontend.services_business_development');

Route::view('/services/human-resources-management',                'frontend.services.human-resources.human-resources')->name('frontend.services_human_resources');
Route::view('/services/human-resources-management/outsourcing',    'frontend.services.human-resources.outsourcing')->name('frontend.services_outsourcing');
Route::view('/services/human-resources-management/recruitment',    'frontend.services.human-resources.recruitment')->name('frontend.services_recruitment');

Route::view('/business-development/business-loans',                     'frontend.business-development.business-loans')->name('frontend.business_development_business_loans');
Route::view('/business-development/bank-of-industry-loan',              'frontend.business-development.bank-of-industry-loan')->name('frontend.business_development_bank_of_industry_loan');
Route::view('/business-development/bank-of-industry-loan-requirement',  'frontend.business-development.bank-of-industry-loan-requirement')->name('frontend.business_development_bank_of_industry_requirement');
Route::view('/business-development/usaid-requirement',                  'frontend.business-development.usaid-requirement')->name('frontend.business_development_usaid_requirement');

Route::view('/training/start-your-business',            'frontend.training.start-your-business')->name('frontend.training_start_your_business');
Route::view('/training/improve-your-business',          'frontend.training.improve-your-business')->name('frontend.training_improve_your_business');
Route::view('/training/business-continuity-plan',       'frontend.training.business-continuity-plan')->name('frontend.training_business_continuity_plan');

Route::get('blog/search/{name}',        [BlogController::class, 'search'])->name('blog.search');
Route::get('blog/tag/{name}',           [BlogController::class, 'filterByTag'])->name('blog.filter_by_tag');
Route::get('blog/category/{name}',      [BlogController::class, 'filterByCategory'])->name('blog.filter_by_category');
Route::resource('blog',                 BlogController::class);


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

    //Routes for Menus
    Route::view('menu', 'admin.menus.index')->name('menu.index');

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

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
