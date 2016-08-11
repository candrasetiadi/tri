<h3 class="page-title">
    Setting Website
    <small>Global Setting</small>
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-equalizer font-red-sunglo"></i>
                    <span class="caption-subject font-red-sunglo bold uppercase">
                        Setting Form
                    </span>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="<?php echo site_url('dapur/website/save') ?>" class="form-horizontal" method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Website Title</label>

                            <div class="col-md-7">
                                <div class="input-icon">
                                    <i class="fa fa-bell-o"></i>
                                    <input type="text" class="form-control" name="title"
                                           value="<?php echo isset($setting['global_title']) ? $setting['global_title'] : ''; ?>"
                                           placeholder="Website Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Footer Text</label>

                            <div class="col-md-7">
                                <textarea name="footer" class="form-control" id="footer" placeholder="Footer Text"
                                          rows="10"><?php echo isset($setting['footer']) ? $setting['footer'] : ''; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Twitter URL</label>

                            <div class="col-md-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="twitter_url"
                                           value="<?php echo isset($setting['twitter_url']) ? $setting['twitter_url'] : ''; ?>"
                                           placeholder="Twitter URL">
                                    <span class="input-group-addon">
                                        <i class="fa fa-link"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="checkbox-list">
                                    <label>
                                        <input type="checkbox"
                                            <?php echo isset($setting['twitter_url_new']) && $setting['twitter_url_new'] ?
                                                'checked="checked"' : ''; ?>
                                               name="twitter-new" value="1">
                                        Open New Tab
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Facebook URL</label>

                            <div class="col-md-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="facebook_url"
                                           value="<?php echo isset($setting['facebook_url']) ? $setting['facebook_url'] : ''; ?>"
                                           placeholder="Facebook URL">
                                    <span class="input-group-addon">
                                        <i class="fa fa-link"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="checkbox-list">
                                    <label>
                                        <input type="checkbox"
                                            <?php echo isset($setting['facebook_url_new']) && $setting['facebook_url_new'] ?
                                                'checked="checked"' : ''; ?>
                                               name="facebook-new" value="1">
                                        Open New Tab
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Instagram URL</label>

                            <div class="col-md-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="instagram_url"
                                           value="<?php echo isset($setting['instagram_url']) ? $setting['instagram_url'] : ''; ?>"
                                           placeholder="Instagram URL">
                                    <span class="input-group-addon">
                                        <i class="fa fa-link"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="checkbox-list">
                                    <label>
                                        <input type="checkbox"
                                            <?php echo isset($setting['instagram_url_new']) && $setting['instagram_url_new'] ?
                                                'checked="checked"' : ''; ?>
                                               name="instagram-new" value="1">
                                        Open New Tab
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>