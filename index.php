<?php
require_once 'vendor/autoload.php';

$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'mc5cn7y9jwb5f6qd',
    'publicKey' => 'q76s8dzhp4wkt5r4',
    'privateKey' => '2cd3194f6073f15ae4181fce6185aa6f'
]);

$clientToken = $gateway->clientToken()->generate();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>MASS CC CHECKER - Izan's Lab</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://js.braintreegateway.com/web/dropin/1.32.1/js/dropin.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>MASS CC CHECKER</h1>
    <div id="dropin-container"></div>
    <button id="submit-button">Verificar</button>
  </div>
  <script>
    braintree.dropin.create({
      authorization: "<?php echo $clientToken; ?>",
      container: '#dropin-container'
    }, function (createErr, instance) {
      document.getElementById('submit-button').addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
          fetch('verify.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ nonce: payload.nonce })
          })
          .then(response => response.json())
          .then(data => alert(data.message));
        });
      });
    });
  </script>
</body>
</html>
