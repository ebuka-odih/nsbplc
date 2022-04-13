<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('users', 'Admin\AdminController@all_users')->name('all_users');
    Route::get('add-user', 'Admin\AdminController@create')->name('add_user');
    Route::post('add-user/store', 'Admin\AdminController@store_user')->name('store_user');

    Route::get('edit-user/{id}', "Admin\AdminController@edit_user")->name("edit_user");
    Route::post('profile/store/{id}', 'Admin\AdminController@personal_info_store')->name('personal_info_store');

//    Account Route
    Route::get('user-details/{id}', 'Admin\AdminController@user_detail')->name('user_details');
    Route::get('personal-details/{id}', 'Admin\AdminController@personal_details')->name('personal_details');

    Route::post('fund-account/{id}', 'Admin\AdminController@fund_account')->name('fund_account');
    Route::post('defund-account/{id}', 'Admin\AdminController@defund_account')->name('defund_account');
    Route::post('update_bank/{id}', 'Admin\AccountController@update_bank')->name('update_bank');

//    Message route
    Route::get('user/profile/message/{id}', 'Admin\MessageController@index')->name('user_message')->where('id', '[0-9]+');
    Route::get('user/message/create/{id}', 'Admin\MessageController@create')->name('create');
    Route::post('user/message/store', 'Admin\MessageController@store')->name('mesg_store');
    Route::get('user/message/details/{id}', 'Admin\MessageController@show')->name('msg_show');

    Route::get('user/verify{id}', 'Admin\AdminController@approve_user')->name('verify_user');

//    Transfer Route
    Route::get('withdrawals', 'Admin\AdminWithdrawal@withdrawals')->name('withdrawals');
    Route::delete('delete/transaction/{id}', "Admin\AdminWithdrawal@delete_tran")->name('delete_trans');
    Route::get('withdrawal/{id}', 'Admin\AdminWithdrawal@withdrawal_details')->name('withdrawal_details');
    Route::post('withdrawal/otp/{id}', 'Admin\AdminWithdrawal@admin_otp')->name('admin_otp');
    Route::post('withdrawal/atc/{id}', 'Admin\AdminWithdrawal@admin_atc')->name('admin_swift');
    Route::post('withdrawal/trn/{id}', 'Admin\AdminWithdrawal@admin_trn')->name('admin_trn');

    Route::get('withdrawal/{id}', 'Admin\AdminWithdrawal@withdrawal_details')->name('withdrawal_details');
    Route::delete('user/{id}/delete', 'Admin\AdminController@delete_user')->name('delete_user');

    Route::get('settings', "Admin\AdminSettings@settings")->name('settings');
    Route::post('update/admin-profile', "Admin\AdminSettings@admin_info_store")->name('admin_info_store');

    Route::post('update/admin-password', "Admin\AdminSettings@change_password")->name('change_password');

//    Cards Route
    Route::get('cards', "Admin\AdminController@cards")->name('cards');
    Route::delete('delete/card/{id}', "Admin\AdminController@delete_card")->name('delete_card');
    Route::get('approve/card/{id}', "Admin\AdminController@reject_card")->name('reject_card');

//    Deposits Route
    Route::get('deposits', "Admin\DepositsController@deposits")->name('deposits');
    Route::get('approve/deposits/{id}', "Admin\DepositsController@approveDeposit")->name('approveDeposit');
    Route::get('declined/deposits/{id}', "Admin\DepositsController@delineDeposit")->name('delineDeposit');
});


