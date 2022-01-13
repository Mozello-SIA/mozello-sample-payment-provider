<?php

require "paymentapi.php";
require 'config.php';

function failure($info) {
    if ($_POST && $_POST['failure_url']) {
        $url = $_POST['failure_url'];
        if ($info) {
            $url .= '?info=' . $info;
        }
        header('Location: ' . $url);
        die();
    } else {
        echo $info;
        die();
    }
}

$payments = new PaymentApi($api_key);

if ($_POST && $_POST['order_id']) {

    if (!$payments->validatePostSignature()) {
        failure('Incorrect signature');
    }

    $order = $_POST['order_id'];
    $settings = $payments->getPaymentSettings($order);

    if ($settings && $settings['fields']) {


        echo 'Received data for order:<br>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        echo 'Payment processor settings from shop:<br>';
        echo '<pre>';
        print_r($settings);
        echo '</pre>';

        //TODO: implement payment API - initialize order payment process
        // ... ... ...

    } else {
        failure('Configuration error');
    }

} else {
    failure('Not configured');
}

