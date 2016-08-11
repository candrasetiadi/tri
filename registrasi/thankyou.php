<?php
session_start();
session_destroy();
?>
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
      
    <!-- START MODAL REGISTER -->
    <div class="reveal-notification notification text-center" id="exampleModal1" data-reveal>
        <h1>Terima kasih</h1>
        <p class="lead">telah menjadi bagian dari Festival #Ambisiku</p>
        <p>Nantikan email notifikasi dari<br> Tri Indonesia</p>
	<form method="POST" action="http://tri.co.id/ambisiku" name="ok">
        <button class="close-button button" data-close aria-label="OK" type="submit">
            <span aria-hidden="true">OK</span>
        </button>
	</form>
    </div>
    <!-- END MODAL REGISTER -->
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.0/foundation.js"></script>
    <script src="js/app.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 
Date();a=s.createElement(o), 
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-76253726-1', 'auto');
  ga('send', 'pageview'); 
</script>
</body> 
</html>
