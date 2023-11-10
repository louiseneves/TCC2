<?php
session_start();
include_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card-header">
        <h1 class="h1">Cadastro do Produto</h1>
    </div>
    <?php
    if (isset($_POST['criarProduto'])) {
        // Recupera os dados dos campos
        $produto = $_POST['produto'];
        $marca = $_POST['marca'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $validade = $_POST['validade'];
        $quantidade = $_POST['quantidade'];
        if (isset($_FILES['cover_img']) && !empty($_FILES['cover_img'])) {
            $imagem = "./imagens/" . $_FILES['cover_img']['name'];
            move_uploaded_file($_FILES['cover_img']['tmp_name'], $imagem);
        } else {
            $imagem = "";
        }
        $sql =  mysqli_query($conexao, "INSERT INTO produto  VALUES ('','" . $imagem . "','" . $produto . "','" . $marca . "','" . $descricao . "','" . $preco . "','" . $validade . "')");
        if ($sql == 1) {
            header("Location: vender.php");
        } else {
            echo "ERRO: Não foi cadastrado!";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="card" enctype="multipart/form-data">

        <div class="card-content">
            <div class="card-content-area">
                <label for="produto">Nome do Produto</label>
                <input type="text" name="produto" id="produto" class="form-control" required>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" required>
                </div>
                <div class="card-content">
                    <div class="card-content-area">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control" required>
                    </div>
                    <div class="card-content">
                        <div class="card-content-area">
                            <label for="preco">Preço</label>
                            <input type="number" name="preco" id="preco" class="form-control" placeholder="R$" required>
                        </div>
                        <div class="card-content">
                            <div class="card-content-area">
                                <label for="validade">Validade</label>
                                <input type="date" name="validade" id="validade" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="sr-only" for="cover_img">Imagem do Produto:</label>
                                <input class="form-control input-adm" type="file" name="cover_img" placeholder="Anexar imagem">
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="criarProduto" class="submit">
                            </div>
                            <div class="card-footer">
                                <a href="vender.php" class="cancelar">Cancelar</a>
                            </div>
    </form>
    </div>
</body>

</html>