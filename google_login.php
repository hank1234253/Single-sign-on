<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'vendor/autoload.php';
    include_once "env.php";

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $gAuth = new Google\Service\Oauth2($client);
    $google_info = $gAuth->userinfo->get();

    $id = $google_info->id;
    $email = $google_info->email;
    $name = $google_info->name;
    echo $id;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    ?>
</body>

</html>