<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\JobController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[FrontendController::class,'index'])->name('/');
Route::get('/blogs',[FrontendController::class,'blogs'])->name('blogs');
Route::get('/blog-details',[FrontendController::class,'blogDetails'])->name('blog-details');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/jobs',[FrontendController::class,'jobs'])->name('jobs');
Route::get('/single-job',[FrontendController::class,'singleJob'])->name('single-job');
Route::get('/job-details',[FrontendController::class,'jobDetails'])->name('job-details');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-slider',[AdminController::class,'slider'])->name('add-slider');
    Route::post('/new-slider',[AdminController::class,'saveSlider'])->name('new-slider');
    Route::get('/manage-slider',[AdminController::class,'manageSlider'])->name('manage-slider');

    Route::get('/add-category',[JobCategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category',[JobCategoryController::class,'saveCategory'])->name('new-category');
    Route::get('/manage-category',[JobCategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/category-status',[JobCategoryController::class,'categoryStatus'])->name('category-status');

    Route::get('/add-company',[CompanyInfoController::class,'addCompany'])->name('add-company');
    Route::post('/new-company',[CompanyInfoController::class,'saveCompany'])->name('new-company');
    Route::get('/manage-company',[CompanyInfoController::class,'manageCompany'])->name('manage-company');
    Route::get('/company-status',[CompanyInfoController::class,'companyStatus'])->name('company-status');

    Route::get('/add-job-post',[JobController::class,'addJobPost'])->name('add-job-post');
    Route::post('/new-job-post',[JobController::class,'saveJobPost'])->name('new-job-post');
    Route::get('/manage-job-post',[JobController::class,'manageJobPost'])->name('manage-job-post');
});
