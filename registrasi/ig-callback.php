<?php
/**
 * Instagram PHP API
 * 
 * @link https://github.com/cosenary/Instagram-PHP-API
 * @author Christian Metz
 */
require 'library/igsdk/src/Instagram.php';
use MetzWeb\Instagram\Instagram;
// initialize class
$instagram = new Instagram(array(
  'apiKey'      => '8096902e520144a2a1a46b546d12de46',
  'apiSecret'   => 'f2ded87d25f2424d95912268e00b3110',
  'apiCallback' => 'http://tri.co.id/ambisiku/registrasi/ig-callback.php'
));

session_start();
$token = false;
if (isset($_SESSION['access_token'])) {
  // user authenticated -> receive and set token
  $token = $_SESSION['access_token'];
} else {
  // receive OAuth code parameter
  $code = $_GET['code'];
  // authentication in progress?
  if (isset($code)) {
    // receive and store OAuth token
    $data = $instagram->getOAuthToken($code);
    $token = $data->access_token;
    $_SESSION['access_token'] = $token;
  } else {
    // check whether an error occurred
    if (isset($_GET['error'])) {
      echo 'An error occurred: ' . $_GET['error_description'];
    }
  }
}
// check authentication
if ($token === false) {
  // authentication failed -> redirect to login
  header('Location: ig-login.php');
} else {
  // store user access token
  $instagram->setAccessToken($token);

  // now we have access to all authenticated user methods
  $media = $instagram->getUser();
  $arrayuser = json_decode(json_encode($media), True);
  $socmeduser = $arrayuser['data']['username'];
  $_SESSION['socmed']='instagram';
  $_SESSION['socmeduser']=$socmeduser;
  
  //redirect to register
  header("Location:form-register.php");
  exit();  
}


?>
