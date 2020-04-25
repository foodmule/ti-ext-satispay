<?php

Route::group([
    'prefix' => 'ti_satispay',
    'middleware' => ['web']
], function () {
    Route::any('{code}/{slug}', function ($code, $slug) {
        return \Admin\Classes\PaymentGateways::runEntryPoint($code, $slug);
    })->where('slug', '(.*)?');
});