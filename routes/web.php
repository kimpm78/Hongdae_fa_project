<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TermsController;


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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/company-info', [CompanyController::class, 'info'])->name('company.info');

Route::get('/refund-exchange', [RefundController::class, 'exchange'])->name('refund.exchange');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/terms', [TermsController::class, 'index'])->name('terms');

// Test Page
Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);

Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);

Route::get('/servicecontainertest', [LifeCycleTestController::class, 'showServiceContainerTest']);

Route::get('/serviceprovidertest', [LifeCycleTestController::class, 'showServiceProviderTest']);

require __DIR__ . '/auth.php';
