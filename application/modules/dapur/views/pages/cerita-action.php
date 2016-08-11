<h3 class="page-title">
    Cerita Page
    <small>add/edit</small>
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <?php if (isset($cerita['id'])): ?>
            <div class="tabbable tabbable-custom boxless tabbable-reversed">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_0" data-toggle="tab">
                            Form Video
                        </a>
                    </li>
                    <li>
                        <a href="#tab_1" data-toggle="tab">
                            Image
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Form Video</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="<?php echo site_url('dapur/cerita/save') ?>" class="form-horizontal"
                                      method="post">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Youtube URL</label>

                                            <div class="col-md-4">
                                                <div class="input-group" style="text-align:left">
                                                    <input type="text" class="form-control"
                                                           value="<?php echo isset($cerita['video_url']) ? nl2br($cerita['video_url']) : ''; ?>"
                                                           placeholder="Video URL"
                                                           name="youtube_url"
                                                           id="youtube_url">
                                                <span class="input-group-btn">
                                                    <a href="javascript:;" class="btn green" id="youtube_checker">
                                                        <i class="fa fa-search"></i> Check
                                                    </a>
                                                </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Video Title</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="title" id="title"
                                                       value="<?php echo isset($cerita['judul']) ? nl2br($cerita['judul']) : ''; ?>"
                                                       placeholder="Video Title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Video Description</label>

                                            <div class="col-md-4">
                                            <textarea name="description" class="form-control" id="description"
                                                      placeholder="Video Description"
                                                      rows="10"><?php echo isset($cerita['tagline']) ? nl2br($cerita['tagline']) : ''; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Video Thumbnail</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="thumbnail" id="thumbnail"
                                                       value="<?php echo isset($cerita['thumbnail']) ? $cerita['thumbnail'] : ''; ?>"
                                                       placeholder="Video Thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Twitter ID</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="twitter" id="twitter"
                                                       value="<?php echo isset($cerita['twitter']) ? $cerita['twitter'] : ''; ?>"
                                                       placeholder="Twitter ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Instagram ID</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="instagram" id="instagram"
                                                       value="<?php echo isset($cerita['instagram']) ? $cerita['instagram'] : ''; ?>"
                                                       placeholder="Instagram ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Facebook ID</label>

                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="facebook" id="facebook"
                                                       value="<?php echo isset($cerita['facebook']) ? $cerita['facebook'] : ''; ?>"
                                                       placeholder="Facebook ID">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>

                                            <div class="col-md-4">
                                                <select name="status" class="form-control">
                                                    <option
                                                        value="1" <?php echo $cerita['status'] == 1 ? 'selected="selected"' : ''; ?>>
                                                        Publish
                                                    </option>
                                                    <option
                                                        value="0" <?php echo $cerita['status'] == 0 ? 'selected="selected"' : ''; ?>>
                                                        Draft
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <input type="hidden" name="id"
                                                       value="<?php echo isset($cerita['id']) ? $cerita['id'] : ''; ?>">
                                                <button type="submit" class="btn green">Submit</button>
                                                <a href="<?php echo site_url('dapur/cerita') ?>" class="btn default">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_1">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-equalizer font-red-sunglo"></i>
                                    <span class="caption-subject font-red-sunglo bold uppercase">Image</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="" method="post" class="form-horizontal" id="uploader">
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-lg-6 col-xs-12">
                                            <button class="btn btn-primary fileinput-button">
                                                <i class="glyphicon glyphicon-folder-open"></i> <span>Pilih Foto</span>
                                                <input type="file" name="files" multiple id="image"
                                                       accept="image/png,image/gif,image/jpeg">
                                            </button>
                                            <button type="submit" class="btn start forupload" disabled>
                                                <i class="glyphicon glyphicon-cloud-upload"></i>
                                                <span>Upload All</span>
                                            </button>
                                        </div>

                                        <div class="col-lg-6 col-xs-12 fileupload-progress fade">
                                            <!-- The global progress bar -->
                                            <div class="progress progress-striped active" role="progressbar"
                                                 aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                            </div>
                                            <!-- The extended global progress state -->
                                            <div class="progress-extended">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div id="files" class="files"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-equalizer font-red-sunglo"></i>
                        <span class="caption-subject font-red-sunglo bold uppercase">Form Video</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form action="<?php echo site_url('dapur/cerita/save') ?>" method="post" class="form-horizontal">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Youtube ID</label>

                                <div class="col-md-4">
                                    <div class="input-group" style="text-align:left">
                                        <input type="text" class="form-control"
                                               placeholder="Video ID"
                                               name="youtube_url"
                                               id="youtube_url">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn green" id="youtube_checker">
                                                <i class="fa fa-search"></i> Check
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Video Title</label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="title" id="title"
                                           placeholder="Video Title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Video Description</label>

                                <div class="col-md-4">
                                <textarea name="description" class="form-control" id="description"
                                          placeholder="Video Description"
                                          rows="10"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Video Thumbnail</label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="thumbnail" id="thumbnail"
                                           placeholder="Video Thumbnail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Twitter ID</label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="twitter" id="twitter"
                                           placeholder="Twitter ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Instagram ID</label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="instagram" id="instagram"
                                           placeholder="Instagram ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Facebook ID</label>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="facebook" id="facebook"
                                           placeholder="Facebook ID">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <a href="<?php echo site_url('dapur/cerita') ?>" class="btn default">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <!-- END FORM-->
                    </form>
                </div>
            </div>
        <?php endif; ?>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>