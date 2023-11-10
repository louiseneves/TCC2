<?php
include "conexao.php";
if (isset($_POST['id_produto'], $_POST['quantidade']) && is_numeric($_POST['id_produto']) && is_numeric($_POST['quantidade'])) {
    $produto_id = (int)$_POST['id_produto'];
    $quantidade = (int)$_POST['quantidade'];
    $stmt = mysqli_query($conexao, 'SELECT * FROM produto WHERE id = .$produto_id');
    $produto = mysqli_fetch_assoc($stmt);
    if ($produto && $quantidade > 0) {
        if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])) {
            if (array_key_exists($produto_id, $_SESSION['carrinho'])) {
                $_SESSION['carrinho'][$produto_id] += $quantidade;
            } else {
                $_SESSION['carrinho'][$produto_id] = $quantidade;
            }
        } else {
            $_SESSION['carrinho'] = array($produto_id => $quantidade);
        }
    }
}

if (isset($_GET['remover']) && is_numeric($_GET['remover']) && isset($_SESSION['carrinho']) && isset($_SESSION['carrinho'][$_GET['remover']])) {
    unset($_SESSION['carrinho'][$_GET['remover']]);
}

if (isset($_POST['atualizar']) && isset($_SESSION['carrinho'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantidade') !== false && is_numeric($v)) {
            $id = str_replace('quantidade-', '', $k);
            $quantidade = (int)$v;
            if (is_numeric($id) && isset($_SESSION['carrinho'][$id]) && $quantidade > 0) {
                $_SESSION['carrinho'][$id] = $quantidade;
            }
        }
    }
}

if (isset($_POST['fazerpedido']) && isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
}
$produtos_no_carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
$produtos = array();
$subtotal = 0.00;
if ($produtos_no_carrinho) {
    $array_para_pontos_de_interrogacao = implode(',', array_fill(0, count($produtos_no_carrinho), '?'));
    $stmt = mysqli_query($conexao, 'SELECT * FROM produto WHERE id IN (' . $array_para_pontos_de_interrogacao . ')');
    $stmt(array_keys($produtos_no_carrinho));
    $produtos = mysqli_fetch_assoc($stmt);
    // Calculate the subtotal
    foreach ($produtos as $produto) {
        $subtotal += (float)$produto['valor'] * (int)$produtos_no_carrinho[$produto['id']];
    }
}
?>
<?php
/*session_start();
?>
<?php

if (isset($_SESSION['carrinho'])) {
} else {
    $_SESSION['carrinho'] = array();
}
if ($_GET['id']) {
    $produto = $_GET['id'];
    $_SESSION['carrinho'][$produto] = 1;
}
/*
if (isset($_POST['id_produto']) && isset($_POST['nome']) && isset($_POST['valor']) && isset($_POST['quantidade']) && isset($_POST['cover_img'])) {
    $id_produto = $_POST['id_produto'];
    $nome_produto = $_POST['nome'];
    $preco = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $imagem_produto = $_POST['cover_img'];
    $item = array(
        'id' => $id_produto,
        'nome' => $nome_produto,
        'valor' => $preco,
        'quantidade' => $quantidade,
        'cover_img' => $imagem_produto
    );

    // Verificar se o carrinho já existe na sessão
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

    // Verificar se o produto já está no carrinho
    $produtoExistente = false;
    foreach ($_SESSION['carrinho'] as $indice => $itemCarrinho) {
        if (isset($itemCarrinho[$id_produto])) {
            // Atualizar a quantidade do produto existente no carrinho
            $itemCarrinho[$id_produto]['quantidade'] += $quantidade;
            $produtoExistente = true;
            break;
        }
    }
    if (!$produtoExistente) {
        $_SESSION['carrinho'][] = $item;
    }
} else {
    // Se os dados necessários não foram fornecidos, defina um cookie de erro
    setcookie('erro', 'Os dados necessários não foram fornecidos', time() + 3600, '/');
}
function calcularTotalCarrinho()
{
    $total = 0;

    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $item) {
            $subtotal = (float)$item['valor'] * (int)$item['quantidade'];
            $total += $subtotal;
        }
    }

    return $total;
}

/*function calcularTotalCarrinho()
{
    $total = 0;

    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $item) {
            $subtotal = $item['valor'] * $item['quantidade'];
            $total += $subtotal;
        }
    }

    return $total;
}
if (isset($_POST['addcarrinho'])) {
    $id = $_POST['id_produto'];
    $imagem = $_POST['cover_img'];
    $nome = $_POST['nome'];
    $preco = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $produto = array(
        'id' => $id,
        'cover_img' => $imagem,
        'nome' => $nome,
        'valor' => $preco,
        'quantidade' => $quantidade
    );
    $produtoExiste = false;
    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        if ($_SESSION['carrinho']['id_produto'] == $id) {
            // Atualiza a quantidade do produto
            $_SESSION['carrinho'][$id]['quantidade'] += $quantidade;
            $produtoExiste = true;
        }
    }
    if (!$produtoExiste) {
        $_SESSION['carrinho'][] = $produto;
    }
}
if (!empty($_GET['id'])) {
    $product_id = $_GET['id'];
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }
    if (!isset($_SESSION['carrinho'][$product_id])) {
        $_SESSION['carrinho'][$product_id] = 1;
    } else {
        $_SESSION['carrinho'][$product_id] += 1;
    }
}
/*if (isset($_POST['id_produto'])) {
    $id =  $_POST['id_produto'];
    $imagem = $_POST['cover_img'];
    $nome = $_POST['nome'];
    $preco = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $insert = "INSERT INTO vendaproduto VALUES($id,$quantidade)";
    $resultado = mysqli_query($conexao, $insert);
    if ($resultado) {
        echo 'Inserido';
    }
}*/

/*
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conexao, "DELETE FROM vendaproduto WHERE id=$id");
    if ($result) {
        echo "Removido";
    }
}if (!isset($_SESSION))
session_start();
$carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : NULL;
if (!isset($_SESSION['carrinho'])) {
$_SESSION['carrinho'] = array();
}
if (isset($_GET['id'])) {
$idProduto = intval($_GET['id']);
if (!isset($_SESSION['carrinho'][$idProduto])) {
$_SESSION['carrinho'][$idProduto] = 1;
} else {
$_SESSION['carrinho'][$idProduto]['quantidade']++;
}
}
$qtde = 0;
$preco_total = 0;
$linhas = array();
$cont = 0;
foreach ($_SESSION['carrinho'] as $key) {
echo $key;
$sql = "select * from vendaproduto join produto where idProduto ='{$key}';";
$resultado = mysqli_query($conexao, $sql);
$linhas[$cont] = $resultado->num_rows;
if ($linhas[$cont] > 0) {
$linha[$cont] = mysqli_fetch_array($resultado);
echo "Nome................: " . $linha[$cont]['nome'] . "<br>";
echo "Preço...............: " . $linha[$cont]['valor'] . "<br>";
//echo "Categoria...........: ".$linha[$cont][categoria]."<br>";
//echo "DimensÃ£o............: ".$linha[$cont][dimensao]."<br>";
echo "<img src=" . $linha[$cont]['cover_img'] . "> <br>";
echo "<a href='produtos.php'> Voltar para a pÃ¡gina de produtos </a>";
echo "Quantidade: <input type='text' maxlenght='2' name='quantidade' value='quantidade'> ";
echo "<a href='removerCarrinho.php?id_prod=$key'> Remover produto do carrinho </a>";
}
}
//echo 'o produto existe';
if (isset($_SESSION['carrinho'][$idProduto])) {
$_SESSION['carrinho'][$idProduto]['quantidade']++;
$_SESSION['carrinho'][$idProduto] = array(
'id' => ':id', 'cover_img' => ':cover_img', 'nome' => ':produto', 'valor' => ':preco', 'quantidade' => ':quantidade'
);
} else {
$_SESSION['carrinho'][$idProduto] = array(
'id' => ':id', 'cover_img' => ':cover_img', 'nome' => ':produto', 'valor' => ':preco', 'quantidade' => ':quantidade'
);
}
echo '<script>
    alert("O item foi adicionado ao carrinho.");
</script>';
}
//$carrinho = $_SESSION['carrinho'];
//$total_produtos = count($carrinho);
/*if (!isset($_SESSION['carrinho'])) {
$_SESSION['carrinho'] = array();
}
$id_prod = $_GET["id"];
$_SESSION['carrinho'][] = $id_prod;
echo $_SESSION['carrinho'][0];
if (!isset($_SESSION['carrinho'])) {
$_SESSION['carrinho'] = array();
}
$qtde = 0;
$preco_total = 0;
$linhas = array();
$cont = 0;
/*$carrinhoVazio = true;
if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
$carrinhoVazio = false;
}
// Limpa o carrinho
if (isset($_GET['limpar'])) {
unset($_SESSION['carrinho']);
exit;
}
// Calcula o valor total dos itens no carrinho
$valorTotal = 0;
if (!$carrinhoVazio) {
foreach ($_SESSION['carrinho'] as $item) {
$valorTotal += $item['valor'] * $item['quantidade'];
}
}
/*$sql = mysqli_query($conexao, "SELECT * FROM vendaproduto WHERE id_produto = id");
$count = 0;
$total = 0;
while ($result = $sql->fetch_assoc()) {
}
*/
//if (isset($_POST['id_produto'], $_POST['quantidade']) && is_numeric($_POST['id_produto']) && is_numeric($_POST['quantidade'])) {
//$produto_id = (int)$_POST['id_produto'];
// $quantidade = (int)$_POST['quantidade'];
//$stmt = mysqli_query($conexao, 'SELECT * FROM produto WHERE id = "{$produto_id}"');
// $produto = $stmt->fetch_assoc();
//$idproduto = (int) $_POST['id_produto'];
// $quantidade++;
//$insert = mysqli_query($conexao, "INSERT INTO vendaproduto VALUES ('','" . $idproduto . "','" . $quantidade . "','')");
//if ($insert == 1) {
// echo "Inserido com sucesso";
//$count = 0;
//$total = 0;
//if ($linha && $quantidade > 0) {
// Adcionar ao Carrinho
//if (isset($_SESSION['carrinho']) && is_array($_SESSION['carrinho'])) {
// if (array_key_exists($produto_id, $_SESSION['carrinho'])) {
// $_SESSION['carrinho'][$produto_id] += $quantidade;
// } else {
// $_SESSION['carrinho'][$produto_id] = $quantidade;
// }
//} else {
// $_SESSION['carrinho'][$produto_id] = array($produto_id => $quantidade);
//}
// }
// }
/* $produtos_no_carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : array();
$linha = array();
$subtotal = 0.00;
if ($produtos_no_carrinho) {
$array_para_pontos_de_interrogacao = implode(',', array_fill(0, count($produtos_no_carrinho), '?'));
$stmt = mysqli_query($conexao, 'SELECT * FROM produto WHERE id IN (' . $array_para_pontos_de_interrogacao . ')');
$resultado = mysqli_fetch_array($stmt);
// Calculate the subtotal
echo '<p>Nome: ' . $resultado['nome'] . ' | Quantidade: ' . $resultado['quantidade'] . ' | Preço: R$' . ($resultado['quantidade'] * $resultado['valor']) . ',00 </p>';
foreach ($produto as $produtos) {
$subtotal += (float)$produtos['valor'] * (int)$produtos_no_carrinho[$produtos['id']];
}
}
//foreach ($_POST as $key => $value) {
//echo '<p>Nome: ' . $value['nome'] . ' | Quantidade: ' . $value['quantidade'] . ' | Preço: R$' . ($value['quantidade'] * $value['valor']) . ',00 </p>';
//while ($linha = $sql->fetch_assoc()) {*/
$num_itens_no_carrinho = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
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
            <p>Produto <?= $num_itens_no_carrinho ?> </p>
        </div>
        <table>
            <thead>
                <tr>
                    <td colspan="2">Produto</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($produtos)) : ?>
                    <tr>
                        <td colspan="5" style="text-align:center;">Seu carrinho de compras está vazio</td>
                    </tr>
                <?php else : ?>
                    <?php

                    /* if (isset($_GET['id'])) {
            $product_id = $_GET['id'];
            $query = "SELECT * FROM produto WHERE id = $product_id";
            $result = mysqli_query($conexao, $query);
            $produto = mysqli_fetch_assoc($result);
        }
         if ($produto) {
                if (isset($_SESSION['carrinho'])) {
                    $_SESSION['carrinho'][] = $produto;
                } else {
                    $_SESSION['carrinho'] = [$produto];
                }
            }
        }
        $carrinho = isset($_SESSION['carrinho']) ? $_SESSION['carrinho'] : [];
        if (isset($_POST['id2'])) {
            $indice = $_POST['id2'];
            $quant = $_POST['quantidade2'];
            $carrinho[$indice]['quantidade'] = $quant;
        }
        $_SESSION['carrinho'] = $carrinho;



        /*if (isset($_POST['id_produto'])) {
            $id = $_POST['id_produto'];
            $imagem = $_POST['cover_img'];
            $nome = $_POST['nome'];
            $preco = $_POST['valor'];
            $quantidade = $_POST['quantidade'];
            $meucarrinho[] = array('id' => $id, 'cover_img' => $imagem, 'nome' => $nome, 'valor' => $preco, 'quantidade' => $quantidade);
        }

        if (isset($_SESSION['carrinho'])) {
            $meucarrinho = $_SESSION['carrinho'];
            if (isset($_POST['id_produto'])) {
                $id =  $_POST['id_produto'];
                $imagem = $_POST['cover_img'];
                $nome = $_POST['nome'];
                $preco = $_POST['valor'];
                $quantidade = $_POST['quantidade'];
            }
        }
        
        if (!isset($meucarrinho)) $_SESSION['carrinho'] = $meucarrinho;
        if (isset($meucarrinho)) {

if (isset($_POST['id2'])) {
            $indice = $_POST['id2'];
            $quant = $_POST['quantidade2'];
            $meucarrinho[$indice]['quantidade'] = $quant;
        }
        if (isset($_POST['id3'])) {
            $indice = $_POST['id3'];
            $meucarrinho[$indice] = NULL;
        }
            /* foreach ($_SESSION['carrinho'] as $item) {
                $sql = "select * from vendaproduto where idProduto ='{$item}';";
                $resultado = mysqli_query($conexao, $sql);
                $linhas[$cont] = $resultado->num_rows;
                if ($linhas[$cont] > 0) {
                    $linha[$cont] = mysqli_fetch_array($resultado);
                    $qtde_comprada = $_POST["quantidade"];
                    if ($linha[$cont]["qtde_estoque"] < 'qtde_comprada') {
                        echo "<script type='text/javascript'>alert('Quantidade indisponível no estoque!')</script>";
                    }
                    $preco_total += $linha[$cont]['valor'] * 'qtde_comprada';
                           $cont++;
                    */
                    ?>

                    <?php
                    /*$total = 0;
            for ($i = 0; $i < count($meucarrinho); $i++) {
                if ($meucarrinho[$i] <> NULL) {*/
                    ?>
                    <?php
                    $total = 0;
                    /* if ($_SESSION['carrinho'] <> NULL) {*/

                    foreach ($produto as $prod => $quantidade) :
                        /*$sql = mysqli_query($conexao, "SELECT * FROM produto WHERE id = '$prod'");
                        $res = mysqli_fetch_assoc($sql);
                        if ($carrinho <> NULL) {
            $total = 0;
            foreach ($carrinho as $id_produto => $item) {
                $total += ($item['valor'] * $item['quantidade']);
                $_SESSION['dados'] = array();*/
                    ?>
                        <tr>
                            <td class="img">
                                <img src="<?php echo $quantidade['cover_img']; ?>" class="img-carrinho" />
                            </td>
                            <div class="item-carrinho">
                                <div class="linha-da-imagem">
                                    <img src="<?php echo $quantidade['cover_img']; ?>" class="img-carrinho" />
                                </div>
                                </td>
                                <a href="index.php?page=produto&id=<?= $produto['id'] ?>">
                                    <img src="<?= $res['cover_img'] ?>" width="50" height="50" alt="<?= $produto['nome'] ?>">
                                </a>
                                </td>
                                <td>
                                    <a href="index.php?page=produto&id=<?= $produto['id'] ?>"><?= $produto['nome'] ?></a>
                                    <br>
                                    <a href="index.php?page=carrinho&remover=<?= $produto['id'] ?>" class="remover">Remover</a>
                                </td>
                                <td class="preco">R$<?= $produto['valor'] ?></td>
                                <td class="quantidade">
                                    <input type="number" name="quantidade-<?= $produto['id'] ?>" value="<?= $produtos_no_carrinho[$produto['id']] ?>" min="1" max="<?= $produto['quantidade'] ?>" placeholder="Quantidade" required>
                                </td>
                                <td class="preco">R$<?= $produto['valor'] * $produtos_no_carrinho[$produto['id']] ?></td>
                        </tr>

                        <div class="subtotal">
                            <span class="texto">Subtotal</span>
                            <span class="preco">R$<?= $subtotal ?></span>
                        </div>
                        <div class="botoes">
                            <input type="submit" value="Atualizar" name="atualiza">
                            <input type="submit" value="Fazer Pedido" name="fazerpedido">
                        </div>
                        </form>
    </div>
    <p><?= $res['nome']; ?></p>
    <h2>R$ <?= number_format($res['valor'], 2, ',', '.'); ?></h2>
    <form action="?atualizar=1&id=<?= $prod; ?>" method="POST">
        <input type="hidden" name="id2" value="<?= $prod; ?>" />
        <input type="text" name="quantidade2" value="<?= $res['quantidade']; ?>" size="1" maxlength="3" />
        <button type="submit" class="excluir">Atualizar</button>
    </form>
    <form action="remover.php?remover=1&produto_id=<?= $prod; ?>" method="POST">
        <input type="hidden" name="id3" value="<?= $prod; ?>" />
        <button type="submit" class="excluir">Excluir</button>
    </form>
    </div>
<?php
                        $total += $res['valor'] * $quantidade;
                    /*array_push(
                    $_SESSION['dados'],
                    array(
                        'id' => $id_produto,
                        'quantidade' => $item['quantidade'],
                        'valor' => $item['valor'],
                        'total' => $total,
                        'nome' => $item['nome']
                    )
                );*/
                    endforeach;
                endif;
?>

</tbody>
</table>
<div class="rodape">
    <h1>Total</h3>
        <h2>R$ <?= number_format($total, 2, ',', '.') ?></h2>
</div>
<?php

if (isset($_POST['enviar'])) {
    $insertVenda = mysqli_query($conexao, "INSERT INTO venda(Total) VALUES ('$total')");
    $IdVenda = mysqli_insert_id($conexao);
    foreach ($_SESSION['carrinho'] as $prodInsert => $qtd) :
        $insertItens = mysqli_query($conexao, "INSERT INTO vendaproduto(idVenda,idProduto,quantidade) VALUES ('$IdVenda','$prodInsert','$qtd')");
    endforeach;
    echo '<script>alert("Venda concluída com sucesso");</script>';
}
?>
<form action="" enctype="multipart/form-data" method="POST">
    <button class="excluir" name="enviar">Finalizar Compra</button><br><br>
</form>

<form action="index.php">
    <button class="excluir">Continuar comprando</button>
</form>
<?php

/* } else {
                    echo "<div style='color:green; font-size:50px'> Seu carrinho está vazio! <br/><a href='index.php'style='color:green;text-decoration: none'>Adicione um produto</a></div>";
                }*/
?>
</div>
</body>

</html>