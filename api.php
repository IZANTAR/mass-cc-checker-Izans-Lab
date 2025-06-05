<?php
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$gateway = new Braintree\Gateway([
    'environment' => $_ENV['BT_ENVIRONMENT'],
    'merchantId' => $_ENV['BT_MERCHANT_ID'],
    'publicKey' => $_ENV['BT_PUBLIC_KEY'],
    'privateKey' => $_ENV['BT_PRIVATE_KEY']
]);

$result = $gateway->transaction()->sale([
    'amount' => '11.00',
    'paymentMethodNonce' => 'fake-valid-nonce',
    'options' => [
        'submitForSettlement' => true
    ]
]);

if ($result->success) {
    echo "✅ Transacción exitosa: " . $result->transaction->id;
} else {
    echo "❌ Error: " . $result->message;
}

