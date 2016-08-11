<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
            </li>
            <li class="start<?php echo $active == 'dashboard' ? ' active':'';?> margin-top-10">
                <a href="<?php echo site_url('dapur/dashboard');?>">
                    <i class="icon-layers"></i>
                    <span class="title">Dashboard</span>
                    <?php echo $active == 'dashboard' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="<?php echo $active == 'home' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/home');?>">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                    <?php echo $active == 'home' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="<?php echo $active == 'cerita' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/cerita');?>">
                    <i class="icon-paper-clip"></i>
                    <span class="title">Cerita</span>
                    <?php echo $active == 'cerita' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="<?php echo $active == 'kelas' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/kelas');?>">
                    <i class="icon-social-twitter"></i>
                    <span class="title">Kelas</span>
                    <?php echo $active == 'kelas' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="<?php echo $active == 'sebarkan' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/sebarkan');?>">
                    <i class="icon-paper-clip"></i>
                    <span class="title">Sebarkan</span>
                    <?php echo $active == 'cerita' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Settings</h3>
            </li>
            <li class="<?php echo $active == 'website' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/website');?>">
                    <i class="fa fa-globe"></i>
					<span class="title">Website</span>
                    <?php echo $active == 'website' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="<?php echo $active == 'og' ? 'active':'';?>">
                <a href="<?php echo site_url('dapur/open-graph');?>">
                    <i class="fa fa-sliders"></i>
					<span class="title">Open Graph</span>
                    <?php echo $active == 'og' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
            <li class="last<?php echo $active == 'user' ? ' active':'';?>">
                <a href="<?php echo site_url('dapur/user');?>">
                    <i class="icon-user"></i>
					<span class="title">User</span>
                    <?php echo $active == 'user' ? ' <span class="selected"></span>':'';?>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>