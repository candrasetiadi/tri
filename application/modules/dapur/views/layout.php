<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="Festival #Ambisiku" name="description"/>
    <meta content="@ngungut_aja" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/plugins/font-awesome/css/font-awesome.min.css'); ?>"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/plugins/uniform/css/uniform.default.css'); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>"
          rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <?php ($style_page) ? $this->load->view($style_page) : ''; ?>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo base_url('assets/bn/global/css/components.css'); ?>" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets/bn/global/css/plugins.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/bn/admin/layout/css/layout.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/bn/admin/layout/css/themes/darkblue.css'); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets/bn/admin/layout/css/custom.css'); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <?php $this->load->view('partial/logo'); ?>
        <!-- END LOGO -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <?php $this->load->view('partial/topbar'); ?>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <?php $this->load->view('partial/sidebar', $this->_data); ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <?php ($content) ? $this->load->view($content) : ''; ?>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('partial/footer'); ?>
<!-- END FOOTER -->

<!-- BEGIN CORE PLUGINS -->
<?php $this->load->view('script/core'); ?>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php ($script_page_plugin) ? $this->load->view($script_page_plugin) : ''; ?>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php ($script_page) ? $this->load->view($script_page) : ''; ?>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>
