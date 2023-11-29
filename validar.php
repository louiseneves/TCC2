<?php
session_start();
include_once("conexao.php");
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conexao, "DELETE FROM usuario WHERE id='$id'");
}
if (isset($_GET['alterar'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conexao, "UPDATE usuario SET nome WHERE id='$id'");
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
                <td>Nome</td>
                <td>Usuario</td>
                <td>Senha</td>
                <td>Administrador</td>
                <td>Excluir</td>
                <td>Alterar</td>
            </tr>
            <?php
            $id = $_SESSION['id'];
            $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE id='$id'");
            foreach ($sql as $usuario) {
            ?>
                <tr>
                    <th><?php echo $usuario['nome'] ?></th>
                    <th><?php echo $usuario['usuario'] ?></th>
                    <th><?php echo $usuario['senha'] ?></th>
                    <th><?php echo $usuario['administrador'] ?></th>
                    <th><a href="?excluir=1&id=<?= $usuario['id']; ?>">Excluir</a></th>
                    <th><a href="?alterar=1&id=<?= $usuario['id']; ?>">Alterar</a></th>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <a href="conta.php">Voltar</a>
</body>

</html>