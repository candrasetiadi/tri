<!--HEADER-->
<div class="header">
    <div class="row columns head">
        <div class="large-4 logo-head left">
            <img src="<?php echo base_url('assets/packages/img/logo-large.jpg') ?>" alt="">
        </div>
        <div class="nav-container">
            <a id="nav" href="#">
                <div class="nav"><img src="<?php echo base_url('assets/packages/img/nav.png'); ?>" alt=""></div>
            </a>
        </div>
        <div class="large-8 right navigation">
            <ul>
                <li>
                    <a href="<?php echo site_url() ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('cerita') ?>"<?php echo $active == 'cerita' ? ' class="active"' : '' ?>>
                        Cerita #Ambisiku
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('kelas-ambisiku') ?>"<?php echo $active == 'kelas' ? ' class="active"' : '' ?>>
                        Kelas #Ambisiku
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('sebarkan-ambisiku') ?>"<?php echo $active == 'sebarkan' ? ' class="active"' : '' ?>>
                        Sebarkan #Ambisiku
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('parade') ?>"<?php echo $active == 'parade' ? ' class="active"' : '' ?>>
                        Parade #Ambisiku
                    </a>
                </li>
                <li class="nav-hidden-desktop">
                    <a href="http://tri.co.id/">
                        Tri.co.id
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--/HEADER-->