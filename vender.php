<?php
session_start();
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <a href="vender.php" class="menu">Home</a>
        <a href="produto.php" class="menu">Cadastro dos Produtos</a>
        <a href="index.php" class="menu">Sair</a>
    </div>
    <div>
        <h1>Produtos Cadastrados</h1>
    </div>

    <table border="1">
        <thead>
            <tr>
                <th>IdUsuário</th>
                <th>Nº</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Marca</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Validade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = $_SESSION['id'];
            $sql = mysqli_query($conexao, "SELECT * FROM produto WHERE idUsuario = '$id'");
            while ($linha = $sql->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $linha['idUsuario']; ?></td>
                    <td> <?php echo $linha['id']; ?> </td>
                    <td><img src="<?php echo $linha['cover_img']; ?>" alt="<?php echo $linha['nome']; ?>" class="produtoMinitura" /> </td>
                    <td><?php echo $linha['nome']; ?> </td>
                    <td><?php echo $linha['marca']; ?> </td>
                    <td><?php echo $linha['descricao']; ?> </td>
                    <td>R$<?php echo $linha['valor']; ?> </td>
                    <td><?php echo date("d/m/Y", strtotime($linha['validade'])); ?> </td>
                    <td><a href="editar.php?id=<?php echo $linha['id']; ?>" class="editar">Editar</a></td>
                    <td><a href="deletar.php?id=<?php echo $linha['id']; ?>" class="editar">Excluir</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>