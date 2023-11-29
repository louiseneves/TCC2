<?php
session_start();
include 'conexao.php';
?>
<html>

<head>
    <title>Atualizar Endereco</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <!-- Adicionando Javascript -->
</head>

<body>
    <?php
    if (isset($_POST['salvar'])) {
        $endereco = $_POST['shippingAddressStreet'];
        $numero = $_POST['shippingAddressNumber'];
        $complemento = $_POST['shippingAddressComplement'];
        $bairro = $_POST['shippingAddressDistrict'];
        $cidade = $_POST['shippingAddressCity'];
        $estado = $_POST['shippingAddressState'];
        $id = $_SESSION['id'];
        $sql = "UPDATE usuario SET endereco = '$endereco' WHERE id = $id";
        if (mysqli_query($conexao, $sql)) {
            header('Location:encomenda.php');
        }
        echo "Erro";
    }
    ?>
    <h2>Endereço de Entrega</h2>
    <form action="cadastrar_endereco.php" method="post">
        <label for="shippingAddressStreet">Logradouro</label>
        <input type="text" name="shippingAddressStreet" id="shippingAddressStreet" placeholder="Av. Rua"><br><br>
        <label for="shippingAddressNumber">Número</label>
        <input type="text" name="shippingAddressNumber" id="shippingAddressNumber" placeholder="Número"><br><br>
        <label for="shippingAddressComplement">Complemento</label>
        <input type="text" name="shippingAddressComplement" id="shippingAddressComplement" placeholder="Complemento"><br><br>
        <label for="shippingAddressDistrict">Bairro</label>
        <input type="text" name="shippingAddressDistrict" id="shippingAddressDistrict" placeholder="Bairro"><br><br>
        <label for="shippingAddressCity">Cidade</label>
        <input type="text" name="shippingAddressCity" id="shippingAddressCity " placeholder="Cidade"><br><br>
        <label for="shippingAddressState">Estado</label>
        <input type="text" name="shippingAddressState" id="shippingAddressState" placeholder="Sigla do Estado"><br><br>
        <button name="salvar">Salvar</button>
        <a href="encomenda.php">Cancelar</a>
    </form>