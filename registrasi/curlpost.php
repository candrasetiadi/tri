<?php
/*
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://ambisi.codeinc.id/mailer.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "e=azis.az@gmail.com&n=abdul+azis");

curl_exec ($ch);
curl_close ($ch); 
*/

?>
<html>
<form name="oke" method="post" action="mailer.php">
<input type="text" name="e" value="azis.az@gmail.com">
<input type="text" name="a" value="azis">
<input type="submit" value="submit">
</form>
</html>
