<?php
require_once 'vendor/autoload.php';

$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'mc5cn7y9jwb5f6qd',
    'publicKey' => 'q76s8dzhp4wkt5r4',
    'privateKey' => '2cd3194f6073f15ae4181fce6185aa6f'
]);

$content = json_decode(file_get_contents("php://input"), true);
$nonce = $content['nonce'] ?? null;

if ($nonce) {
    $result = $gateway->transaction()->sale([
        'amount' => '1.00',
        'paymentMethodNonce' => $nonce,
        'options' => [ 'submitForSettlement' => false ]
    ]);

    echo json_encode(['message' => $result->success ? 'Verificación exitosa' : 'Falló la verificación']);
} else {
    echo json_encode(['message' => 'Nonce inválido']);
}
