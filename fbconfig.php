<?php

use Facebook\Facebook;

require_once "vendor/autoload.php";

$fbAppId = '617928143650236';
$fbAppSecret = '41d004cb29c5672c4fc362e2a096164b';
$googleClientId = "539560169501-o42e2b63c5gdg1v5a43vaoe2n49425uj.apps.googleusercontent.com";
$googleClientSecret = "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";
$fbRedirectUri = 'http://localhost/TCC2/';
$googleRedirectUri = 'http://localhost/TCC2/';


// Autenticação com o Facebook
$fb = new \Facebook\Facebook([
    'app_id' => $fbAppId,
    'app_secret' => $fbAppSecret,
    'default_graph_version' => 'v18.0'
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email'];
try {
    if (isset($_SESSION['facebook_access_token'])) {
        $accessToken = $_SESSION['facebook_access_token'];
    } else {
        $accessToken = $helper->getAccessToken();
    }
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
if (!isset($accessToken)) {
    $loginUrl = $helper->getLoginUrl($fbRedirectUri, $permissions);
} else {
    $loginUrl = $helper->getLoginUrl($fbRedirectUri, $permissions);
    if (isset($_SESSION['facebook_access_token'])) {
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    } else {
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        $oAuth2Client = $fb->getOAuth2Client();
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    try {
        $profile_request = $fb->get('/me?fields=name, first_name, last_name, email');
        $requestPicture = $fb->get('/me/picture?redirect=false&height=200');
        $picture = $requestPicture->getGraphUser();
        $profile = $profile_request->getGraphUser();
        $fbid = $profile->getProperty('id');
        $fbfullname = $profile->getProperty('name');
        $fbemail = $profile->getProperty('email');
        $fbpic = "<img src='" . $picture['url'] . "' class='img-rounded'/>";
        $_SESSION['fbid'] = $fbid . '</br>';
        $_SESSION['fbname'] = $fbfullname . '</br>';
        $_SESSION['fbemail'] = $fbemail . '</br>';
        $_SESSION['fbpic'] = $fbpic . '</br>';
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        header('Location:./');
        exit;
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
}
// If we don't have an authorization code then get on
// Optional: Now you have a token you can look up a users profile data


// Aqui, você pode salvar os detalhes do usuário no seu banco de dados ou fazer o que for necessário.
// Por exemplo, você pode verificar se o usuário já existe no seu banco de dados e, se não, criá-lo.
?>
<a href="?login_provider=facebook<?php echo $loginUrl; ?>">Facebook</a>
<a href="<?php echo $authUrl; ?>">Google</a>