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
                echo "<a href='pedidos.php' class='menu'>Meus pedidos</a>";
                echo "<p>";
                echo "<a href='carrinho.php' class='menu' name='addcarrinho'>
                <img src='imagens/vista-lateral-vazia-do-carrinho-de-compras.png' class='carrinho' />";
                function countItems()
                {
                    return count($_SESSION['carrinho']);
                }
                echo '<span>'; echo countItems(); '</span>';
                echo '</a>';
                echo '</p>';
                echo '<a href="logout.php" class="menu">Sair</a>';
            } else {
                if ($_SESSION['administrador'] == 'user') {
            ?>
                    <h1 class='menu'><?php echo $_SESSION['usuario']; ?></h1>
                    <a href='conta.php' class='menu'>Minha conta</a>
                    <a href="pedidos.php" class="menu">Meus pedidos</a>
                    <p>
                        <a href="carrinho.php" class="menu" name="addcarrinho">
                            <img src='imagens/vista-lateral-vazia-do-carrinho-de-compras.png' class="carrinho" />
                            <?php
                            function countItems()
                            {
                                return count($_SESSION['carrinho']);
                            }
                            ?>
                            <span><?php echo countItems() ?></span>
                        </a>
                    </p>
                    <a href="logout.php" class="menu">Sair</a>
            <?php
                } else {
                    echo "<a href='conta.php' class='menu'>Minha conta</a>";
                    echo "<a href='administrador.php' class='menu'>Administrador</a>";
                    echo "<a href='pedidos.php' class='menu'>Meus pedidos</a>";
                    echo "<p>";
                    echo "<a href='carrinho.php' class='menu' name='addcarrinho'>
                    <img src='imagens/vista-lateral-vazia-do-carrinho-de-compras.png' class='carrinho' />";
                    function countItems()
                    {
                        return count($_SESSION['carrinho']);
                    }
                    echo '<span><?php echo countItems() ?></span>';
                    echo '</a>';
                    echo '</p>';
                    echo '<a href="logout.php" class="menu">Sair</a>';
                }
            }
            ?>

    </div>
    <div class="container">
        <div class="linha-produto">
            <?php
            $sql = mysqli_query($conexao, "SELECT * FROM produto");
            while ($produto = mysqli_fetch_array($sql)) {
            ?>
                <form action="carrinho.php?id=<?php echo $produto['id']; ?>" method="POST">
                    <div class="corpo-produto">
                        <div class="imgProduto">
                            <a href="informacao.php?id=<?php echo $produto['id']; ?>&imagem=<?php echo $produto['cover_img']; ?>&nome=<?php echo $produto['nome']; ?>&preco=<?php echo $produto['valor']; ?>&descricao=<?php echo $produto['descricao']; ?>&quantidade=1"><img src="<?= $produto['cover_img']; ?>" class="produtoMinitura" /></a>
                        </div>
                        <div class="titulo">
                            <p> <?= $produto['nome']; ?></p>
                            <h2>R$ <?= number_format($produto['valor'], 2, ',', '.'); ?></h2>
                            <input type="hidden" name="id_produto" value="<?= $produto['id']; ?>">
                            <input type="hidden" name="valor" value="<?= $produto['valor']; ?>">
                            <input type="hidden" name="nome" value="<?= $produto['nome']; ?>">
                            <input type="number" value="1">
                            <input type="hidden" name="cover_img" value="<?= $produto['cover_img']; ?>">

                            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>

                        </div>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>