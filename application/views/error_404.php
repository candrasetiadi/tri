<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico">
	<title><?php echo $global['title'] ?></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/packages/css/app.css') ?>">
</head>
<body>

<?php $this->load->view($header); ?>

<!--CONTENT-->
<div class="content-wrapper">
	<!--SECTION-1-->
	<div class="section-1">
		<div class="row columns">
			<div class="headline">
				<div class="small-12">
					<h2 class="bold text-center">Maaf Halaman yang Anda cari tidak ditemukan</h2>
				</div>
				<br>
				<div class="small-12">
					<div class="sub-nav">
						<p class="text-center">Mengunjungi Halaman <a href="<?php echo site_url()?>">Utama</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/SECTION-1-->
</div>
<!--/CONTENT-->

<!--FOOTER-->
<div class="footer footer-error">
	<div class="row">
		<div class="small-6 large-6 left">
			<img src="<?php echo base_url('assets/packages/img/logo-small.png'); ?>" alt="">
		</div>
		<div class="small-6 large-6 right">
			<ul class="socmed">
				<li>
					<a {{ $global['twitter']['new_tab'] ? 'target="_blank" ':'' }}
					href="<?php echo $global['twitter']['url'] ?>">
					<img src="<?php echo base_url('assets/packages/img/twitter.png'); ?>"
						 alt="">
					</a>
				</li>
				</a>
				<li>
					<a <?php echo $global['facebook']['new_tab'] ? 'target="_blank" ' : '' ?>
							href="<?php echo $global['facebook']['url'] ?>">
						<img src="<?php echo base_url('assets/packages/img/facebook.png'); ?>"
							 alt="">
					</a>
				</li>
				</a>
				<li>
					<a <?php echo $global['instagram']['new_tab'] ? 'target="_blank" ' : ''; ?>
							href="<?php echo $global['instagram']['url']; ?>">
						<img src="<?php echo base_url('assets/packages/img/ig.png'); ?>"
							 alt="">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="small-12 large-12">
			<p class="disclaimer"><?php echo $global['footer'] ?></p>
		</div>
		<div class="small-12 large-4">
			<p class="copyright">COPYRIGHT © 2106 ALL RIGHTS RESERVED</p>
		</div>
	</div>
</div>
<!--FOOTER-->
<script src="<?php echo base_url('assets/packages/js/app.js'); ?>"></script>
</body>
</html>