<?php
include 'conexao.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Processar o pagamento (simulação simples)
    $valor = $_POST['valor'];
    // Salva os detalhes do pagamento no banco de dados
    $query = "INSERT INTO pix (valor) VALUES ('$valor')";
    if ($conexao->query($query) === TRUE) {
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
        echo "<script>alert('Pagamento realizado com sucesso. Aguarde a confirmação.')</script>";
        echo "<script> window.location.href = 'pedidos.php';</script>";
    } else {
        echo "Erro ao processar o pagamento: " . $conexao->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Pagamento</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Efetue o pagamento do seu pedido:</h1>
    <form name="formPagamento" action="" id="formPagamento">
        <label>Banco</label>
        <select name="bankName" id="bankName" class="select-bank-name">
            <option value="">Selecione</option>
        </select>
        <h2>Dados do Cartão</h2>
        <label for="fullname">Titular do Cartão</label>
        <input type="text" name="fullname" id="fullname" placeholder="Nome igual ao escrito no cartão" required><br><br>
        <label for="numCartao">Número do Cartão</label>
        <input type="text" name="numCartao" id="numCartao" required>
        <span class="bandeira-cartao"></span><br><br>
        <label for="cvvCartao">CVV do cartão</label>
        <input type="text" name="cvvCartao" id="cvvCartao" maxlength="3" value="123" required><br><br>
        <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">
        <label for="mesValidade">Mês de Validade</label>
        <input type="text" name="mesValidade" id="mesValidade" maxlength="2" value="12" required><br><br>
        <label for="anoValidade">Ano de Validade</label>
        <input type="text" name="anoValidade" id="anoValidade" maxlength="4" value="2030" required><br><br>
        <label for="qntParcelas">Quantidades de Parcelas</label>
        <select name="qntParcelas" id="qntParcelas" class="select-qnt-parcelas">
            <option value="">Selecione</option>
            <option value="1">1px - R$ <?= number_format($_SESSION['total'], 2, ',', '.'); ?></option>
            <option value="2">2px - R$ <?= number_format($_SESSION['total'] / 2, 2, ',', '.'); ?></option>
            <option value="3">3px - R$ <?= number_format($_SESSION['total'] / 3, 2, ',', '.'); ?></option>
            <option value="4">4px - R$ <?= number_format($_SESSION['total'] / 4, 2, ',', '.'); ?></option>
            <option value="5">5px - R$ <?= number_format($_SESSION['total'] / 5, 2, ',', '.'); ?></option>
            <option value="6">6px - R$ <?= number_format($_SESSION['total'] / 6, 2, ',', '.'); ?></option>
            <option value="7">7px - R$ <?= number_format($_SESSION['total'] / 7, 2, ',', '.'); ?></option>
            <option value="8">8px - R$ <?= number_format($_SESSION['total'] / 8, 2, ',', '.'); ?></option>
            <option value="9">9px - R$ <?= number_format($_SESSION['total'] / 9, 2, ',', '.'); ?></option>
            <option value="10">10px - R$ <?= number_format($_SESSION['total'] / 10, 2, ',', '.'); ?></option>
            <option value="11">11px - R$ <?= number_format($_SESSION['total'] / 11, 2, ',', '.'); ?></option>
            <option value="12">12px - R$ <?= number_format($_SESSION['total'] / 12, 2, ',', '.'); ?></option>
        </select><br><br>
        <input type="hidden" name="valorParcelas" id="valorParcelas">
        <label for="creditCardHolderCPF">CPF do dono do Cartão</label>
        <input type="text" name="creditCardHolderCPF" id="creditCardHolderCPF" placeholder="CPF sem traço" value="22111944785" required><br><br>
        <input type="hidden" name="tokenCartao" id="tokenCartao">
        <input type="hidden" name="hashCartao" id="hashCartao">
        <h2>Endereço do dono do cartão</h2>
        <label>Logradouro</label>
        <input type="text" name="billingAddressStreet" id="billingAddressStreet" placeholder="Av. Rua" value="Av. Brig. Faria Lima" required><br><br>
        <label>Número</label>
        <input type="text" name="billingAddressNumber" id="billingAddressNumber" placeholder="Número" value="1384" required><br><br>
        <label>Complemento</label>
        <input type="text" name="billingAddressComplement" id="billingAddressComplement" placeholder="Complemento" value="5o andar"><br><br>
        <label>Bairro</label>
        <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" placeholder="Bairro" value="Jardim Paulistano"><br><br>
        <label>CEP</label>
        <input type="text" name="billingAddressPostalCode" id="billingAddressPostalCode" placeholder="CEP sem traço" value="01452002" required><br><br>
        <label>Cidade</label>
        <input type="text" name="billingAddressCity" id="billingAddressCity" placeholder="Cidade" value="Sao Paulo" required><br><br>
        <label>Estado</label>
        <input type="text" name="billingAddressState" id="billingAddressState" placeholder="Sigla do Estado" value="SP" required><br><br>
        <button>Pagar</button>
        <h2>Dados do Comprador</h2>
        <label>Nome</label>
        <input type="text" name="senderName" id="senderName" placeholder="Nome completo" value="Jose Comprador" required><br><br>
        <label>CPF</label>
        <input type="text" name="senderCPF" id="senderCPF" placeholder="CPF sem traço" value="22111944785" required><br><br>
        <label>Telefone</label>
        <input type="text" name="senderAreaCode" id="senderAreaCode" placeholder="DDD" value="11" required>
        <input type="text" name="senderPhone" id="senderPhone" placeholder="Somente número" value="56273440" required><br><br>
        <label>E-mail</label>
        <input type="email" name="senderEmail" id="senderEmail" placeholder="E-mail do comprador" value="c66860546910556664625@sandbox.pagseguro.com.br" required><br><br>
        <label>Frete</label>
        <input type="radio" name="shippingType" value="1"> PAC
        <input type="radio" name="shippingType" value="2"> SEDEX
        <input type="radio" name="shippingType" value="3" checked> Sem frete<br><br>
        <label>Valor Frete</label>
        <input type="text" name="shippingCost" id="senderCPF" placeholder="Preço do frete. Ex: 2.10" value="0.00"><br><br>
        <input type="submit" name="btnComprar" id="btnComprar" value="Comprar">
    </form>
</body>

</html>