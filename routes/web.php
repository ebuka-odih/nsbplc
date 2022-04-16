<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'pages.index')->name('index');
Route::view('/personal', 'pages.Personal')->name('personal');
Route::view('/debit-card', 'pages.debit-card')->name('debit-card');
Route::view('/personal-loan', 'pages.personal-loan')->name('personal-loan');
Route::view('/personal-investing', 'pages.personal-investing')->name('personal-investing');
Route::view('/Online-Banking', 'pages.online-banking')->name('online-banking');
Route::view('/eStatements', 'pages.eStatement')->name('eStatements');
Route::view('/checking-with-interest', 'pages.checking-with-interest')->name('checking-with-interest');
Route::view('/Premier-Money-Market', 'pages.Premier-Money-Market')->name('Premier-Money-Market');
Route::view('/nsb-Savings', 'pages.Prosperity-Savings')->name('nsb-Savings');
Route::view('/Compare-Personal-Checking-Accounts', 'pages.Compare-Personal-Savings-Accounts')->name('Compare-Personal-Savings-Accounts');
Route::view('/NSB-Money-Market', 'pages.Prosperity-Money-Market')->name('Prosperity-Money-Market');
Route::view('/e-Checking', 'pages.e-Checking')->name('e-Checking');
Route::view('Personal-Checking','pages.checking')->name('checking');
Route::view('Checking-with-Interest','pages.Checking-with-interest')->name('Checking-with-interest');
Route::view('Simply-Free-Checking','pages.Simply-Free-Checking')->name('Simply-Free-Checking');

//Personal Savings Route
Route::view('Compare-Personal-Savings-Accounts', 'pages.Compare-Personal-Savings-Accounts')->name('Compare-Personal-Savings-Accounts');

//Route::view('/','pages.index')->name('index');
Route::view('/contact-us','pages.contact-us')->name('contact');
Route::view('bank-accounts','pages.bank-accounts')->name('bank_accounts');
Route::view('register/new-account','pages.new-account')->name('reg_new_account');

Route::post('new-account', "ClientAccountCreation@new_account")->name('new_account');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function () {

    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('profile', "UserController@profile")->name('profile');
    Route::get('edit/profile/{id}', "UserController@editProfile")->name('editProfile');
    Route::get('password', "UserController@password")->name('password');
    Route::post('change-password', 'ChangePasswordController@storePassword')->name('storePassword');


    // Withdrawal Routes
    Route::get('withdraw', "WithdrawalController@withdraw")->name('withdraw');
    Route::get('withdraw/history', "WithdrawalController@withdrawHistory")->name('withdrawHistory');
    Route::post('withdraw', "WithdrawalController@store")->name('store');
    Route::get('process/withdraw/{id}', "WithdrawalController@processAtcCode")->name('processAtcCode');
    Route::get('atc-code/{id}', "WithdrawalController@atcCode")->name('atcCode');
    Route::post('store/atc-code', "WithdrawalController@atcStore")->name('atcStore');

    Route::get('process/otp/{id}', "WithdrawalController@processOtp")->name('processOtp');
    Route::get('otp-code/{id}', "WithdrawalController@otpCode")->name('otpCode');
    Route::post('store/otp-code/', "WithdrawalController@otpStore")->name('otpStore');

    Route::get('process/trn-code/{id}', "WithdrawalController@processTrn")->name('processTrn');
    Route::get('trn-code/{id}', "WithdrawalController@trnCode")->name('trnCode');
    Route::post('store/trn-code/', "WithdrawalController@trn_code_store")->name('trn_code_store');

    Route::get('process/transaction/{id}', "WithdrawalController@with_process")->name('with_process');
    Route::get('transaction/details/{id}', "WithdrawalController@withdrawal_details")->name('withdrawal_details');

    // Deposits Route
    Route::get('deposit', "DepositController@deposit")->name('deposit');
    Route::get('deposit/history', "DepositController@depositHistory")->name('depositHistory');
    Route::post('store/deposit', "DepositController@storeDeposit")->name('storeDeposit');
    Route::get('deposit/payment/{id}', "DepositController@payment")->name('payment');

    // Card Route
    Route::get('card', "RequestCardController@card")->name('card');
    Route::get('card/history', "RequestCardController@cardHistory")->name('cardHistory');
    Route::post('request/card', "RequestCardController@storeCard")->name('storeCard');

});

include'admin.php';
