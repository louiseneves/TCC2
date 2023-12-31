<?php
include_once('fbconfig.php');
try {
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit();
} catch (\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit();
}

if (!isset($accessToken)) {
    header("Location: ./index.php");
    exit();
}

if (!$accessToken->isLongLived()) {
    // Exchanges a short-lived access token for a long-lived one
    try {
        $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
        exit;
    }
}

//$fb->setDefaultAccessToken($accessToken);

# These will fall back to the default access token
$res    =   $fb->get('/me', $accessToken->getValue());
$fbUser =   $res->getDecodedBody();


$resImg     =   $fb->get('/me/picture?type=large&redirect=false', $accessToken->getValue());
$picture    =   $resImg->getGraphObject();


$_SESSION['fbUserId']       =   $fbUser['id'];
$_SESSION['fbUserName']     =   $fbUser['name'];
$_SESSION['fbAccessToken']  =   $accessToken->getValue();

header('Location: ./index.php');
exit;
