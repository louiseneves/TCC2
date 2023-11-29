<?php
session_start();
include "conexao.php";
$codigo = "";
$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ";
$codigo .= substr(str_shuffle($chars), 0, 2);
$codigo .= rand(100000, 999999);
$data = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finalizar compra</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="card-header">
        <h1 class="h1">A sua encomenda - resumo</h1>
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
        $id_user = $_SESSION["id"];
        foreach ($_SESSION['carrinho'] as $id => $item) {
            $cart_query = mysqli_query($conexao, "SELECT * FROM produto WHERE id ='$id'") or die('query failed');
            $cart = mysqli_fetch_assoc($cart_query);
            $total = $cart['valor'] * $item;
            $insert = mysqli_query($conexao, "INSERT INTO venda (codigo_encomenda,idUsuario,Total,data,idProduto,quantidade) VALUES ('$codigo','$id_user','$total','$data','$id','$item')");
        ?>
            <div class="item-carrinho">
                <div class="linha-da-imagem">
                    <img src="<?php echo $cart['cover_img']; ?>" class="img-carrinho" />
                </div>
                <p><?= $cart['nome']; ?></p>
                <h2>R$ <?= number_format($cart['valor'], 2, ',', '.'); ?></h2>
                <input type="text" name="quantidade2" value="<?= $item; ?>" size="1" maxlength="2" />
            </div>
        <?php
            $select = mysqli_query($conexao, "SELECT * FROM usuario WHERE id = '$id_user'");
            $dados_cliente = mysqli_fetch_object($select);
            $_SESSION['encomenda'] = $codigo;
            $_SESSION['total'] = $total;
        }
        ?>

        <div class="rodape">
            <h1>Total</h3>
                <h2>R$ <?= number_format($total, 2, ',', '.') ?></h2>
        </div>
        <div class="cliente">
            <h1>Onde você deseja receber seu pedido?</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="cadastrar_endereco.php" method="post">
                    <h1>Novo Endereço</h1>
                    <button>Cadastrar</button>
                </form>
            </div>
        </div>
        <h5 class="cliente">Dados do cliente</h5>
        <div class="row">
            <div class="col">
                <p>Nome: <strong><?= $dados_cliente->nome; ?></strong></p>
                <p>Endereço: <strong><?= $dados_cliente->endereco; ?></strong></p>
            </div>
        </div>
        <h5 class="cliente">Escolha a forma de pagamento</h5>
        <div class="row">
            <div class="col">
                <p><a href="pagamentopix.php">Pagar com Pix</a></p>
                <p><a href="pagamento.php">Pagar com Cartão Débito</a></p>
                <p><a href="pagamento.php">Pagar com Cartão Crédito</a></p>
                <p><a href="boleto.php">Pagar com Boleto Bancário</a></p>
            </div>
        </div>
        <h5 class="cliente">Dados do pagamento</h5>

        <div class="row">
            <div class="col">
                <p>Código da encomenda: <strong><?= $codigo ?></strong></p>
                <p>Total: <strong><?= number_format($total, 2, ',', '.') ?></strong></p>
            </div>
        </div>
        <div>
            <form action="carrinho.php">
                <button>Cancelar</button>
            </form>
        </div>
        <div>
            <form action="confirmar.php" enctype="multipart/form-data" method="POST">
                <button>Continuar</button>
            </form>
        </div>
</body>

</html>