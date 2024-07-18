<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\Admin\BookmarkController;
use App\Http\Controllers\Admin\CvController;
use App\Http\Controllers\Ajax\GalleryAjaxController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogComtroller;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContactpageController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\PortfoliopageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewpageController;
use App\Http\Controllers\ReviewSubmitController;
use App\Http\Controllers\SearchpageController;
use App\Http\Controllers\ServicepageController;
use App\Http\Controllers\TearmsController;
use App\Http\Controllers\User\BookmakeController;
use App\Http\Controllers\User\CvController as UserCvController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::get('/test', function () {
    return view('test');
});

Route::get('/', [HomepageController::class, 'Homepage'])->name('homepage');
Route::get('/circulars', [JobListController::class, 'Joblistpage'])->name('job.circulars');
Route::get('/circular/{slug}', [JobListController::class, 'singleJob'])->name('job.details');
Route::get('/blogs', [BlogpageController::class, 'blogPage'])->name('blog.page');
Route::get('/blog/{slug}', [BlogpageController::class, 'singleBlog'])->name('single.blog.page');
Route::get('/contact', [ContactpageController::class, 'contactPage'])->name('contact.page');

Route::get('/search', [SearchpageController::class, 'index'])->name('search');
Route::get('/blogsearch', [SearchpageController::class, 'blogSearch'])->name('blog.search');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('profile/{id}/edit', [UserDashboardController::class, 'userProfile'])->name('user.profile');
    Route::put('profile/{id}', [UserDashboardController::class, 'userProfileupdate'])->name('user.profile.update');
    Route::get('manage-job', [UserDashboardController::class, 'managJob'])->name('user.manage.job');
    Route::get('bookmark-job', [UserDashboardController::class, 'bookmarkJob'])->name('user.bookmark.job');



    Route::get('bookmark/{circular_id}',[BookmakeController::class,'bookmarkStore'])->name('bookmark.store');
    Route::get('my-cv',[UserCvController::class,'cvlist'])->name('cv.list');
    Route::get('cv/create',[UserCvController::class,'create'])->name('cv.create');
    Route::post('cv',[UserCvController::class,'cvStore'])->name('cv.store');
});


require __DIR__ . '/auth.php';
