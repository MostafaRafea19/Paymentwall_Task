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

Route::post('payment', function () {
    ProductController::pay();
});

ob_end_flush();