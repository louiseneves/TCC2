<?php
session_start();
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="539560169501-o42e2b63c5gdg1v5a43vaoe2n49425uj.apps.googleusercontent.com">
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Login</h1>
    </div>
    <?php
    // if (!empty($login_err)) {
    //   echo '<div class="alert alert-danger">' . $login_err . '</div>';
    // }
    ?>
    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div>
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>
    <form action="login.php" method="POST" class="card">

        <div class="card-content">
            <div class="card-content-area">
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control<?php //echo (!empty($usuario_err)) ? 'is-invalid' : ''; 
                                                                                                        ?>" value="<?php //echo $usuario; 
                                                                                                                    ?>">
                <!-- <span class="invalid-feedback"><?php echo $usuario_err; ?></span><!-->
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="senha">Senha</label>
                    <input type="password" placeholder="Digite a sua senha" name="senha" class="form-control <?php //echo (!empty($senha_err)) ? 'is-invalid' : ''; 
                                                                                                                ?>">
                    <!-- <span class="invalid-feedback"><?php //echo $senha_err; 
                                                        ?></span><!-->
                </div>
            </div>
            <div class="card-footer">
                <a href="senha.php" class="senha">Esqueceu a senha?</a>
            </div>
            <div class="card-footer">
                <input type="submit" value="Entrar" class="submit" name="submit" />
            </div>
            <div>
                <h3>
                    Ou
                </h3>
                <?php
                /*include 'vendor/fbconfig.php';
                $permissions = ['email'];
                $fbRedirectUri = 'http://localhost/TCC2/vendor/fb-callback.php';
                $loginUrl = $helper->getLoginUrl($fbRedirectUri, $permissions);
                include 'vendor/config.php';
                $authUrl = $client->createAuthUrl(); */?>
                <ul class="ul">
                    <li><a href="<?php echo $loginUrl; ?>"> <img src="data:image/jpeg;base64,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"></a></li>
                    <li><a href="<?php echo $authUrl; ?>"><img src="data:image/png;base64,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"></a></li>
                </ul>

            </div>

            <div class="card-footer">
                <a href="cadastro.php" class="conta">Criar conta</a>
            </div>

    </form>

    </div>

</body>

</html>
<?php
//$usuario = $_POST['usuario'];
//$senha = $_POST['senha'];
//$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND senha='$senha'";
//$res = $conexao->query($sql) or die($conexao->error);
//$row = $res->fetch_object();
//$qtd = $res->num_rows;
//if ($qtd > 0) {
//$_SESSION['usuario'] = $usuario;
//$_SESSION['nome'] = $row->nome;
//$_SESSION['administrador'] = $row->administrador;
//print "<script> location.href = 'welcome.php';</script>";
//} else {
// print "<script>location.href = 'index.php';</script>";
?>