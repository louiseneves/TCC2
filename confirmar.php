<?php
session_start();
include 'conexao.php';
if (isset($_GET['acao']) && $_GET['acao'] === 'finalizar') {
    // Limpa a sessão que armazena os produtos no carrinho
    $_SESSION['carrinho']=array();
    header('Location: index.php');
    // Redireciona o usuário para a página de confirmação ou outra página relevante
    exit; // Encerra o script para evitar execução adicional
}
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
    <div>
        <h3>Encomenda confirmada com sucesso</h3>
        <p>Muito obrigada pela sua encomenda. Seja bem-vindo à nossa loja</p>
        <div>
            <h4>Dados do Pagamento</h4>
            <p>Conta bancária:</p>
            <p>Código da encomenda: <strong><?= $_SESSION['encomenda'] ?></strong></p>
            <p>Total: <strong><?= number_format($_SESSION['total'], 2, ',', '.') ?></strong></p>
        </div>
        <div>
            <a href="?acao=finalizar">Voltar</a>
        </div>
    </div>
</body>

</html>