<?php
session_start();
include_once("conexao.php");
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conexao, "DELETE FROM venda WHERE id='$id'");
}
if (isset($_GET['alterar'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conexao, "UPDATE venda SET idProduto WHERE id='$id'");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <td>Data</td>
                <td>Código da Encomenda</td>
                <td>Id do Produto</td>
                <td>Quantidade</td>
                <td>Preço</td>
                <td>Excluir</td>
                <td>Alterar</td>
            </tr>
            <?php
            $sql = mysqli_query($conexao, "SELECT * FROM venda");
            foreach ($sql as $usuario) {
            ?>
                <tr>
                    <th><?php echo date('d/m/Y', strtotime($usuario['data'])); ?></th>
                    <th><?php echo $usuario['codigo_encomenda'] ?></th>
                    <th><?php echo $usuario['idProduto'] ?></th>
                    <th><?php echo $usuario['quantidade'] ?></th>
                    <th><?php echo number_format($usuario['Total'],2,',','.')  ?></th>
                    <th><a href="?excluir=1&id=<?= $usuario['id']; ?>">Excluir</a></th>
                    <th><a href="?alterar=1&id=<?= $usuario['id']; ?>">Alterar</a></th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <a href="administrador.php">Voltar</a>
</body>

</html>