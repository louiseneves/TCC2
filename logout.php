<?php
// Inicialize a sessão
session_start();
// Remova todas as variáveis de sessão
// Destrua a sessão.
session_destroy();
// Redirecionar para a página de login
header('Location: index.php');
exit();
include_once 'vendor/fbconfig.php';
// Remove access token from session
session_destroy();
unset($_SESSION['fbid']);
unset($_SESSION['fbname']);
unset($_SESSION['facebook_access_token']);
header('Location: index.php');
exit;
include 'vendor/config.php';
$client->revokeToken();
session_destroy();
header('Location: index.php');
exit;
// Include configuration file


// Redirect to the homepage
