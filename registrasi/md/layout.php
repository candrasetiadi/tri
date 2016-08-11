<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard #Ambisiku</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <link href="css/lightbox.css" rel="stylesheet">

<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - #Ambisiku</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li><a href="index.php?s=dashboard"><i class="fa fa-home"></i>Dashboard</a></li>
          </li>
          <li><a href="index.php?s=approved"><i class="fa fa-cubes"></i><span class="badge pull-right"></span>Approved</a></li>
          <!--<li><a href="index.php?s=logout"><i class="fa fa-sign-out"></i>Sign Out</a></li>!-->
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
	
        <div class="templatemo-content">
	   <!--
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Manage Users</a></li>
            <li class="active">Tables</li>
          </ol>
	   !-->

          <h1>List Ambisiku</h1>
          <p></p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
            </div>
          </div> 
          <div class="row">
		<!--
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <button type="button" class="btn btn-default">Sort by</button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">First Name</a></li>
                  <li><a href="#">Last Name</a></li>
                  <li><a href="#">Username</a></li>
                </ul>
              </div>
		!-->

              <div class="table-responsive">
                <h4 class="margin-bottom-15">&nbsp;</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Ambisimu</th>
                      <th>Deskripsi</th>
                      <th>URL</th>
                      <th>Image</th>
                      <th>Alasan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
		<?php
			include("../library/dbx.php");
			db_connect();
			$sqlsel  = "SELECT id,nama,ambisimu,deskripsi,url,image,alasan FROM ambuser ";
			$sqlsel .= "WHERE moderate=0 ORDER by datetime ASC LIMIT 0,50";
			$querysel = mysql_query($sqlsel);
			if(!$querysel){
				echo mysql_errno($querysel) . ": " . mysql_error($querysel) . "\n";
				echo "Error ".$sqlsel;
			}else{
				if(mysql_num_rows($querysel)<0){
				}else{
				  while ($row = mysql_fetch_array($querysel, MYSQL_ASSOC)) {
    					//printf("ID: %s  Name: %s", $row["id"], $row["name"]);
					$pid	   = $row['id'];
					$nama 	   = $row['nama'];
					$ambisimu  = $row['ambisimu'];
					$deskripsi = $row['deskripsi'];
					$url	   = $row['url'];
					$image	   = $row['image'];
					$alasan	   = $row['alasan'];

		?>
		  <!-- While !-->
                    <tr>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $ambisimu;?></td>
                      <td><?php echo $deskripsi;?></td>
                      <td>
			   <a target="_blank" href="<?php echo $url;?>">
			   <?php echo $url;?>
			   </a>
		      </td>
                      <td align="center">
                        <a href="<?php echo 'http://ambisi.codeinc.id/'.$image;?>" data-lightbox="image-1">
                        <img height="20%" src="<?php echo 'http://ambisi.codeinc.id/'.$image;?>">
                        </a>
                      </td>
                      <td>
			<?php echo $alasan;?>
		     </td>
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-info">Action</button>
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"> 
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="?s=appproc&id=<?php echo $pid;?>">Approve</a></li>
                            <li><a href="?s=rejproc&id=<?php echo $pid;?>">Reject</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
 	 	  <!-- END While !-->
		 <?php
			}//end else row <0
			}//end while content
			}//end else error	

		 ?>
                  </tbody>
                </table>
              </div>
		<!--
              <ul class="pagination pull-right">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">4 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">5 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">&raquo;</a></li>
              </ul> 
		!--> 
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>

      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2016 Ambisimu <!-- Credit: www.templatemo.com --></p>
        </div>
      </footer>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/templatemo_script.js"></script>
  </body>
</html>
