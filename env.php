<?php
session_start();
//google
$redirectUrl = 'http://localhost/google_login.php';
$client = new Google\Client();
$client->setAuthConfig("your_google_api.json");

$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');
$url = $client->createAuthUrl();
//fb
$fb = new Facebook\Facebook([
    'app_id' => 'your fb app id',
    'app_secret' => 'your fb app secret',
    'default_graph_version' => 'v2.10',
]);
