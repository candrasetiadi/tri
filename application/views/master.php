<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <title><?php echo $global['title'] ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/packages/css/app-1.0.css') ?>">

    <?php $this->load->view('partial/fb_og'); ?>
    <?php $this->load->view('partial/tw_card'); ?>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');

	fbq('init', '755432921258445');
	fbq('track', "PageView");</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=755432921258445&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	
	<!-- Twitter universal website tag code -->
	<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
	<script type="text/javascript">twttr.conversion.trackPid('nunj2', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
	<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nunj2&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
	<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nunj2&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
	</noscript>
	<!-- End Twitter universal website tag code -->
	
	<!-- Google Code for Tri Indonesia Ambisiku - GDN 2016 Conversion Page -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 920813193;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "QNI_CPuqm2UQif2JtwM";
	var google_remarketing_only = false;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/920813193/?label=QNI_CPuqm2UQif2JtwM&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript>
	
	<!-- <script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-23117201-1']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script> -->
</head>
<body>

<?php $this->load->view($header); ?>

<!--CONTENT-->
<?php $content ? $this->load->view($content) : ''; ?>
<!--/CONTENT-->

<!--FOOTER-->
<div class="footer">
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
            <p class="copyright">COPYRIGHT © 2016 ALL RIGHTS RESERVED</p>
        </div>
    </div>
</div>
<!--FOOTER-->
<script src="<?php echo base_url('assets/packages/js/app.js'); ?>"></script>
<?php (isset($script)) ? $this->load->view($script) : '' ?>
</body>
</html>