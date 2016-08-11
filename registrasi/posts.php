<?php
@session_start();
//Include the database connection file
include "library/ppfunction.php"; 

//musti cek udah kesubmit apa belum

     		$nama 	    = $_POST['nama'];
        	$kota 	    = $_POST['kota'];
       		$nohp 	    = $_POST['nohp'];
        	$email	    = $_POST['email'];
        	$ambisimu   = $_POST['ambisimu'];
        	$deskripsi  = $_POST['deskripsi'];
        	$url        = $_POST['url'];
        	$alasan     = $_POST['alasan'];
		$socmed	    = $_SESSION['socmed'];

		if($socmed=='twitter'){
		   $access_token = $_SESSION['access_token'];
		   $socmeduser = $access_token['screen_name'];
		   $token      = json_encode($_SESSION['access_token']);
		}//end twitter
		elseif($socmed=='facebook'){
		   $token = $_SESSION['access_token'];
		   $socmeduser	 = $_SESSION['socmeduser'];
		}//end facebook
		elseif($socmed=='google'){
                   $access_token = $_SESSION['access_token'];
		   $socmeduser	 = $_SESSION['socmeduser'];
                   //$socmeduser = $access_token['socmeduser'];
                   $token      = json_encode($_SESSION['access_token']);
                }//end google
                elseif($socmed=='instagram'){
                   $access_token = $_SESSION['access_token'];
                   $socmeduser   = $_SESSION['socmeduser'];
                   //$socmeduser = $access_token['socmeduser'];
                   $token      = json_encode($_SESSION['access_token']);
                }//end instagram



	        if(!isset($_FILES["field_image"])){
                    $post_image = "";
                }else{
		    $target_dir = "uploads/";
		    $randfile = rand();
		    $target_file = $target_dir.$randfile."_".basename($_FILES["field_image"]["name"]);
		    $uploadOk = 1;
		    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		    // Check if image file is a actual image or fake image
		    $check = getimagesize($_FILES["field_image"]["tmp_name"]);
    	  	    if($check !== false) {
        		$uploadOk = 1;
    		    } else{
			$uploadOk=0;
		    }

		    if($uploadOk==1){
    			if (move_uploaded_file($_FILES["field_image"]["tmp_name"], $target_file)) {
	                       $post_image = $target_file;
    			} else {
        			//echo "Sorry, there was an error uploading your file.";
			       $post_image = "";
    			}
		     }else{
			  $post_image="";
			}


                }//end else

		//Add Post
		$addpost = add_ambisi($nama,$kota,$nohp,$email,$ambisimu,$deskripsi,$url,$post_image,$alasan,$socmed,$socmeduser,$token);

		if(!$addpost){
			//if error
			header("Location:index.php");
			exit();
		}else{
			if($socmed=='twitter'){
				include("twp.php");
				$tokens = $access_token['oauth_token'];
				$tokens_secret = $access_token['oauth_token_secret'];
				$m = tweet($tokens,$tokens_secret,$url,$post_image);
			}//end twitter
			elseif($socmed=='facebook'){
				//include("fbp.php");
				//$m = facebookpost($url,$alasan,$token);
				$loct = "https://www.facebook.com/dialog/share?app_id=1680709238846747&display=popup&href=".$url."&redirect_uri=http://tri.co.id/ambisiku/registrasi/thankyou.php";
				header("Location:$loct");
				exit();
			}//end facebook
			

			//send email
			//@send_mail($email,$nama);
			header("Location: thankyou.php");
			exit();
		}


?>

