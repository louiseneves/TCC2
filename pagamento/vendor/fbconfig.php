<?php

use Facebook\Facebook;

require_once "autoload.php";

$fbAppId = '617928143650236';
$fbAppSecret = '41d004cb29c5672c4fc362e2a096164b';
//Url de retorno ';
// Autenticação com o Facebook
$fb = new \Facebook\Facebook([
    'app_id' => $fbAppId,
    'app_secret' => $fbAppSecret,
    'default_graph_version' => 'v18.0',
]);
$helper = $fb->getRedirectLoginHelper();



// If we don't have an authorization code then get on
// Optional: Now you have a token you can look up a users profile data


// Aqui, você pode salvar os detalhes do usuário no seu banco de dados ou fazer o que for necessário.
// Por exemplo, você pode verificar se o usuário já existe no seu banco de dados e, se não, criá-lo.
