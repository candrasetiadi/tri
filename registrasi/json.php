<?php
			include("library/dbx.php");
			db_connect();
			$sqlsel  = "SELECT nama,ambisimu,deskripsi,url,image,alasan FROM ambuser ";
			$sqlsel .= "WHERE moderate=1 ORDER by datetime ASC LIMIT 0,40";
			$querysel = mysql_query($sqlsel);
			if(!$querysel){
				echo mysql_errno($querysel) . ": " . mysql_error($querysel) . "\n";
				echo "Error ".$sqlsel;
			}else{
				if(mysql_num_rows($querysel)<0){
				}else{
				  $ambisi = array();
				  while ($row = mysql_fetch_array($querysel, MYSQL_ASSOC)) {
					$nama 	   = $row['nama'];
					$ambisimu  = $row['ambisimu'];
					$deskripsi = $row['deskripsi'];
					$url	   = $row['url'];
					$image	   = 'http://ambisi.codeinc.id/'.$row['image'];
					$alasan	   = $row['alasan'];
					$ambisi[] = $row;
				  }//end while
				}//end num row
				echo json_encode($ambisi);
			}//end query select
			
		?>

