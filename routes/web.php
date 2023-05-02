<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FinanceBankingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HealthCareController;
use App\Http\Controllers\EcommerceRetailController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\LogisticsController;
use App\Http\Controllers\ManufacturingController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('frontend.pages.Home');
// });
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('AboutUs');
Route::get('/finance-banking', [FinanceBankingController::class, 'financeBanking'])->name('FinanceBanking');
Route::get('/', [HomeController::class, 'Home'])->name('Home');
Route::get('/health-care', [HealthcareController::class, 'Healthcare'])->name('Healthcare');
Route::get('/ecommerce-retail', [EcommerceRetailController::class, 'EcommerceRetail'])->name('EcommerceRetails');
Route::get('/transportation', [TransportationController::class, 'Transportation'])->name('Transportation');
Route::get('/logistics', [LogisticsController::class, 'Logistics'])->name('Logistics');
Route::get('/manufacturing', [ManufacturingController::class, 'Manufacturing'])->name('Manufacturing');
Route::get('/terms-condition', [TermsConditionController::class, 'TermsCondition'])->name('TermsCondition');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');

Route::post('insertData',[ContactController::class,'insertData'])->name('contactInsert');
Route::get('/dashboard',[ContactController::class,'readData'])->name('readData');



Route::get('/login', function () {
    return view('frontend.pages.Login');
});
// Route::get('/dashboard', function () {
//     return view('frontend.pages.Dashboard');
// });

