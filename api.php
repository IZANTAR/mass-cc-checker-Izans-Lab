<?php
require 'vendor/autoload.php';

$gateway = new Braintree\Gateway([
  'environment' => 'sandbox',
  'merchantId' => 'sgs3szbh725fvfz9',
  'publicKey' => 'r37wsnstj8dyxm6c',
  'privateKey' => 'dd055f5cbfa1a44bbd88d9e60e13c5e4'
]);

$result = $gateway->transaction()->sale([
  'amount' => '1.00',
  'paymentMethodNonce' => 'fake-valid-nonce',
  'options' => ['submitForSettlement' => true]
]);

if ($result->success) {
  echo "✅ Transacción exitosa: " . $result->transaction->id;
} else {
  echo "❌ Error: " . $result->message;
}
