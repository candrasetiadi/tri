<?php
function facebookpost($url,$description,$access_token){
require_once __DIR__ . '/library/fbsdk/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1680709238846747', // Replace {app-id} with your app id
  'app_secret' => '96c28e82f2e948692e7d8a2d3460f39e',
  'default_graph_version' => 'v2.5',
  ]);

$linkData = [
  'link' => $url,
  'message' => $description,
  ];

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->post('/me/feed', $linkData, $access_token);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$graphNode = $response->getGraphNode();
//return $graphNode['id'];
return true;
}//end function
?>
