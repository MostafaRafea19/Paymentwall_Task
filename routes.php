<?php

ob_start();

Route::get('index.php', function () {
    ProductController::index();
});

Route::get('add-product', function () {
    ProductController::create();
});

Route::post('store-product', function () {
    ProductController::add();
});

Route::post('mass-delete', function () {
    ProductController::delete();
});

Route::post('pay', function () {
    ProductController::pay();
});

Route::get('payment', function () {
    ProductController::payment();
});

ob_end_flush();