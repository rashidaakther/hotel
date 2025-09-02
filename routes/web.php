<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "App\\Http\\Controllers\\Web\\HomeController@index")->name("home");
Route::get('/accommodation', "App\\Http\\Controllers\\Web\\HomeController@accommodation")->name("accommodation");
Route::get('/accommodation/{id}', "App\\Http\\Controllers\\Web\\HomeController@accommodation_details")->name("accommodation-details");
Route::get('/suite', "App\\Http\\Controllers\\Web\\HomeController@suite")->name("suite");
Route::get('/contact-us', "App\\Http\\Controllers\\Web\\HomeController@contact")->name("contact-us");
Route::get('/dining', "App\\Http\\Controllers\\Web\\HomeController@dining")->name("dining");
Route::get('/meeting', "App\\Http\\Controllers\\Web\\HomeController@meeting")->name("meeting");
Route::get('/facilities', "App\\Http\\Controllers\\Web\\HomeController@facilities")->name("facilities");
Route::get('/offers', "App\\Http\\Controllers\\Web\\HomeController@offers")->name("offers");
Route::get('/reservation', "App\\Http\\Controllers\\Web\\HomeController@reservation")->name("reservation");
Route::get('/tariff', "App\\Http\\Controllers\\Web\\HomeController@tariff")->name("tariff");
Route::post('/send_message', "App\\Http\\Controllers\\Web\\ContactController@sendmessage")->name("send_message");



Route::get('/login', "App\\Http\\Controllers\\Admin\\AuthenController@login")->name("login");
Route::post('/login', "App\\Http\\Controllers\\Admin\\AuthenController@loginUser")->name("login");

Route::middleware('auth')->group(function(){   
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',[\App\Http\Controllers\Admin\AuthenController::class,'logout'])->name('logout');

    Route::get('/room',[\App\Http\Controllers\Admin\RoomController::class,'index'])->name('rooms');
    Route::get('/add-room',[\App\Http\Controllers\Admin\RoomController::class,'add_room'])->name('add-room');
    Route::post('/add-room',[\App\Http\Controllers\Admin\RoomController::class,'save_room'])->name('add-room');
    Route::get('/edit-room/{id}',[\App\Http\Controllers\Admin\RoomController::class,'edit_room'])->name('edit-room');

    Route::get('/add-Offer',[\App\Http\Controllers\Admin\OfferController::class,'addOffer'])->name('addOffer');
    Route::post('/offer-save',[\App\Http\Controllers\Admin\OfferController::class,'storeOffer'])->name('offer-save');
    Route::get('/OfferList',[\App\Http\Controllers\Admin\OfferController::class,'OfferList'])->name('OfferList');
    Route::get('/edit_offer/{id}',[\App\Http\Controllers\Admin\OfferController::class,'edit_offer'])->name('edit_offer');
    Route::post('/update_offer',[\App\Http\Controllers\Admin\OfferController::class,'update_offer'])->name('update_offer');
    Route::get('/delete_offer/{id}',[\App\Http\Controllers\Admin\OfferController::class,'delete_offer'])->name('delete_offer');

    Route::get('/pending_Reservation',[\App\Http\Controllers\Admin\ReservationController::class,'pendingReservation'])->name('pending_Reservation');
    Route::post('/reservation_save',[\App\Http\Controllers\Admin\ReservationController::class,'storereservation'])->name('reservation_save');
    Route::get('/completed_reservation',[\App\Http\Controllers\Admin\ReservationController::class,'completedReservation'])->name('completed_Reservation');
    Route::get('/reservation_Details/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'reservationDetails'])->name('reservation_Details');
    Route::get('/update_reserve_status/{id}',[\App\Http\Controllers\Admin\ReservationController::class,'updatereservestatus'])->name('update_reserve_status');

    Route::get('/add_facility',[\App\Http\Controllers\Admin\FacilityController::class,'addfacility'])->name('add_facility');
    Route::get('/facility_list',[\App\Http\Controllers\Admin\FacilityController::class,'facilitylist'])->name('facility_list');
    Route::post('/facility_save',[\App\Http\Controllers\Admin\FacilityController::class,'storefacility'])->name('facility_save');
    Route::get('/edit_facility/{id}',[\App\Http\Controllers\Admin\FacilityController::class,'editfacility'])->name('edit_facility');
    Route::post('/update_facility',[\App\Http\Controllers\Admin\FacilityController::class,'facilityupdate'])->name('update_facility');
    Route::get('/delete_facility/{id}',[\App\Http\Controllers\Admin\FacilityController::class,'facilitydestroy'])->name('delete_facility');
    
    Route::get('/site_info',[\App\Http\Controllers\Admin\SiteInfoController::class,'index'])->name('site_info');
    Route::post('/siteInfo_save',[\App\Http\Controllers\Admin\SiteInfoController::class,'siteInfo_save'])->name('siteInfo_save');

    Route::get('/banners',[\App\Http\Controllers\Admin\SettingsController::class,'banners'])->name('banners');
    Route::post('/save-banner',[\App\Http\Controllers\Admin\SettingsController::class,'save_banner'])->name('save-banner');
    Route::get('/edit-banner/{id}',[\App\Http\Controllers\Admin\SettingsController::class,'edit_banner'])->name('edit-banner');


});



 