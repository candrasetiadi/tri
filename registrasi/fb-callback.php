<?php
@session_start();
require_once __DIR__ . '/library/fbsdk/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1680709238846747', // Replace {app-id} with your app id
  'app_secret' => '96c28e82f2e948692e7d8a2d3460f39e',
  'default_graph_version' => 'v2.5',
  ]);


if(empty($_REQUEST['code'])){
  header("Location:clearall.php");
  exit();
}

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  //echo 'Graph returned an error: ' . $e->getMessage();
  //exit;
  header("Location:clearall.php");
  exit();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  //echo 'Facebook SDK returned an error: ' . $e->getMessage();
  //exit;
  header("Location:clearall.php");
  exit();
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['access_token'] = (string) $accessToken;

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', $_SESSION['access_token']);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  //echo 'Graph returned an error: ' . $e->getMessage();
  //exit;
   header("Location:clearall.php");
   exit();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  //echo 'Facebook SDK returned an error: ' . $e->getMessage();
  //exit;
  header("Location:clearall.php");
  exit();
}

$user = $response->getGraphUser();
$_SESSION['socmeduser']=$user['name'];
$_SESSION['socmed'] = 'facebook';

header("Location:form-register.php");
exit();
}//end access token

?>
