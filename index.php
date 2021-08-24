<?php
require_once('paymentwall-php/lib/paymentwall.php');
Paymentwall_Config::getInstance()->set(array(
    'api_type' => Paymentwall_Config::API_GOODS,
    'public_key' => '2ecf740353a7d946586698b4831cee3b',
    'private_key' => '0578d36bba756dd280f8a1b8ee4d7a20'
));

spl_autoload_register(function ($class_name) {
    if (file_exists("Models/$class_name.php")) {
        require_once "Models/$class_name.php";
    } elseif (file_exists("Controllers/$class_name.php")) {
        require_once "Controllers/$class_name.php";
    }
});

require_once('routes.php');

