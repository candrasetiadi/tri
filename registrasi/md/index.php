<?php
@session_start();
$actions = $_GET['s'];

include("../library/ppfunction.php");

$id=$_GET['id'];
switch($actions){
   case "dashboard":
	//if login
	include("layout.php");
	break;
   case "approved":
	//if login
	include("approved.php");
	break;
   case "appproc":
	//if login
	//approve
	moderasi($id,1);
	header("Location:?s=dashboard");
	exit();
	break;
   case "rejproc":
	//if login
	//reject
	moderasi($id,2);
	header("Location:?s=dashboard");
	exit();
	break;
   case "dismiss":
        //if login
        //reject
        moderasi($id,99);
        header("Location:?s=approved");
        exit();
        break;
   case "loginprocess":
	//hardcode
   case "loginform":
	//if not login
   case "logout":
	@session_destroy();
	header("Location:?s=dashboard");
	exit();
	break;
   default :
	header("Location:?s=dashboard");
	exit();
	break;
}
//if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

?>
