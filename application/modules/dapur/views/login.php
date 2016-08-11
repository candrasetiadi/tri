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
    <title>Festival #AmbisiKu</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="Festival #Ambisiku" name="description"/>
    <meta content="@ngungut_aja" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/global/plugins/font-awesome/css/font-awesome.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/global/plugins/simple-line-icons/simple-line-icons.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/global/plugins/uniform/css/uniform.default.css" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets'); ?>/bn/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo base_url('assets'); ?>/bn/global/css/components.css" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/bn/admin/layout/css/themes/default.css" rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="<?php echo base_url('assets'); ?>/bn/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form action="<?php echo site_url('dapur/login/action') ?>" method="post">
        <h3 class="form-title">Festival #AmbisiKu</h3>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off"
                   placeholder="User Email" name="email"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off"
                   placeholder="Password" name="password"/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success uppercase">Login</button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/bootstrap/js/bootstrap.min.js"
        type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/uniform/jquery.uniform.min.js"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('assets'); ?>/bn/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets'); ?>/bn/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/bn/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>