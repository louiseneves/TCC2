<?php
session_start();
include("conexao.php");
if (empty($_SESSION['id'])) {
    header('Location:painel.php');
}
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <a href="index.php" class="menu">Home</a>
    </div>
    <div>
        <p>Olá, <?php echo $usuario; ?></p>
    </div>
    <form action="validar.php" method="post">
        <div class="card-footer">
            <input type="submit" name="submit" class="submit" value="Alterar">
        </div>
    </form>
</body>

</html>