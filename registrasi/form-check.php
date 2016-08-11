<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival #Ambisiku</title>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
      
    <!-- START REGISTER -->
    <section class="register section">
        <div class="callout dark">
	<form action="dost.php" name="formambisi" method="POST" enctype="multipart/form-data">
            <h2>Daftar</h2>
            <label>
                <input type="text" placeholder="Nama" name="nama">
            </label>
            <label>
                <input type="text" placeholder="Kota" name="kota">
            </label>
            <label>
                <input type="text" placeholder="Email" name="email">
            </label>
            <label>
                <input type="text" placeholder="No. Telepon/Handphone" name="nohp">
            </label>
            <label>
                <input type="text" placeholder="Ambisimu (Jualan/Bakat)" name="ambisimu">
            </label>
            <label>
                <input type="text" placeholder="Deskripsi Jualan" name="deskripsi">
            </label>
            <label>
                <input type="text" placeholder="URL Jualan" name="url">
            </label>
            <label for="exampleFileUpload" class="button secondary">Image Ambisimu</label>
            <input type="file" id="exampleFileUpload" class="show-for-sr" name="field_image">
            <label>
                <textarea placeholder="Alasan kenapa kamu layak dipromosikan" rows="3" name="alasan"></textarea>
            </label>
	    
	   <!--<label for="tos">!-->
            <p align='left'><input id="tos" type="checkbox"> Saya memahami bahwa ambisi yang saya sebarkan akan melalui proses seleksi dan bebas dari unsur SARA, Pornografi, politik serta tidak melanggar hukum.</p>
	   <!--</label>!-->
            <center><button type="submit" class="button" data-open="exampleModal1">Sebarkan #Ambisiku</button></center>
	</form>
        </div>
<!--
        <div class="callout opaque tos">
            <input id="tos" type="checkbox"><label for="tos">Saya telah membaca, memahami dan menyetujui semua syarat dan ketentuan di atas</label>
        </div>
!-->
    </section>
    <!--/ END REGISTER -->
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
