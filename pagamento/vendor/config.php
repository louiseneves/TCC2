<?php

use Google\Service\AdExchangeBuyerII\Client;
use Google\Service\TrafficDirectorService\GoogleRE2;


# Add your client ID and Secret
$client_id = "539560169501-o42e2b63c5gdg1v5a43vaoe2n49425uj.apps.googleusercontent.com";
$client_secret = "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";
require('autoload.php');
$client = new Google\Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);

# redirection location is the path to login.php
$redirect_uri = 'http://localhost/TCC2/';
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
$oauth2 = new Google\Service\Oauth2($client);
// Configurações do aplicativo do Google
// URL de redirecionamento após o login
// Inclua a biblioteca do Google API PH
// Escopo para acessar o endereço de e-mail do usuário
if (isset($_GET['code'])) {
    $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    // Redirecione o usuário de volta para a página de login
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    $userInfo = $oauth2->userinfo->get();
    // Aqui, você pode salvar os detalhes do usuário no seu banco de dados ou fazer o que for necessário.
    // Por exemplo, você pode verificar se o usuário já existe no seu banco de dados e, se não, criá-lo.
}
