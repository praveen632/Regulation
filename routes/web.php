<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Admin\LogingHistoryController;
use App\Http\Controllers\Admin\LogActivityController;
use App\Http\Controllers\Admin\SitemapXmlController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SeoPageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
  
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
    return view('welcome');
});

Route::fallback(function () {    
    return redirect()->back();
 });
Route::post('admin-login', [LoginController::class, 'loginForm'])->name('loginForm');

Auth::routes();  
// Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {

    /* Log Activity */ 
    Route::get('logActivity', [LogActivityController::class, 'logActivity'])->name('logActivity.index');

    /* Login History */
    Route::get('login-history', [LogingHistoryController::class, 'index'])->name('loginhistory.index');
    
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
   
    /* Setting */
    Route::get('setting', [AdminController::class, 'setting'])->name('setting.index');
    Route::post("setting", [AdminController::class, 'settingPost'])->name('setting.settingPost');

    /* Setting */
    // Route::get('home-page', [HomePageController::class, 'create'])->name('home.page.create');
    // Route::post("home-page", [HomePageController::class, 'store'])->name('home.page.store');

    Route::resources([
        'pages'             => PageController::class,
        'seo-pages'         => SeoPageController::class,
        'roles'             => RoleController::class,
        'permissions'       => PermissionController::class,
        'users'             => UserController::class,
        'categories'        => CategoryController::class,
        'document-centers'  => DocumentCenterController::class,
        'states'            => StateController::class,
        'cities'            => CityController::class,
    ]);
    
    // Enquiry Page
    Route::get('enquiry-list', [AdminController::class, 'getEnquiries'])->name('getEnquiries');
    
    /* Static Pages*/
    Route::get('pages/status/{id}', [PageController::class, 'changeStatus'])->name('pages.status');
    
    /* User */
    Route::get('users/status/{id}', [UserController::class, 'changeStatus'])->name('users.status');
    Route::get('customers/status/{id}', [UserController::class, 'changeStatus'])->name('customers.status');

    /* Category */
    Route::get('categories/status/{id}', [CategoryController::class, 'changeStatus'])->name('categories.status');

    /* Service */
    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('service/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
    Route::get('service/status/{id}', [ServiceController::class, 'changeStatus'])->name('service.status');
    
    Route::get('select-category', [ServiceController::class, 'selectCategory']);

    /*Landing Page */
    

    

    /* Contact Us List */
    Route::get('leads', [ContactUsController::class, 'index'])->name('leads.index');
    Route::get('leads-delete/{id}', [ContactUsController::class, 'destroy'])->name('leads.delete');
    
    /* profile */
    Route::get('profiles', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profiles', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('delete-user', [ProfileController::class, 'deleteProfile'])->name('profile.delete');

   
});



// /* Front Routes */ 

// Route::fallback(function () { return redirect('/404');});
Route::get('404', [FrontendController::class, 'error'])->name('error');
Route::get('500', [FrontendController::class, 'error'])->name('500 error');



// Route::get('payment-data/{data}', [SubscribeController::class, 'paymentdata']);
/*
Route::get('https://www.whizseed.com/blogs/', function () { 
    return redirect('/');
});
*/
//Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/', [FrontendController::class, 'index'])->name('index');
// Route::post('/shortbannerenquiry',[FrontendController::class,'shortbannerenquiry'])->name('shortbannerenquiry');
// Route::post('/shortenquiry',[FrontendController::class,'shortenquiry']);
// Route::post('/shortfooterenquiry',[FrontendController::class,'shortfooterenquiry']);
// Route::post('/saveoverviewenquiry',[FrontendController::class,'saveoverviewenquiry'])->name('saveoverviewenquiry');
Route::get('thanks', [FrontendController::class, 'thanks'])->name('thanks');
Route::get('newthanks', [FrontendController::class, 'newthanks'])->name('newthanks');
Route::post('/sendnewemail',[FrontendController::class,'sendnewemail'])->name('sendnewemail');


Route::get('about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('term-of-use', [FrontendController::class, 'termsService'])->name('terms-of-service');
Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('refund-policy', [FrontendController::class, 'refundPolicy'])->name('refund.policy');
Route::get('video', [FrontendController::class, 'videos'])->name('videos');

/* Contat Us */ 
Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
Route::post('/saveenquiry',[FrontendController::class,'saveenquiry'])->name('saveenquiry');
Route::post('thanks', [FrontendController::class, 'saveContactUs'])->name('newthanks');
Route::get('lp/company-registration-in-india', [FrontendController::class, 'companyregistration'])->name('lp/company-registration-in-india');

/* Services */
Route::get('/{slug}', [FrontendController::class, 'subcategoryDetails'])->name('subcategory.details');
Route::get('/service/{services_slug}', [FrontendController::class, 'services'])->name('fronts.services');


Route::get('business-incorporation', [FrontendController::class, 'businessIncorporation'])->name('business.incorporation');
Route::get('sitemap.xml', [SitemapXmlController::class, 'index']);
/*
Route::get('accounting-compliance', [FrontendController::class, 'accountingCompliance'])->name('accounting.compliance');
Route::get('ipr-trademark', [FrontendController::class, 'iprTrademark'])->name('ipr.trademark');
Route::get('licences', [FrontendController::class, 'licences'])->name('licences');
Route::get('tax-registrations', [FrontendController::class, 'taxRegistrations'])->name('tax.registration');
Route::get('international-business-setup', [FrontendController::class, 'internationalBusinessSetup'])->name('international_business_setup');
Route::get('legal-agreements', [FrontendController::class, 'legalAgreements'])->name('legal_agreements');
Route::get('fundraising-services', [FrontendController::class, 'fundraisingServices'])->name('fundraising_services');
Route::get('fundraising-compliance', [FrontendController::class, 'fundraisingCompliance'])->name('fundraising_compliance');
Route::get('secratarial-compliance', [FrontendController::class, 'secratarialCompliance'])->name('secratarial_compliance');
Route::get('reporting', [FrontendController::class, 'reporting'])->name('reporting');
Route::get('statutory-refunds', [FrontendController::class, 'statutoryRefunds'])->name('statutory_refunds');
Route::get('people-management', [FrontendController::class, 'peopleManagement'])->name('people_management');
Route::get('tax-registration-closure', [FrontendController::class, 'taxRegistrationClosure'])->name('tax_registration_closure');
Route::get('entity-closure', [FrontendController::class, 'entityClosure'])->name('entity_closure');
Route::get('labour-law-registrations', [FrontendController::class, 'labourlawregistrations'])->name('labour-law-registrations');
Route::get('labour-law-compliances', [FrontendController::class, 'labourlawcompliances'])->name('labour-law-compliances');
Route::get('hr-policies', [FrontendController::class, 'hrpolicies'])->name('hr-policies');
Route::get('virtual-cfo', [FrontendController::class, 'virtualcfo'])->name('virtual-cfo');
*/
// /////////////////////////////////////////

Route::get('change-password', [FrontendController::class, 'changePassword'])->name('change-password');


/* Forget Password */ 
Route::get('forgot-password', [FrontendController::class, 'forgotPassword'])->name('forgot-password');
Route::post('forgot-password', [SubscribeController::class, 'forgotPassword'])->name('forgotpassword');
Route::get('forgot-password/{email?}', [SubscribeController::class, 'resetPasswords'])->name('resetPassword');
Route::post('change-password', [SubscribeController::class, 'changePassword'])->name('changePassword');

/* User Registration */
Route::get('signup', [RegisterController::class, 'signup'])->name('signup');
Route::post('register', [RegisterController::class, 'register'])->name('register');

/*User Login*/ 
Route::get('customer/login', [FrontendController::class, 'login'])->name('customerLogin');
Route::post('customer-login', [LoginController::class, 'customerLogin'])->name('customer');

/*Send Email*/
Route::get('send-mail', [MailController::class, 'index']);



