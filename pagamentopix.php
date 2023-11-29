<?php
session_start();
require_once('conexao.php');
require_once('pagamento/vendor/autoload.php');
$client = new \GuzzleHttp\Client();
$response = $client->request('POST', 'https://api-sandbox.kobana.com.br/v1/bank_billet_accounts', [
  'body' => '{"bank_contract_slug":"string","agency_number":"string","agency_digit":"string","account_number":"string","account_digit":"string","extra1":"string","extra1_digit":"string","extra2":"string","extra2_digit":"string","contract":"string","contract_type":"string","extra3":"string","beneficiary_name":"string","beneficiary_cnpj_cpf":"string","beneficiary_address_street":"string","beneficiary_address_street_number":"string","beneficiary_address_complement":"string","beneficiary_address_neighborhood":"string","beneficiary_address_city":"string","beneficiary_address_state":"string","beneficiary_address_zipcode":"01310100","name":"string","configuration":"Unknown Type: json","custom_name":"string","kind":"cnab400","allow_expiration_on_weekends":true}',
  'headers' => [
    'accept' => 'application/json',
    'authorization' => 'Bearer _VDwO4gozq0em4BKrCO99MqCea5xOzrLU6cIzVL6x9I',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();
    // Processar o pagamento (simulação simples)
    $valor = $_POST['valor'];
    // Salva os detalhes do pagamento no banco de dados
    $query = "INSERT INTO pix (valor) VALUES ('$valor')";
    if ($conexao->query($query) === TRUE) {
        echo "<script>alert('Pagamento realizado com sucesso. Aguarde a confirmação.')</script>";
        echo "<script> window.location.href = 'pedidos.php';</script>";
    } else {
        echo "Erro ao processar o pagamento: " . $conexao->error;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagamento Pix</title>
</head>

<body>
    <h1>Pagamento Pix</h1>
    <form method="post" action="pagamentopix.php">
        <label for="valor">Valor:</label>
        <input type="text" name="valor" value="<?= $_SESSION['total']; ?>" required>
        <button type="submit">Realizar Pagamento</button>
    </form>
</body>

</html>