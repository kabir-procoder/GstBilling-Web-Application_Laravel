<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartiesTypeController;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\GstBillsController;
use App\Http\Controllers\LogoController;




Route::get('/', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register-post', [AuthController::class, 'register_post']);
Route::get('forgot-password', [AuthController::class, 'forgot_password']);
Route::get('logout', [AuthController::class, 'logout']);


Route::group(['middleware' => 'admin'], function() {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    // Parties-Type Route
    Route::get('admin/parties_type', [PartiesTypeController::class, 'parties_type']);
    Route::get('admin/parties_type/add', [PartiesTypeController::class, 'parties_type_add']);
    Route::post('admin/parties_type/insert', [PartiesTypeController::class, 'parties_type_insert']);
    Route::get('admin/parties_type/edit/{id}', [PartiesTypeController::class, 'parties_type_edit']);
    Route::post('admin/parties_type/edit/{id}', [PartiesTypeController::class, 'parties_type_update']);
    Route::get('admin/parties_type/trashlist', [PartiesTypeController::class, 'parties_type_trashlist']);
    Route::get('admin/parties_type/trash/{id}', [PartiesTypeController::class, 'parties_type_trash']);
    Route::get('admin/parties_type/restore/{id}', [PartiesTypeController::class, 'parties_type_restore']);
    Route::get('admin/parties_type/delete/{id}', [PartiesTypeController::class, 'parties_type_delete']);
    Route::get('admin/parties_type/pdf_generator', [PartiesTypeController::class, 'parties_type_pdf_generator']);
    Route::get('admin/parties_type/pdf_single/{id}', [PartiesTypeController::class, 'parties_type_pdf_single']);
    // Parties Route
    Route::get('admin/parties', [PartiesController::class, 'parties_list']);
    Route::get('admin/parties/add', [PartiesController::class, 'parties_add']);
    Route::post('admin/parties/add', [PartiesController::class, 'parties_post']);
    Route::get('admin/parties/edit/{id}', [PartiesController::class, 'parties_edit']);
    Route::post('admin/parties/edit/{id}', [PartiesController::class, 'parties_update']);
    Route::get('admin/parties/trashlist', [PartiesController::class, 'parties_trashlist']);
    Route::get('admin/parties/trash/{id}', [PartiesController::class, 'parties_trash']);
    Route::get('admin/parties/restore/{id}', [PartiesController::class, 'parties_restore']);
    Route::get('admin/parties/delete/{id}', [PartiesController::class, 'parties_delete']);
    Route::get('admin/parties/pdf_all', [PartiesController::class, 'parties_pdf_all']);
    Route::get('admin/parties/pdf_single/{id}', [PartiesController::class, 'parties_pdf_single']);
    Route::get('admin/parties/view/{id}', [PartiesController::class, 'parties_view']);
    // GTS-Bills Route
    Route::get('admin/gst_bills', [GstBillsController::class, 'gst_bills_list']);
    Route::get('admin/gst_bills/add', [GstBillsController::class, 'gst_bills_add']);
    Route::post('admin/gst_bills/add', [GstBillsController::class, 'gst_bills_post']);
    Route::get('admin/gst_bills/view/{id}', [GstBillsController::class, 'gst_bills_view']);
    Route::get('admin/gst_bills/edit/{id}', [GstBillsController::class, 'gst_bills_edit']);
    Route::post('admin/gst_bills/edit/{id}', [GstBillsController::class, 'gst_bills_update']);
    Route::get('admin/gst_bills/trashlist', [GstBillsController::class, 'gst_bills_trashlist']);
    Route::get('admin/gst_bills/trash/{id}', [GstBillsController::class, 'gst_bills_trash']);
    Route::get('admin/gst_bills/restore/{id}', [GstBillsController::class, 'gst_bills_restore']);
    Route::get('admin/gst_bills/delete/{id}', [GstBillsController::class, 'gst_bills_delete']);
    Route::get('admin/gst_bills/pdf_generator', [GstBillsController::class, 'gst_bills_pdf_all']);
    Route::get('admin/gst_bills/pdf_single/{id}', [GstBillsController::class, 'gst_bills_pdf_single']);
    // Logo
    Route::get('admin/logo/mainlogo', [LogoController::class, 'mainlogo']);
    Route::post('admin/logo/mainlogo', [LogoController::class, 'mainlogo_post']);
    Route::get('admin/logo/favicon', [LogoController::class, 'favicon']);
    Route::post('admin/logo/favicon', [LogoController::class, 'favicon_post']);
    // Users
    Route::get('admin/users', [AuthController::class, 'users_list']);
    Route::get('admin/users/edit/{id}', [AuthController::class, 'users_edit']);
    Route::post('admin/users/edit/{id}', [AuthController::class, 'users_update']);
    Route::post('admin/users/edit/{id}', [AuthController::class, 'users_update']);
    Route::get('admin/users/trashlist', [AuthController::class, 'users_trashlist']);
    Route::get('admin/users/trash/{id}', [AuthController::class, 'users_trash']);
    Route::get('admin/users/restore/{id}', [AuthController::class, 'users_restore']);
    Route::get('admin/users/delete/{id}', [AuthController::class, 'users_delete']);
    
    

    
    
    
    
    


});

