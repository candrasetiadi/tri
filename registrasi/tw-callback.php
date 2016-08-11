<?php
  session_start();
  require 'library/twitteroauth/autoload.php';
  use Abraham\TwitterOAuth\TwitterOAuth;

  include("twitter-config.php");

$request_token = [];
$request_token['oauth_token'] = $_SESSION['oauth_token'];
$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];


if(empty($_REQUEST['oauth_verifier'])){
    header('Location: tw-clear.php');
    exit();
}

if (isset($_REQUEST['denied'])) {
    exit('Permission was denied. Please start over.');
}

if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
    $_SESSION['oauth_status'] = 'oldtoken';
    header('Location: tw-clear.php');
    exit;
}
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
$access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST['oauth_verifier']]);

if (200 == $connection->getLastHttpCode()) {
    $_SESSION['access_token'] = $access_token;
    $_SESSION['socmed'] = 'twitter';
    unset($_SESSION['oauth_token']);
    unset($_SESSION['oauth_token_secret']);
    header("Location:form-register.php");
    exit();

} else {
    header('Location: tw-clear.php');
    exit;
}

?>
