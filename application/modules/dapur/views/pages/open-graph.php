<h3 class="page-title">
    Setting Website
    <small>Default Open Graph</small>
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
                        Opengraph Form
                    </span>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="<?php echo site_url('dapur/open-graph/save'); ?>" class="form-horizontal"
                      enctype="multipart/form-data"
                      method="post">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">OG Title</label>

                            <div class="col-md-7">
                                <div class="input-icon">
                                    <i class="fa fa-bell-o"></i>
                                    <input type="text" class="form-control" name="title"
                                           value="<?php echo isset($setting['def_og_title']) ? $setting['def_og_title'] : ''; ?>"
                                           placeholder="Open Graph Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">OG Description</label>

                            <div class="col-md-7">
                            <textarea name="description" class="form-control" id="description"
                                      maxlength="200"
                                      placeholder="Open Graph Description"
                                      rows="10"><?php echo isset($setting['def_og_description']) ? $setting['def_og_description'] : ''; ?></textarea>

                                <p class="help-block">
                                    Max. 200 Character
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">OG Image</label>

                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span
                                                class="fileinput-filename">
														</span>
                                        </div>
                                    <span class="input-group-addon btn default btn-file">
                                        <span class="fileinput-new">
                                        Select file </span>
                                        <span class="fileinput-exists">
                                        Change </span>
                                        <input type="file" name="thumbnail" id="thumbnail">
                                    </span>
                                        <a href="#" class="input-group-addon btn red fileinput-exists"
                                           data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <?php if ($setting['def_og_image']): ?>
                                    <p class="help-block">
                                        <img width="200" class="thumbnail"
                                             src="<?php echo base_url($setting['def_og_image']); ?>">
                                    </p>
                                <?php endif; ?>
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