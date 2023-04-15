<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\ResearveCurrencyController;
use App\Http\Controllers\Backend\BuySellCurrencyController;
use App\Http\Controllers\Backend\ExchangeRatesController;


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
    return view('frontend.pages.home_page');
});

Route::get('/rates', function () {
    return view('frontend.pages.rates_page');
});

Route::get('/affiliates', function () {
    return view('frontend.pages.affiliates_page');
});

Route::get('/testimonials', function () {
    return view('frontend.pages.testimonials_page');
});

Route::get('/news', function () {
    return view('frontend.pages.news_page');
});

Route::get('/help', function () {
    return view('frontend.pages.help_page');
});

Route::get('/contact-us', function () {
    return view('frontend.pages.contact_us_page');
});

Route::get('/sign-up', function () {
    return view('frontend.sign_up');
});

Route::get('/log-in', function () {
    return view('frontend.login');
});

// backend routes
Route::get('login/admin',[AdminController::class,'adminLoginForm'])->name('admin.login.form');
Route::post('admin-login',[AdminController::class,'adminLogin'])->name('admin.login');


Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'adminDashboard'])->name('admin.login.dashboard');
    Route::get('admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');

    // Currencies Route
    Route::get('admin/list/currencies',[CurrencyController::class,'currencyList'])->name('list.currencies');
    Route::get('admin/add/currencies',[CurrencyController::class,'currencyAdd'])->name('add.currencies');
    Route::post('admin/store/currencies',[CurrencyController::class,'currencyStore'])->name('store.currencies');

    Route::get('admin/edit/currencies/{id}',[CurrencyController::class,'currencyEdit'])->name('edit.currencies');
    Route::post('admin/update/currencies/{id}',[CurrencyController::class,'currencyUpdate'])->name('update.currencies');
    Route::get('admin/delete/currencies/{id}',[CurrencyController::class,'currencyDelete'])->name('delete.currencies');

    // Researve Currencies Route
    Route::get('admin/list/researve/currencies',[ResearveCurrencyController::class,'researveCurrencyList'])->name('list.researve.currencies');
    Route::get('admin/add/researve/currencies',[ResearveCurrencyController::class,'researveCurrencyAdd'])->name('add.researve.currencies');
    Route::post('admin/store/researve/currencies',[ResearveCurrencyController::class,'researveCurrencyStore'])->name('store.researve.currencies');

    Route::get('admin/edit/researve/currencies/{id}',[ResearveCurrencyController::class,'researveCurrencyEdit'])->name('edit.researve.currencies');
    Route::post('admin/update/researve/currencies/{id}',[ResearveCurrencyController::class,'researveCurrencyUpdate'])->name('update.researve.currencies');
    Route::get('admin/delete/researve/currencies/{id}',[ResearveCurrencyController::class,'researveCurrencyDelete'])->name('delete.researve.currencies');

    // Buy Sell Currencies Route
    Route::get('admin/list/buysell/currencies',[BuySellCurrencyController::class,'buySellCurrencyList'])->name('list.buysell.currencies');
    Route::get('admin/add/buysell/currencies',[BuySellCurrencyController::class,'buySellCurrencyAdd'])->name('add.buysell.currencies');
    Route::post('admin/store/buysell/currencies',[BuySellCurrencyController::class,'buySellCurrencyStore'])->name('store.buysell.currencies');

    Route::get('admin/edit/buysell/currencies/{id}',[BuySellCurrencyController::class,'buySellCurrencyEdit'])->name('edit.buysell.currencies');
    Route::post('admin/update/buysell/currencies/{id}',[BuySellCurrencyController::class,'buySellCurrencyUpdate'])->name('update.buysell.currencies');
    Route::get('admin/delete/buysell/currencies/{id}',[BuySellCurrencyController::class,'buySellCurrencyDelete'])->name('delete.buysell.currencies');

    // Exchange Rates Route
    Route::get('admin/list/exchange/rates',[ExchangeRatesController::class,'exchangeRatesList'])->name('list.exchange.rates');
    Route::get('admin/add/exchange/rates',[ExchangeRatesController::class,'exchangeRatesAdd'])->name('add.exchange.rates');
    Route::post('admin/store/exchange/rates',[ExchangeRatesController::class,'exchangeRatesStore'])->name('store.exchange.rates');

    Route::get('admin/edit/exchange/rates/{id}',[ExchangeRatesController::class,'exchangeRatesEdit'])->name('edit.exchange.rates');
    Route::post('admin/update/exchange/rates/{id}',[ExchangeRatesController::class,'exchangeRatesUpdate'])->name('update.exchange.rates');
    Route::get('admin/delete/exchange/rates/{id}',[ExchangeRatesController::class,'exchangeRatesDelete'])->name('delete.exchange.rates');




});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/test', function () {
        return view('users.test_page');
    });
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

