<?php
include("twitter-config.php");
require 'library/twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

function tweet($token,$token_secret,$url,$imagepath){

//ini musti diganti
//$mediapath =  "/var/www/html/ambisi/".$imagepath;

$mediapath = "img/banner-tri.jpg";
$status     = "Hae ".$url;
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$token,$token_secret);
$media = $connection->upload('media/upload', array('media' => $mediapath));
$parameters = array(
    'status' => $status,
    'media_ids' => implode(',', array($media->media_id_string)),
);
$result = $connection->post('statuses/update', $parameters);
return $result;

}
?>

