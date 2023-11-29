<?php
session_start();
require_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('pagamento/vendor/autoload.php');
$client = new \GuzzleHttp\Client();
$response = $client->request('POST', 'https://api-sandbox.kobana.com.br/v1/bank_billets', [
    'body' => '{"interest_type":0,"interest_days_type":0,"fine_type":0,"discount_type":0,"charge_type":1,"dispatch_type":1,"document_type":"02","acceptance":"N","ignore_email":null,"ignore_sms":null,"ignore_whatsapp":null,"custom_data":{"0":"{","1":"\\"","2":"c","3":"o","4":"d","5":"i","6":"g","7":"o","8":"\\"","9":":","10":" \\"","11":"1","12":"2","13":"3","14":"\\"","15":",","16":"","17":" ","18":"\\"","19":"v","20":"i","21":"p","22":"\\"","23":":","24":" ","25":"t","26":"r","27":"u","28":"e","29":"}"},"meta":"{\\"codigo\\": \\"123\\", \\"vip\\": true}","prevent_pix":false,"instructions_mode":1,"bank_billet_account_id":5367,"bank_billet_layout_id":5367,"amount":10.99,"expire_at":"2023-12-12","customer_id":null,"customer_person_name":"João Silva","customer_cnpj_cpf":"16.974.923/0001-84","customer_state":"SP","customer_city_name":"São Paulo","customer_zipcode":"01310100","customer_address":"Rua F, alamenda G","customer_address_complement":null,"customer_address_number":null,"customer_email":null,"customer_email_cc":null,"customer_neighborhood":"Centro","customer_phone_number":null,"customer_ignore_email":null,"customer_ignore_sms":null,"customer_mobile_local_code":null,"customer_mobile_number":null,"customer_nickname":null,"customer_notes":null,"customer_contact_person":null,"days_for_interest":null,"interest_percentage":null,"interest_value":null,"days_for_fine":null,"fine_percentage":null,"fine_value":null,"days_for_discount":null,"discount_percentage":null,"discount_value":null,"days_for_second_discount":null,"second_discount_percentage":null,"second_discount_value":null,"days_for_third_discount":null,"third_discount_percentage":null,"third_discount_value":null,"tags":null,"guarantor_name":null,"guarantor_cnpj_cpf":null,"guarantor_address_number":null,"guarantor_neighborhood":null,"guarantor_phone_number":null,"guarantor_city_name":null,"guarantor_state":null,"guarantor_zipcode":null,"guarantor_address":null,"guarantor_address_complement":null,"description":null,"instructions":null,"document_date":null,"document_number":null,"our_number":null,"paid_amount":null,"paid_at":null,"days_for_revoke":null,"days_for_negativation":null,"days_for_sue":null,"sue_code":null,"revoke_code":null,"first_instruction":null,"second_instruction":null,"watermark":null,"payment_count":1,"divergent_payment_type":null,"divergent_payment_value_type":null,"divergent_payment_maximum_value":null,"divergent_payment_minimum_value":null,"divergent_payment_maximum_percentage":null,"divergent_payment_minimum_percentage":null,"divergent_payment_limit":null,"prevent_registration":null,"control_number":null,"addons":null,"notes":null,"custom_attachment_name":null,"split_payment":null,"split_accounts":null,"payment_place":null,"cancellation_reason":null,"recipient_account":"string","reduction_amount":2.5,"virtual_bank_billet_id":null}',
    'headers' => [
      'accept' => 'application/json',
      'authorization' => 'Bearer _VDwO4gozq0em4BKrCO99MqCea5xOzrLU6cIzVL6x9I',
      'content-type' => 'application/json',
    ],
  ]);
  
  echo $response->getBody();
    // Processar o pagamento (simulação simples)
    $valor = $_POST['valor'];
    // Gera um código de barras do boleto (simulação simples)
    $codigo_barras = md5(uniqid());

    // Salva os detalhes do pagamento no banco de dados
    $query = "INSERT INTO boleto (valor, codigo_barras) VALUES ('$valor', '$codigo_barras')";

    if ($conexao->query($query) === TRUE) {
        echo "Boleto gerado com sucesso. Aguarde o pagamento.";
    } else {
        echo "Erro ao gerar boleto: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Geração de Boleto</title>
</head>

<body>
    <h1>Geração de Boleto</h1>
    <form method="post" action="boleto.php">
        <label for="valor">Valor:</label>
        <input type="text" name="valor" value="<?= $_SESSION['total']; ?>" required>
        <button type="submit">Gerar Boleto</button>
    </form>
</body>

</html>