<?php

require 'library/igsdk/src/Instagram.php';
use MetzWeb\Instagram\Instagram;
session_start();

if (isset($_SESSION['access_token'])) {
  // user authentication -> redirect to media
  header('Location: register.php');
  $_SESSION['socmed'] ='instagram';
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


?>
