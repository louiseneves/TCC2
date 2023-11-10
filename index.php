<?php
session_start();
require_once 'conexao.php';
//$carrinho = filter_input_array(INPUT_GET, FILTER_DEFAULT);
//$items = array($carrinho);
$num_itens_no_carrinho = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
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
        <form action="pesquisa.php">
            <div class="cabecalho">
                <input type="search" name="pesquisa" class="pesquisa" placeholder="O que você está buscando?">
                <button type="submit">
                    <img src="imagens/lupa.png">
                    <!--&#128269;-->
                </button>
            </div>
        </form>
        <a href="vender.php" class="menu">Vender</a>
        <?php
        if (!isset($_SESSION["usuario"], $_SESSION['fbname'])) {
            echo "<a href='painel.php' class='menu'>Entrar</a>";
        } else {
            echo "<a href='conta.php' class='menu'>Minha conta</a>";
        ?>
            <div>
                <h1>Olá,<?php echo $_SESSION['usuario']; ?></h1>
            </div>
            <?php
            if (isset($_SESSION['access_token'])) {
            ?>
                <ul>
                    <li><img src="<?= $userInfo['picture']; ?>"></li>
                    <li><strong>ID:</strong> <?= $userInfo['id']; ?></li>
                    <li><strong>Full Name:</strong> <?= $userInfo['givenName']; ?> <?= $userInfo['familyName']; ?></li>
                    <li><strong>Email:</strong> <?= $userInfo['email']; ?></li>
                </ul>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION['fbname'])) {
            ?>
                <div>
                    <div>
                        <h1>Olá <?php echo $_SESSION['fbname']; ?></h1>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        }
        ?>
        <a href="pedidos.php" class="menu">Meus pedidos</a>

        <p>
            <a href="carrinho.php" class="menu" name="addcarrinho">
                <img src='imagens/vista-lateral-vazia-do-carrinho-de-compras.png' class="carrinho" />
                <span><?php echo $num_itens_no_carrinho; ?></span>
            </a>
        </p>
        <a href="logout.php" class="menu">Sair</a>
    </div>
    <div class="container">
        <div class="linha-produto">
            <?php
            $sql = mysqli_query($conexao, "SELECT * FROM produto");
            foreach ($sql as $key => $produto) {
            ?>
                <form action="carrinho.php?id=<?php echo $key ?>" method="POST">
                    <div class="corpo-produto">
                        <div class="imgProduto">
                            <a href="informacao.php?id=<?php echo $produto['id']; ?>&imagem=<?php echo $produto['cover_img']; ?>&nome=<?php echo $produto['nome']; ?>&preco=<?php echo $produto['valor']; ?>&descricao=<?php echo $produto['descricao']; ?>&quantidade=<?php echo $produto['quantidade']; ?>"><img src="<?= $produto['cover_img']; ?>" class="produtoMinitura" /></a>
                        </div>
                        <div class="titulo">
                            <p> <?= $produto['nome']; ?></p>
                            <h2>R$ <?= number_format($produto['valor'], 2, ',', '.'); ?></h2>
                            <input type="hidden" name="id_produto" value="<?= $produto['id']; ?>">
                            <input type="hidden" name="valor" value="<?= $produto['valor']; ?>">
                            <input type="hidden" name="nome" value="<?= $produto['nome']; ?>">
                            <input type="hidden" name="quantidade" value="<?php $produto['quantidade']; ?>">
                            <input type="hidden" name="cover_img" value="<?= $produto['cover_img']; ?>">
                            <?php
                            if ($produto['quantidade'] > 0) {
                            ?>

                                <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
                            <?php
                            } else { ?>
                                <button type="submit" class="button">Indisponível</button>
                            <?php
                            }
                            ?>
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
</body>

</html>