<?php
session_start();
include 'conexao.php';
if (empty($_SESSION['id'])) {
    header('Location:painel.php');
}
if (isset($_GET['deletar'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conexao, "DELETE FROM venda WHERE id='$id'");
    echo "Produto removido com sucesso!";
}
$codigo = $_GET['codigo'];
$sql = mysqli_query($conexao, "SELECT * FROM venda WHERE codigo_encomenda = '$codigo' ");

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
    <div class="card-header">
        <a href="pedidos.php" class="menu">Home</a>
        <a href="index.php" class="menu">Sair</a>
    </div>
    <div>
        <h1>Compra: <?php echo $codigo?></h1>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Data</th>
                <th>Código</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Cancelar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total=0;
            while ($linha = $sql->fetch_assoc()) {
                $total +=$linha['Total'];
            ?>
                <tr>
                    <td> <?php echo date('d/m/Y', strtotime($linha['data'])); ?> </td>
                    <td><?php echo $linha['codigo_encomenda']; ?></td>
                    <td><?php echo $linha['idProduto']; ?> </td>
                    <td><?php echo $linha['quantidade']; ?> </td>
                    <td>R$<?php echo number_format($linha['Total'], 2, ',', '.'); ?> </td>
                    <td><a href="?deletar=1&id=<?php echo $linha['id']; ?>" class="editar">Cancelar</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <div>
        <h2>Total desta compra: R$ <?php echo number_format($total,2,',','.');?></h2>
    </div>
</body>

</html>