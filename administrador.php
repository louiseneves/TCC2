<?php
session_start();
require_once 'conexao.php';
//require 'vendor/fbconfig.php';
//require 'vendor/config.php';
//$carrinho = filter_input_array(INPUT_GET, FILTER_DEFAULT);
//$items = array($carrinho);
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
    <?php
    if (empty($_SESSION['administrador']) || $_SESSION['administrador'] != 'admin') {
        header("Location: index.php");
    }
    ?>
    <div class="card-header">
        <a href="index.php" class="menu">Home</a>
        <?php
        $sql = mysqli_query($conexao, "SELECT * FROM produto");

        while ($produto = mysqli_fetch_array($sql)) {
        ?>
            <form action="busca.php?nome=<?= $produto['nome']; ?>">
            <?php
        }
            ?>
            <div class="cabecalho">
                <input type="search" name="pesquisa" class="pesquisa" id="pesquisa" placeholder="O que você está buscando?">
                <button type="submit">
                    <img src="imagens/lupa.png">
                    <!--&#128269;-->
                </button>
            </div>
            </form>
            <a href="vender.php" class="menu">Vender</a>
            <?php
            //|| !isset($_SESSION['access_token'], $_SESSION['fbAccessToken'])
            if (empty($_SESSION["id"])) {
                echo "<a href='painel.php' class='menu'>Entrar</a>";
            } else {
                if ($_SESSION['administrador'] == 'user') {
            ?>
                    <h1 class='menu'><?php echo $_SESSION['usuario']; ?></h1>
                    <a href='conta.php' class='menu'>Minha conta</a>
            <?php
                } else {
                    echo "<a href='conta.php' class='menu'>Minha conta</a>";
                    echo "<a href='administrador.php' class='menu'>Administrador</a>";
                }
            }
            ?>
            <a href="pedidos.php" class="menu">Meus pedidos</a>
            <p>
                <a href="carrinho.php" class="menu" name="addcarrinho">
                    <img src='imagens/vista-lateral-vazia-do-carrinho-de-compras.png' class="carrinho" />
                    <?php
                    $num_itens_no_carrinho = count($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
                    ?>
                    <span><?php echo $num_itens_no_carrinho; ?></span>
                </a>
            </p>
            <a href="logout.php" class="menu">Sair</a>
    </div>
    <div class="card-footer">
        <a href="valida.php" class="cancelar"> Usuário</a>
        <a href="vendas.php" class="cancelar"> Vendas</a>
        <a href="pagamentos.php" class="cancelar"> Pagamentos</a>
    </div>
    <div>
    </div>


</body>

</html>