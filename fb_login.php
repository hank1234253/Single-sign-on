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
  
  $accessToken = $_SESSION['facebook_access_token'];

  try {
    // Get the \Facebook\GraphNodes\GraphUser object for the current user.
    // If you provided a 'default_access_token', the '{access-token}' is optional.
    $response = $fb->get('me?fields=id,name,email', $accessToken);
  } catch (\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch (\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }

  $me = $response->getGraphUser();
  echo $me->getId();
  echo "<br>";
  echo $me->getName();
  echo "<br>";
  echo $me->getEmail();

  ?>
</body>

</html>