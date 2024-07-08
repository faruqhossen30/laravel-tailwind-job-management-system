<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Attributes\CareerlavelController;
use App\Http\Controllers\Admin\Attributes\EducationController;
use App\Http\Controllers\Admin\Attributes\JobindustryController;
use App\Http\Controllers\Admin\Attributes\JobtypeController;
use App\Http\Controllers\Admin\Attributes\SalaryperiodController;
use App\Http\Controllers\Admin\Attributes\SkillController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CircularController;
use App\Http\Controllers\Admin\Setting\AboutmeSettingController;
use App\Http\Controllers\Admin\Setting\ChatSectionController;
use App\Http\Controllers\Admin\Setting\ContactSettingController;
use App\Http\Controllers\Admin\Setting\SiteSettingController;
use App\Http\Controllers\Admin\Setting\SocialmediaSettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role', RoleController::class);
    Route::resource('admin',AdminController::class);
    Route::resource('blog', BlogController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('role', RoleController::class);
    // Start Work

    route::get('/contact',[ContactController::class,'create'])->name('contact');
    route::post('/contact/send',[ContactController::class,'send'])->name('contact.send');

    //Attributes
    Route::resource('careerlavel',   CareerlavelController::class);
    Route::resource('education',     EducationController::class);
    Route::resource('jobindustry',   JobindustryController::class);
    Route::resource('jobtype',       JobtypeController::class);
    Route::resource('salaryperiod',  SalaryperiodController::class);
    Route::resource('skill',         SkillController::class);

    Route::resource('circular',      CircularController::class);
    Route::resource('category',      CategoryController::class);
    Route::resource('user',          UserController::class);

    Route::get('profile/',[AdminProfileController::class,'adminProfile'])->name('admin.profile');
    Route::put('profile/update/{id}',[AdminProfileController::class,'UpdateAdminProfile'])->name('admin.profile.update');
    Route::get('profile/resetpassword/{id}',[AdminProfileController::class,'resetpasswordAdminProfile'])->name('admin.profile.resetpassword');
    Route::put('profile/changepassword/{id}',[AdminProfileController::class,'changepasswordProfile'])->name('admin.profile.changepassword');
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/site-setting', [SiteSettingController::class, 'sitesetting'])->name('sitesetting')->middleware('can:websitesetting');

        Route::get('/website-setting',[WebsiteSettingController::class,'websitesetting'])->name('website.setting');
        Route::post('/website-setting/store',[WebsiteSettingController::class,'websitestoresetting'])->name('website.setting.store');
        Route::get('/social-media',[SocialmediaSettingController::class,'socialmedia'])->name('socialmedia.setting');
        Route::post('/social-media/store',[SocialmediaSettingController::class,'socialmediastore'])->name('socialmedia.setting.store');
        Route::get('/contact-setting',[ContactSettingController::class,'contactsetting'])->name('contact.setting');
        Route::post('/contact-setting/store',[ContactSettingController::class,'contactsettingstore'])->name('contact.setting.store');

    });
});
