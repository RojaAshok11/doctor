<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\Patientweb\PatientController;
use App\Http\Controllers\Admin\Web\Settings\User\UserController;
use App\Http\Controllers\Website\Policecontrol\PoliceController;
use App\Http\Controllers\Admin\Web\Settings\Support\FaqController;
use App\Http\Controllers\Admin\Web\Settings\Location\CityController;
use App\Http\Controllers\Admin\Web\Settings\Location\StateController;
use App\Http\Controllers\Admin\Web\Contactus\AdmincontactusController;
use App\Http\Controllers\Admin\Web\Dashboard\AdmindashboardController;
use App\Http\Controllers\Admin\Web\Enquiry\AdminenquiryformController;
use App\Http\Controllers\Admin\Web\Settings\Support\SupportController;
use App\Http\Controllers\Admin\Web\Reports\Logreport\TrackingController;
use App\Http\Controllers\Admin\Web\Reports\Logreport\LogininfoController;
use App\Http\Controllers\Admin\Web\Reports\Reports\AdminreportsController;
use App\Http\Controllers\Admin\Web\Settings\Settings\AdminsettingsController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\FcmsettingController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\SmssettingController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\EmailsettingController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\ThemesettingController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\CompanysettingController;
use App\Http\Controllers\Admin\Web\Settings\Generalsetting\GatewaysettingController;

Route::group(['middleware' => ['auth', 'preventbackbutton'], 'prefix' => 'admin'], function () {
    // Dashboard
    Route::get('/admindashboard', [AdmindashboardController::class, 'dashboard'])->name('admindashboard');

     // contactus
     Route::get('/contactus', [AdmincontactusController::class, 'admincontactus'])->name('admincontactus');

     // enquiryform
     Route::get('/enquiryform', [AdminenquiryformController::class, 'adminenquiryform'])->name('adminenquiryform');

    // Reports
    Route::get('/reports', [AdminreportsController::class, 'index'])->name('adminreports');
    // time
    Route::get('/timeappiont/{id}', [AdminreportsController::class, 'timeappiontment'])->name('timeappiont');

    // Log Reports
    Route::get('logininfo', [LogininfoController::class, 'logininfo'])->name('logininfo');
    Route::get('tracking', [TrackingController::class, 'tracking'])->name('tracking');

    // Settings
    Route::get('/settings', [AdminsettingsController::class, 'index'])->name('adminsettings');

    // User Settings
    Route::controller(UserController::class)
        ->group(function () {
            Route::get('usercreateoredit', 'usercreateoredit')->name('usercreateoredit');
            Route::get('userchangepassword', 'userchangepassword')->name('userchangepassword');
            Route::get('userrole', 'userrole')->name('userrole');
            Route::get('permission/{id}', 'permission')->name('permission');
        });

    // Location
    Route::get('state', [StateController::class, 'state'])->name('state');
    Route::get('city', [CityController::class, 'city'])->name('city');

    //FAQ
    Route::controller(FaqController::class)
        ->group(function () {
            Route::get('/faq', 'faq')->name('adminfaq');
            Route::get('/faqcreate', 'create')->name('faqcreate');
            Route::get('/faqedit/{id}', 'edit')->name('faqedit');
        });

    //Support
    Route::controller(SupportController::class)
        ->group(function () {
            Route::get('/support', 'support')->name('adminsupport');
            Route::get('/supportcreate', 'create')->name('supportcreate');
            Route::get('/supportedit/{id}', 'edit')->name('supportedit');
        });

    // General Setting
    // Theme
    Route::get('themesetting', [ThemesettingController::class, 'themesetting'])->name('adminthemesetting');
    // Email
    Route::get('emailsetting', [EmailsettingController::class, 'emailsetting'])->name('adminemailsetting');
    // Gateway
    Route::get('gatewaysetting', [GatewaysettingController::class, 'gatewaysetting'])->name('admingateway');
    // SMS
    Route::get('smssetting', [SmssettingController::class, 'smssetting'])->name('adminsmssetting');
    // Company
    Route::get('companysetting', [CompanysettingController::class, 'companysetting'])->name('admincompanysetting');
    // Fcm
    Route::get('fcmsetting', [FcmsettingController::class, 'fcmsetting'])->name('adminfcmsetting');



});
// police
Route::get('/patient/{id}', [PatientController::class, 'patientinformation'])->name('patientcontrol');
Route::get('/patientslot', [PatientController::class, 'patientinformationslot'])->name('patientcontrolslot');
Route::get('/doccreate', [PatientController::class, 'doccreatednew'])->name('doccreatednew');
