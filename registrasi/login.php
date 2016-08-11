<?php
@session_start();

//Twitter
require 'library/twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;
require 'library/igsdk/src/Instagram.php';
use MetzWeb\Instagram\Instagram;

$s=$_GET['s'];

if($s=="twitter"){

include("twitter-config.php");
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
header("Location:$url");

}//end twitter

elseif($s=="facebook"){

require_once __DIR__ . '/library/fbsdk/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1680709238846747', // Replace {app-id} with your app id
  'app_secret' => '96c28e82f2e948692e7d8a2d3460f39e',
  'default_graph_version' => 'v2.5',
  ]);

$helper = $fb->getRedirectLoginHelper();

//$permissions = ['publish_actions']; // Optional permissions
//$loginUrl = $helper->getLoginUrl('http://ambisi.codeinc.id/fb-callback.php', $permissions);
$loginUrl = $helper->getLoginUrl('http://ambisi.codeinc.id/fb-callback.php');
header("Location:$loginUrl");
exit();
}//end facebook

elseif($s=="instagram"){
if (isset($_SESSION['access_token'])) {
  // user authentication -> redirect to media
  header("Location:ig-callback.php");
  exit();
  //header('Location: form-register.php');
  //$_SESSION['socmed'] ='instagram';
}else{
// initialize class
$instagram = new Instagram(array(
  'apiKey'      => '8096902e520144a2a1a46b546d12de46',
  'apiSecret'   => 'f2ded87d25f2424d95912268e00b3110',
  'apiCallback' => 'http://tri.co.id/ambisiku/registrasi/ig-callback.php'
));
// create login URL
$loginUrl = $instagram->getLoginUrl(array(
  'basic',
  'likes',
  'relationships'
));

   //redirect to login screen
   header("Location:$loginUrl");
   exit();
}//end session check


}//end instagram
elseif($s=="google"){


require_once 'library/gapi/src/Google/autoload.php';
require_once 'library/gapi/src/Google/Service/Plus.php';

$client = new Google_Client();
$client->setAuthConfigFile('client_secrets.json');
$client->addScope('https://www.googleapis.com/auth/plus.login');
$client->addScope('https://www.googleapis.com/auth/plus.me');
$client->addScope('https://www.googleapis.com/auth/plus.stream.write');

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  //$plus = new \Google_Service_Plus($client);
  //$person = $plus->people->get('me');
  //$_SESSION['socmeduser']=$person['displayName'];
  //echo $person;
  //exit();
  header("Location:g-callback.php");
  exit();
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/g-callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}


}//end google
else{
//
header("Location:clearall.php");
exit();
}//end else

?>
