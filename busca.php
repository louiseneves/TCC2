<?php
include 'conexao.php';
$nome_produto = mysqli_real_escape_string($conexao, $_GET['pesquisa']);
if (!isset($nome_produto)) {
    $sql = mysqli_query($conexao, "SELECT * FROM produto ORDER BY id DESC");
} else {
    $sql = mysqli_query($conexao, "SELECT * FROM produto WHERE id LIKE '%$nome_produto%' OR nome LIKE '%$nome_produto%' ORDER BY id DESC");
    if (mysqli_num_rows($sql) == 0) {
        echo "Nenhum resultado encontrado";
    } else {
        foreach ($sql as $busca) {
?>
            <form action="carrinho.php" method="POST">
                <div class="corpo-produto">
                    <div class="imgProduto">
                        <a href="informacao.php?id=<?php echo $busca['id']; ?>&imagem=<?php echo $busca['cover_img']; ?>&nome=<?php echo $busca['nome']; ?>&preco=<?php echo $busca['valor']; ?>&descricao=<?php echo $busca['descricao']; ?>&quantidade=1">
                            <img src="<?= $busca['cover_img']; ?>" class="produtoMinitura" /></a>
                    </div>
                    <div class="titulo">
                        <p> <?= $busca['nome']; ?></p>
                        <h2>R$ <?= number_format($busca['valor'], 2, ',', '.'); ?></h2>
                    </div>
                </div>
            </form>
<?php
        }
    }
}
