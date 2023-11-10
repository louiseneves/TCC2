<?php
session_start();
include 'conexao.php';
// Verifica se o produto foi adicionado ao carrinho através do link
if (!empty($_GET['adicionar'])) {
    $imagem = $_GET['imagem'];
    $nome = $_GET['nome'];
    $preco = $_GET['valor'];
    $quantidade = $_GET['quantidade'];
    $descricao = $_GET['descricao'];
    $produto = array(
        'imagem' => $imagem,
        'nome' => $nome,
        'valor' => $preco,
        'quantidade' => $quantidade,
        'descricao' => $descricao
    );

    // Verifica se o produto já está no carrinho
    $produtoExiste = false;
    if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $index => $item) {
            if ($item['nome'] == $nome) {
                // Atualiza a quantidade do produto
                $_SESSION['carrinho'][$index]['quantidade'] += $quantidade;
                $produtoExiste = true;
                break;
            }
        }
    }

    // Se o produto não existir no carrinho, adicione-o
    if (!$produtoExiste) {
        $_SESSION['carrinho'][] = $produto;
    }

    echo "<script>
    alert('Produto adicionado ao carrinho!');
</script>";
    echo "<script>
    window.location.href = 'carrinho.php';
</script>";
    exit;
}
?>
<!-- Sessão do produto -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Detalhes do produto</h1>
    </div>
    <main>
        <section>
            <div class="containerProduto">
                <div class="left-side">
                    <div class="items">
                        <div class="select-image">
                            <img src=" <?php echo $_GET['imagem']; ?>" />
                        </div>
                        <div class="images">
                            <div class="image">
                                <img src=" <?php echo $_GET['imagem']; ?>" />
                            </div>
                            <div class="image">
                                <img src=" <?php echo $_GET['imagem']; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="content">
                        <h6>Produto ID: <?php echo $_GET['id']; ?></h6>
                        <h1><?php echo $_GET['nome']; ?></h1>
                        <p><?php echo $_GET['descricao']; ?></p>
                        <div class="prices">
                            <span class="price">Preço: R$<?php echo $_GET['preco']; ?></span>
                            <span class="off">Preço: R$<?php echo $_GET['preco']; ?></span>
                        </div>
                        <div class="options">
                            <div class="amount">
                                <div class="minus">
                                    <img src="imagens/minus-big-symbol.png">
                                </div>
                                <span><?php echo $_GET['quantidade']; ?></span>
                                <div class="plus">
                                    <img src="imagens/alem-disso-positivo-adicionar-simbolo-matematico.png" title="mais ícones">
                                </div>
                            </div>
                            <a class="botao" href="?adicionar=1&imagem=<?php echo $_GET['imagem']; ?>&nome=<?php echo $_GET['nome']; ?>&preco=<?php echo $_GET['preco']; ?>&descricao=<?php echo $_GET['descricao']; ?>&quantidade=<?php echo $_GET['quantidade']; ?>">
                                <img src="imagens/vista-lateral-vazia-do-carrinho-de-compras.png">
                                Adicionar ao carrinho
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
</body>

</html>