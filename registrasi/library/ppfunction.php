<?php
include("dbx.php");
$conn = db_connect();

function add_ambisi($nama,$kota,$nohp,$email,$ambisimu,$deskripsi,$url,$image,$alasan,$socmed,$socmeduser,$token){
  global $conn;

  $sql  = "INSERT INTO ambuser(nama,kota,nohp,email,ambisimu,deskripsi,url,image,alasan,moderate,socmed,socmeduser,token,datetime) ";
  $sql .= "VALUES('$nama','$kota','$nohp','$email','$ambisimu','$deskripsi','$url','$image','$alasan',0,'$socmed','$socmeduser','$token',now()) ";
  $query = mysql_query($sql);

  if(!$query){
	return false;
  }else{
	return true;
  }
}//end function add_ambisi

function moderasi($postingID,$postingMod){
  global $conn;
  /*
	0 : Default
	1 : Approved
	2 : Reject
  */
  $sql    = "UPDATE ambuser SET moderate=$postingMod WHERE id=$postingID";
  $query  = mysql_query($sql);

  if(!$query){
        return $sql;
  }else{
        return true;
  }
}//end function moderasi

function send_mail($email_to,$email_fullname){

   date_default_timezone_set('Etc/UTC');
   require 'phpmailer/PHPMailerAutoload.php';

   $mail = new PHPMailer;
   $mail->isSMTP();

   //Enable SMTP debugging
   // 0 = off (for production use)
   // 1 = client messages
   // 2 = client and server messages
   $mail->SMTPDebug = 0;

   $mail->Debugoutput = 'html';
   //$mail->Host = 'smtp.gmail.com';
   $mail->Host = 'localhost';
   $mail->Port = 25;
   //$mail->Port = 587;
   $mail->SMTPSecure = 'tls';
   $mail->SMTPAuth = false;
   $mail->Username = "info@codeinc.id";
   $mail->Password = "0mghell0w";
   //$mail->setFrom('info@codeinc.id', 'Ambisiku');
   $mail->setFrom('festival.ambisiku@3indonesia.co.id', 'Festival Ambisiku');



$msgHTML = <<< MAIL
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
<p>
Hi,
<br/><br />
Terima kasih telah menjadi bagian dari Festival #Ambisiku. Ambisimu telah kami terima dan akan diproses untuk dipromosikan melalui akun sosial media Tri Indonesia.
<br /><br />
Tunggu info selanjutnya dari kami.
<br /><br />
Terima Kasih,<br />
Tim Festival #Ambisiku.<br />
</p>
</div>
MAIL;

   $mail->msgHTML($msgHTML);

   //Email to, Subject, Message
   $mail->addAddress($email_to, $email_fullname);
   $mail->Subject = 'Ambisiku + Internet = Kekuatan Hebat';

   //kirim mail
   if (!$mail->send()){
       return false;
   } else {
       return true;
   }

}//end function send_email


?>

