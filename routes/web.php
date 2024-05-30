<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SMTPController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\FormController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Frontend\TrainingController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Admin\FormController as AdminFormController;
use App\Http\Controllers\Admin\TrainingController as AdminTrainingController;

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
Route::post('/contact-us',                      [PageController::class, 'sendContactUsMail'])->name('frontend.send_contact_us');

Route::view('/services',                        'frontend.services.services')->name('frontend.services');
Route::view('/services/training',               'frontend.services.training')->name('frontend.services_training');

Route::view('/services/consultancy/consultancy-services',          'frontend.services.consultancy.consultancy')->name('frontend.services_consultancy_services');
Route::view('/services/consultancy/business-development',          'frontend.services.consultancy.business-development')->name('frontend.services_business_development');

Route::view('/services/human-resources-management',                'frontend.services.human-resources.human-resources')->name('frontend.services_human_resources');
Route::view('/services/human-resources-management/outsourcing',    'frontend.services.human-resources.outsourcing')->name('frontend.services_outsourcing');
Route::view('/services/human-resources-management/recruitment',    'frontend.services.human-resources.recruitment')->name('frontend.services_recruitment');

Route::view('/business-development/access-to-finance/business-loans',             'frontend.business-development.access-to-finance.business-loans')->name('frontend.business_development_business_loans');
Route::get('business-development/access-to-finance/bank-of-industry-loan',        [PageController::class, 'bankOfIndustryLoan'])->name('frontend.business_development_bank_of_industry_loan');
Route::get('business-development/access-to-finance', [PageController::class, 'accessToFinance'])->name('frontend.access_to_finance');
Route::view('/business-development/strategy-development',  'frontend.business-development.strategy-development')->name('frontend.business_development_strategy_development');
Route::view('/business-development/access-to-market',  'frontend.business-development.access-to-market')->name('frontend.business_development_access_to_market');
Route::view('/business-development/coaching',  'frontend.business-development.coaching')->name('frontend.business_development_coaching');
Route::view('/business-development/business-optimization',  'frontend.business-development.business-optimization')->name('frontend.business_development_business_optimization');

Route::view('/training/start-your-business',            'frontend.training.start-your-business')->name('frontend.training_start_your_business');
Route::view('/training/improve-your-business',          'frontend.training.improve-your-business')->name('frontend.training_improve_your_business');
Route::view('/training/business-continuity-plan',       'frontend.training.business-continuity-plan')->name('frontend.training_business_continuity_plan');
Route::view('/training/free-online-start-and-improve-your-business',            'frontend.training.free-online-start-your-business')->name('frontend.training_free_online_start_your_business');
Route::resource('training',                 TrainingController::class);

Route::post('blog/search',              [BlogController::class, 'search'])->name('blog.search');
Route::get('blog/tag/{name}',           [BlogController::class, 'filterByTag'])->name('blog.filter_by_tag');
Route::get('blog/category/{name}',      [BlogController::class, 'filterByCategory'])->name('blog.filter_by_category');
Route::resource('blog',                 BlogController::class);

Route::post('forms/lga-list',          [FormController::class, 'lgaList'])->name('frontend.lga');
Route::resource('forms',                FormController::class);

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    //Routes for Categories
    Route::get('categories/deactivate/{uuid}',    [CategoryController::class, 'deactivate'])->name('categories.deactivate');
    Route::post('categories/reassign/{uuid}',     [CategoryController::class, 'reassign'])->name('categories.reassign');
    Route::resource('categories',                 CategoryController::class);

    //Routes for Blog Posts
    Route::get('posts/publish/{uuid}',            [PostController::class, 'publishPost'])->name('posts.publish');
    Route::get('posts/unpublish/{uuid}',          [PostController::class, 'unpublishPost'])->name('posts.unpublish');
    Route::get('posts/delete/{uuid}',             [PostController::class, 'deletePost'])->name('posts.delete_post');
    Route::resource('posts',                      PostController::class);

    //Routes for Forms
    Route::get('forms/bank-of-industry-loan',      [AdminFormController::class, 'bankOfIndustryLoan'])->name('form_bank_of_industry_loan');
    Route::get('forms/bank-of-industry-loan/{uuid}',      [AdminFormController::class, 'showBankOfIndustryLoan'])->name('show_form_bank_of_industry_loan');
    Route::get('forms/bank-of-industry-loan/apprive/{uuid}',      [AdminFormController::class, 'approveBankOfIndustryLoan'])->name('approve_form_bank_of_industry_loan');
    Route::get('forms/bank-of-industry-loan/decline/{uuid}',      [AdminFormController::class, 'declineBankOfIndustryLoan'])->name('decline_form_bank_of_industry_loan');

    //Routes for Menus
    Route::view('menu', 'admin.menus.index')->name('menu.index');

    //Routes for Profile management feature
    Route::put('profile/change-password',           [ProfileController::class, 'changePassword'])->name('profile.change_password');
    Route::resource('profile',                      ProfileController::class);

    //Routes for Website Settings
    Route::resource('settings',                     SettingsController::class);

    //Routes for SMTP Mail Settings
    Route::resource('smtp-settings',                SMTPController::class);

    //Routes for Tags
    Route::get('tags/deactivate/{uuid}',            [TagController::class, 'deactivate'])->name('tags.deactivate');
    Route::post('tags/reassign/{uuid}',             [TagController::class, 'reassign'])->name('tags.reassign');
    Route::resource('tags',                         TagController::class);

    //Routes for Training
    Route::get('training/start-your-business',      [AdminTrainingController::class, 'startYourBusiness'])->name('training_start_your_business');
    Route::get('training/improve-your-business',    [AdminTrainingController::class, 'improveYourBusiness'])->name('training_improve_your_business');
    Route::get('training/business-continuity-plan', [AdminTrainingController::class, 'businessContinuityPlan'])->name('training_business_continuity_plan');
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

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token'     => 'bail|required|string',
        'email'     => 'bail|required|email',
        'password'  => 'bail|required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return ($status === Password::PASSWORD_RESET)
    ? redirect()->route('login')->with('success',  __($status))
    : redirect()->back()->with('error', [__($status)]);
})->middleware('guest')->name('password.update');
