<?php
session_start();
include_once("conexao.php");
// Verifique se o usuário está autenticado ou tem permissão para editar produtos
// Conexão com o banco de dados
// Verifique se o ID do produto é fornecido na URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $produto_id = $_GET['id'];

    // Verifique se o produto existe no banco de dados
    $query = "SELECT * FROM produto WHERE id = $produto_id";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) == 1) {
        $produto = mysqli_fetch_assoc($result);
    } else {
        echo "Produto não encontrado.";
        exit();
    }
} else {
    echo "ID de produto inválido.";
    exit();
}

// Verifique se o formulário de edição foi submetido
if (isset($_POST['atualizar'])) {
    $novo_nome = $_POST['nome'];
    $nova_marca = $_POST['marca'];
    $nova_descricao = $_POST['descricao'];
    $novo_preco = $_POST['preco'];
    $nova_validade = $_POST['validade'];

    // Atualize o produto no banco de dados
    $query = "UPDATE produto SET nome = '$novo_nome',marca='$nova_marca', descricao = '$nova_descricao', valor = $novo_preco,validade='$nova_validade' WHERE id = $produto_id";
    if (mysqli_query($conexao, $query)) {
        echo "Produto atualizado com sucesso.";
        header('Location:vender.php');
    } else {
        echo "Erro ao atualizar o produto: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Editar Produto</h1>
    </div>
    <form method="POST" action="editar.php?id=<?= $produto_id ?>">
        <div class="card-content">
            <div class="card-content-area">
                <div id="codigo">Codigo: <?php echo $produto_id ?></div>
                <img src="<?= $produto['cover_img']; ?>" class="produtoMinitura" />
                <br>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?= $produto['nome'] ?>"><br>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" value="<?= $produto['marca'] ?>"><br>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao"><?= $produto['descricao'] ?></textarea><br>
                <label for="validade">Validade:</label>
                <input type="date" name="validade" value="<?= $produto['validade'] ?>" disabled><br>
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" name="preco" value="<?= $produto['valor'] ?>"><br>
                <div class="card-footer">
                    <input type="submit" name="atualizar" class="submit" value="Salvar Alterações">
                    <a href="vender.php" class="voltar">Voltar para a lista de produtos</a>
                </div>
    </form>
    </div>
    </div>
</body>

</html>