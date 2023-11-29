<?php
session_start();
include "conexao.php";
if (empty($_SESSION['id'])) {
    header('Location:painel.php');
}
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (!isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id] = 1;
    } else {
        $_SESSION['carrinho'][$id] += 1;
    }
}
if (isset($_GET['atualizar'])) {
    if (is_array($_POST['id2'])) {
        foreach ($_POST['id2'] as $id => $qtd) {
            $id  = intval($id);
            $qtd = intval($qtd);
            if (!empty($qtd) || $qtd <> 0) {
                $_SESSION['carrinho'][$id] = $qtd;
            } else {
                unset($_SESSION['carrinho'][$id]);
            }
        }
    }
}
if (isset($_GET['remover'])) {
    $indice = $_POST['id3'];
    if (isset($_SESSION['carrinho'][$indice])) {
        unset($_SESSION['carrinho'][$indice]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu carrinho</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Meu carrinho</h1>
    </div>
    <div class="barra">
        <div class="topoCarrinho">
            <?php
            $num_itens_no_carrinho = count($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
            ?>
            <p>Produto <?php echo  $num_itens_no_carrinho;  ?> </p>
        </div>
        <?php
        $subtotal = 0;
        $total = 0;
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
        }
        if (count($_SESSION['carrinho']) == 0) {
            echo "<div style='color:green; font-size:50px'> Seu carrinho está vazio! <br/><a href='index.php'style='color:green;text-decoration: none'>Adicione um produto</a></div>";
        } else {
            foreach ($_SESSION['carrinho'] as $id => $item) {
                $cart_query = mysqli_query($conexao, "SELECT * FROM produto WHERE id ='$id'") or die('query failed');
                $cart = mysqli_fetch_assoc($cart_query);
        ?>
                <div class="item-carrinho">
                    <div class="linha-da-imagem">
                        <img src="<?php echo $cart['cover_img']; ?>" class="img-carrinho" />
                    </div>
                    <p><?= $cart['nome']; ?></p>
                    <h2>R$ <?= number_format($cart['valor'], 2, ',', '.'); ?></h2>
                    <form action="?atualizar=1&id=<?= $id ?>" method="POST">
                        <input type="hidden" name='quanti2' value="<?= $id ?>" size="1" maxlength="2" />
                        <input type="text" name='id2[<?= $id; ?>]' value="<?= $item; ?>" size="1" maxlength="2" />
                        <button type="submit" class="excluir">Atualizar</button>
                    </form>
                    <form action="?remover=1&produto_id=<?= $id; ?>" method="POST">
                        <input type="hidden" name="id3" value="<?= $id; ?>" />
                        <button type="submit" class="excluir">Excluir</button>
                    </form>
                    <?php
                    $subtotal = $cart['valor'] * $item;
                    $total += $subtotal;
                    ?>
                </div>
        <?php
            }
        }

        ?>
        <div class="rodape">
            <h1>Total</h3>
                <h2>R$ <?= number_format($total, 2, ',', '.') ?></h2>
        </div>
        <?php

        ?>
        <?php
        if (count($_SESSION['carrinho']) > 0) {
        ?>
            <form action="encomenda.php" enctype="multipart/form-data" method="POST">
                <button class="excluir" name="enviar">Finalizar Compra</button><br><br>
            </form>
        <?php
        }
        ?>
        <form action="index.php">
            <button class="excluir">Continuar comprando</button>
        </form>
    </div>
</body>

</html>