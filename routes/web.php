<?php

use Beem\Laravel\Http\Controllers\AirtimeCallbackController;
use Beem\Laravel\Http\Controllers\PaymentCheckoutCallbackController;
use Beem\Laravel\Http\Controllers\PaymentCollectionController;
use Beem\Laravel\Http\Controllers\SmsDeliveryReportController;
use Beem\Laravel\Http\Controllers\TwoWaySmsCallbackController;
use Beem\Laravel\Http\Controllers\UssdCallbackController;
use Illuminate\Support\Facades\Route;

Route::post('sms-delivery-report', SmsDeliveryReportController::class)
    ->name('beem.sms-delivery-report');

Route::post('outbound-sms', TwoWaySmsCallbackController::class)
    ->name('beem.outbound-sms');

Route::post('ussd-callback', UssdCallbackController::class)
    ->name('beem.ussd-callback');

Route::post('airtime-callback', AirtimeCallbackController::class)
    ->name('beem.airtime-callback');

Route::post('payment-collection', PaymentCollectionController::class)
    ->name('beem.payment-collection');

Route::post('payment-checkout', PaymentCheckoutCallbackController::class)
    ->name('beem.payment-checkout');
