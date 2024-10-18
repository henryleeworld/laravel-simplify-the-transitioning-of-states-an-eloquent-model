<?php

use App\Http\Controllers\SalesOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/sales-orders/new', [SalesOrderController::class, 'newSalesOrder'])->name('sales-orders.new');
Route::get('/sales-orders/{salesOrder}', [SalesOrderController::class, 'show'])->name('sales-orders.show');
Route::post('/sales-orders/{salesOrder}/update-status', [SalesOrderController::class, 'updateStatus']);
