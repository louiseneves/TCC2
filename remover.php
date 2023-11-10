<?php
session_start();
$produto_id = $_GET['produto_id'];
if (isset($_GET['remover']) && $_GET['remover'] == "1") {
    unset($_SESSION['carrinho'][$produto_id]);
    header('Location: carrinho.php');
}
