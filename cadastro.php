<?php
session_start();
include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_escape_string($conexao, trim($_POST["nome"]));
    $cpf = mysqli_escape_string($conexao, trim($_POST["cpf"]));
    $telefone = mysqli_escape_string($conexao, trim($_POST["telefone"]));
    $endereco = mysqli_escape_string($conexao, trim($_POST["endereco"]));
    $usuario = mysqli_escape_string($conexao, trim($_POST["usuario"]));
    $senha = mysqli_escape_string($conexao, trim($_POST["senha"]));
    $administrador = mysqli_escape_string($conexao, trim($_POST["administrador"]));
    $sql = "SELECT count(*) as total FROM usuario WHERE usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header("Location: cadastro.php");
        exit;
    }
    $sql = "INSERT INTO cliente(nome,cpf,telefone,endereco) VALUES('$nome','$cpf','$telefone','$endereco');";
    $sql .= "INSERT INTO usuario(nome,usuario,senha,administrador) VALUES('$nome','$usuario','$senha','$administrador');";
    if ($conexao->multi_query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
        header("Location: login.php");
        exit;
    }
    $conexao->close();
    header("Location: cadastro.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    <style>
        .cookie-bar {
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background: linear-gradient(lighten(red, 10%), darken(red, 10%));
            color: #fff;
            font-size: 14px;
            font-family: “Lato”, sans-serif;
            font-weight: 100;
            transition: .8s;
            animation: slideIn .8s;
            animation-delay: .8s;
            text-shadow: 0 1px 0 darken(red, 10%)
        }


        .checkbox-cb {
            display: none
        }

        a {
            color: #5cf2ff
        }
    </style>
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Cadastro</h1>
    </div>
    <?php
    if (!empty($_SESSION['status_cadastro'])) :
    ?>
        <div class="sucesso">
            <p>Cadastro efetuado!</p>
        </div>
    <?php
    endif;
    unset($_SESSION['status_cadastro']);
    ?>
    <?php
    if (!empty($_SESSION['usuario_existe'])) :
    ?>
        <div class="invalid-feedback">
            <p>O usuario escolhido já existe! Informe outro e tente novamente</p>
        </div>
    <?php
    endif;
    unset($_SESSION['usuario_existe']);
    ?>
    <form action="cadastro.php" method="POST" class="card">
        <div class="card-content">
            <div class="card-content-area">
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="cpf">Cpf</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" required>
                </div>
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" class="form-control" required>
                    </div>
                    <div class="card-content">
                        <div class="card-content-area">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" id="endereco" class="form-control" required>
                        </div>
                        <div class="card-content">
                            <div class="card-content-area">
                                <select name="cidade" id="cidade" class="form-control" required>
                                    <option value="">Cidade</option>
                                    <option value="VilaVelha">Vila Velha</option>
                                    <option value="Vitoria">Vitória</option>
                                    <option value="">Cidade</option>
                                    <option value="">Cidade</option>
                                    <option value="">Cidade</option>
                                </select>
                            </div>
                            <div class="card-content">
                                <div class="card-content-area">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" id="estado" class="form-control" required>
                                </div>
                                <div class="card-content">
                                    <div class="card-content-area">
                                        <label for="usuario">Nome do usuário</label>
                                        <input type="text" name="usuario" id="usuario" class="form-control" required>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-content-area">
                                        <label for="senha">Senha</label>
                                        <input type="password" name="senha" id="senha" class="form-control" required>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-content-area">
                                            <label for="senha">Confirme a senha</label>
                                            <input type="password" name="senha" id="senha" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" name="submit" class="submit">
                                    </div>
                                    <div class="card-footer">
                                        <a href="index.php" class="cancelar">Cancelar</a>
                                    </div>
    </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['consentimento']) && $_POST['consentimento'] === 'aceito') {
            // O usuário deu seu consentimento
            // Aqui você pode coletar os dados pessoais
        } else {
            // O usuário não deu seu consentimento
            // Não colete dados pessoais
        }
    }
    ?>
    <h1>Formulário de Consentimento LGPD</h1>
    <form method="POST" action="login.php">
        <label>
            <input type="checkbox" name="consentimento" value="aceito"> Eu concordo com a coleta dos meus dados pessoais.
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>