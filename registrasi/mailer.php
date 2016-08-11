<?php
include("library/ppfunction.php");

$email_to = $_POST['e'];
$nama	  = $_POST['n'];


//$email = "azis.az@gmail.com";
//$nama  = "Abdul Azis";
@send_mail($e,$n);
?>
