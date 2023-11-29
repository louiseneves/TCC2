<?php
// Include configuration file

// Remove access token from session
include_once 'fbconfig.php';

// Remove access token from session
session_destroy();
unset($_SESSION['fbUserId']);
unset($_SESSION['fbUserName']);
unset($_SESSION['fbAccessToken']);
header('location: https://localhost/TCC2/');
exit;
// Redirect to the homepage
