<?php

use App\Http\Controllers\backend\aboutus\AffiliationMembership;
use App\Http\Controllers\backend\BackendHome;
use App\Http\Controllers\backend\homepage\WhoweareController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\ThemeOptionsController;
use App\Http\Controllers\FrontendController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::get('/home', [BackendHome::class, 'index'])->name('backend.index');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

/*********************** frontend design route *******************
  ****************************************************************/
Route::get('/company-profile', [FrontendController::class, 'companyprofile']);
Route::get('/meet-our-team', [FrontendController::class, 'meetourteam']);
Route::get('/affiliation', [FrontendController::class, 'affiliation']);
Route::get('/enlistment', [FrontendController::class, 'enlistment']);
Route::get('/membership', [FrontendController::class, 'membership']);
Route::get('/audit-assurance', [FrontendController::class, 'auditassurance']);
Route::get('/taxation-vat', [FrontendController::class, 'taxationvat']);
Route::get('/advisory', [FrontendController::class, 'advisory']);
Route::get('/secretarial-licensing-compliance', [FrontendController::class, 'secretariallicensingcompliance']);
Route::get('/business-service', [FrontendController::class, 'businessservice']);
Route::get('/human-resource-services', [FrontendController::class, 'humanresource']);
Route::get('/training-development', [FrontendController::class, 'trainingdevelopment']);
// client page start
Route::get('/financial-institutions', [FrontendController::class, 'financialinstitutions']);
Route::get('/listed-companies', [FrontendController::class, 'listedcompanies']);
Route::get('/international-clients', [FrontendController::class, 'internationalclients']);
Route::get('/japanese-client', [FrontendController::class, 'japaneseclient']);
// media page start
Route::get('/newsletter', [FrontendController::class, 'newsletter']);
Route::get('/blog', [FrontendController::class, 'blog']);
Route::get('/publications', [FrontendController::class, 'publications']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
Route::get('/event', [FrontendController::class, 'event']);
Route::get('/professional', [FrontendController::class, 'professional']);
Route::get('/articleship', [FrontendController::class, 'articleship']);
Route::get('/regulators', [FrontendController::class, 'regulators']);
Route::get('/contactus', [FrontendController::class, 'contactus']);

/*********************** backend  route *******************
  ****************************************************************/
  Route::get('/themeoptions', [ThemeOptionsController::class, 'index'])->name('themeoptions.index');
  Route::post('/themeoptions/update', [ThemeOptionsController::class, 'update'])->name('themeoptions.update');

/*********************** sider design route *******************
  ****************************************************************/
  Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
  Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
  Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
  Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
  Route::post('/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
  Route::get('/slider/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');


/*********************** Home Page design route *******************
  ****************************************************************/
  Route::get('/whoweare', [WhoweareController::class, 'index'])->name('homepage.whoweare');
  Route::post('/whoweare/update', [WhoweareController::class, 'update'])->name('whoweare.update');

  /*********************** About Us Page design route *******************
  ****************************************************************/
  Route::get('/affiliationbackend', [AffiliationMembership::class, 'affiliationindex'])->name('affiliation.index');
  Route::get('/affiliation/create', [AffiliationMembership::class, 'affiliationcreate'])->name('affiliation.create');
  Route::post('/affiliation/store', [AffiliationMembership::class, 'affiliationstore'])->name('affiliation.store');
  Route::get('/affiliation/edit/{id}', [AffiliationMembership::class, 'affiliationedit'])->name('affiliation.edit');
  Route::post('/affiliation/update/{id}', [AffiliationMembership::class, 'affiliationupdate'])->name('affiliation.update');
  Route::get('/affiliation/delete/{id}', [AffiliationMembership::class, 'affiliationdestroy'])->name('affiliation.delete');
