<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <h2 class="h1">Recuperar senha</h2>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="card">

        <div class="card-content">
            <div class="card-content-area">
                <p>Por favor, preencha este formulário para redefinir sua senha.</p>
                <label>Nome do Usuário</label>
                <input type="text" name="login" class="form-control">
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label>Nova senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>
                <div class=" card-footer">
                    <input type="submit" class="submit" name="ok" value="Recuperar">
                    <a class="conta" href="index.php">Cancelar</a>
                </div>
    </form>
    </div>
    <?php
    include "conexao.php";
    $senha = $_POST["senha"];
    $login = $_POST["login"];
    $sql = "SELECT * FROM usuario WHERE BINARY usuario = '$login'";
    $res = mysqli_query($conexao, $sql);
    $cont = mysqli_num_rows($res);
    if ($cont > 0) {
        $query = "UPDATE usuario SET senha = '$senha' WHERE BINARY usuario = '$login'";
        mysqli_query($conexao, $query);
        echo "Senha alterada com sucesso! <br> ";
        header('Location: login.php');
    } else {
        echo "Senha errada! <br> ";
    }
    ?>
</body>

</html>