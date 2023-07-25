<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageSystemVariableController;
use App\Http\Controllers\ManageTransactionController;
use App\Http\Controllers\MakeSubscriptionController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/about', [HomeController::class, 'showAbout']);
Route::get('/contact', [HomeController::class, 'showContact']); // Need to retrieve email and phone number from database

Route::get('/profile', [UserController::class, 'index'])->name('user'); // need to show subscription plan and remaining how many days

Route::get('/admin', [AdminController::class,'index']);

// Manage transaction
Route::get('/home', [ManageTransactionController::class, 'index'])->name('home');
Route::get('/createTransaction', [ManageTransactionController::class, 'index'])->name('home');
Route::get('/editTransaction', [ManageTransactionController::class, 'index'])->name('home');
Route::put('/updateTransaction', [ManageTransactionController::class, 'index'])->name('home');
Route::put('/terminateTransaction', [ManageTransactionController::class, 'index'])->name('home');
Route::get('/project', [ManageTransactionController::class, 'showProjection']);

// Make subscription
Route::get('/subscription', [MakeSubscriptionController::class, 'showSubscriptionPlan']); // show subscribe/ no subscribe
Route::post('/subscription', [MakeSubscriptionController::class, 'makeSubscription']); // show subscribe/ no subscribe
Route::put('/subscription', [MakeSubscriptionController::class, 'changeSubscription']); // show subscribe/ no subscribe
// check expired in middleware

// Edit system variables and subscription plans
Route::get('/admin/system_variables', [ManageSystemVariableController::class, 'showSystemVariables']);
Route::get('/admin/edit_system_variable/{id}', [ManageSystemVariableController::class, 'editSystemVariable']);
Route::put('/admin/update_system_variable', [ManageSystemVariableController::class, 'updateSystemVariable']);
Route::get('/admin/create_subscription_plan/{id}', [ManageSystemVariableController::class, 'createSubscriptionPlan']);
Route::post('/admin/store_subscription_plan/{id}', [ManageSystemVariableController::class, 'storeSubscriptionPlan']);
Route::get('/admin/edit_subscription_plan/{id}', [ManageSystemVariableController::class, 'editSubscriptionPlan']);
Route::put('/admin/update_subscription_plan', [ManageSystemVariableController::class, 'updateSubscriptionPlan']);
Route::delete('/admin/delete_subscription_plan/{id}', [ManageSystemVariableController::class, 'deleteSubscriptionPlan']);