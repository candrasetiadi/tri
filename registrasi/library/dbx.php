<?php
if(!function_exists('db_connect'))
{
        function db_connect()
        {
        $conn  = mysql_connect("localhost","ambisiku_dev","4mb1s1kuMySQL@dev");
        $sdb   = mysql_select_db("ambisiku_dev");
        $debug = 0;
	/*

        if($debug==1)
        {
                if(!$conn)
                {
                        echo "Error";
                }
                else
                {
                        echo "Sukses";
                }
        }

                return $conn;
        }
	*/
	return $conn;
	}
}
?>

