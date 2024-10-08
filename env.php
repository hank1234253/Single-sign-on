<?php
session_start();
$google_redirectUrl = 'http://localhost/google_login.php';
$fb_redirectUrl='http://localhost/fb_login.php';
//google
$client = new Google\Client();
$client->setAuthConfig("your_google_api.json");


$client->setRedirectUri($google_redirectUrl);
$client->addScope('profile');
$client->addScope('email');

//fb
$fb = new Facebook\Facebook([
    'app_id' => 'your fb app id',
    'app_secret' => 'your fb app secret',
    'default_graph_version' => 'v2.10',
]);
$helper = $fb->getRedirectLoginHelper();