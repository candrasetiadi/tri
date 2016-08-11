<h3 class="page-title">
    Kelas Page
    <small>add/edit</small>
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="tabbable tabbable-custom boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_1" data-toggle="tab">
                        Mentor
                    </a>
                </li>
                <li>
                    <a href="#tab_2" data-toggle="tab">
                        Video
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="portlet box grey-cascade">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-user"></i> Mentor List
                            </div>
                            <div class="actions">
                                <a href="#myModal" role="button" class="btn btn-default btn-sm" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="tableTenant">
                                <thead>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Twitter
                                    </th>
                                    <th>
                                        Schedule
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($tenant as $kelas): ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $kelas['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $kelas['description'] ?>
                                        </td>
                                        <td>
                                            <?php echo $kelas['twitter'] ?>
                                        </td>
                                        <td>
                                            <?php echo ($kelas['schedule']) ? date('d/m/Y', strtotime($kelas['schedule'])) : '--' ?>
                                        </td>
                                        <td>
                                            <?php echo ($kelas['status'] == 1) ? 'Publish' : 'Draft' ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs"
                                                    onclick="editMentor(this)"
                                                    data-id="<?php echo $kelas['id'] ?>">
                                                edit
                                            </button>
                                            <button type="button"
                                                    onclick="setDelMentor(this)"
                                                    data-id="<?php echo $kelas['id'] ?>"
                                                    class="btn btn-danger btn-xs">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab_2">
                    <div class="portlet box blue-steel">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-user"></i> Video Interview List
                            </div>
                            <div class="actions">
                                <a href="#modalVideo" role="button" class="btn btn-default btn-sm" data-toggle="modal">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="tableInterview">
                                <thead>
                                <tr>
                                    <th>
                                        Judul
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Youtube ID
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($video as $vid): ?>
                                    <tr class="odd gradeX">
                                        <td>
                                            <?php echo $vid['judul'] ?>
                                        </td>
                                        <td>
                                            <?php echo $vid['excerpt'] ?>
                                        </td>
                                        <td>
                                            <?php echo $vid['video_url'] ?>
                                        </td>
                                        <td>
                                            <?php echo ($vid['status'] == 1) ? 'Publish' : 'Draft' ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-xs"
                                                    onclick="editVideo(this)"
                                                    data-id="<?php echo $vid['id'] ?>">
                                                edit
                                            </button>
                                            <button type="button"
                                                    onclick="setDelVideo(this)"
                                                    data-id="<?php echo $vid['id'] ?>"
                                                    class="btn btn-danger btn-xs">
                                                hapus
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Mentor Data</h4>
            </div>
            <form method="post" class="form-horizontal form-row-seperated" id="mentor"
                  enctype="multipart/form-data"
                  action="<?php echo site_url('dapur/kelas/mentor') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="mentor_name">Name</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="mentor_name" id="mentor_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="mentor_description">Description</label>

                        <div class="col-md-9">
                            <textarea name="mentor_description" id="mentor_description" class="form-control" cols="30"
                                      rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="twitterID">Twitter ID</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="twitterID" id="twitterID">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="schedule">Schedule</label>

                        <div class="col-md-9">
                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" id="schedule" name="schedule"
                                       aria-required="true" aria-invalid="false" aria-describedby="datepicker-error"/>
                            <span class="input-group-btn">
                                <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                            </div>
                            <span id="datepicker-error" class="help-block help-block-error"></span>
                            <!-- /input-group -->
                        <span class="help-block">
                            select a date
                        </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="conversation">Conversation URL</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="conversation" id="conversation">
                        </div>
                    </div>

                    <div class="form-group hide" id="status-mentor">
                        <label class="col-md-3 control-label" for="status_mentor">Status</label>

                        <div class="col-md-9">
                            <select class="form-control" name="status_mentor" id="status_mentor">
                                <option value="0">Draft</option>
                                <option value="1">Publish</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="image">Mentor Image</label>

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
                                        <input type="file" name="image" id="image">
                                    </span>
                                    <a href="#" class="input-group-addon btn red fileinput-exists"
                                       data-dismiss="fileinput">
                                        Remove </a>
                                </div>
                            </div>
                            <p class="help-block hide" id="img-holder">
                                <img width="200" class="thumbnail"
                                     src="">
                            </p>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="thumbnail">Mentor Home Thumbnail</label>

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
                            <p class="help-block hide" id="thumb-holder">
                                <img width="200" class="thumbnail"
                                     src="">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="mentor_id" id="mentor_id">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalVideo" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Video Interview</h4>
            </div>
            <form method="post" class="form-horizontal form-row-seperated"
                  action="<?php echo site_url('dapur/kelas/interview') ?>">
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="youtube_checker">Youtube ID</label>

                            <div class="col-md-9">
                                <div class="input-group" style="text-align:left">
                                    <input type="text" class="form-control"
                                           value=""
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
                            <label class="col-md-3 control-label" for="title">Video Title</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="title" id="title"
                                       value=""
                                       placeholder="Video Title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="description">Video Description</label>

                            <div class="col-md-9">
                            <textarea name="description" class="form-control" id="description"
                                      placeholder="Video Description"
                                      rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="video_thumbnail">Video Thumbnail</label>

                            <div class="col-md-9">
                                <input type="text" class="form-control" name="video_thumbnail" id="video_thumbnail"
                                       value=""
                                       placeholder="Video Thumbnail">
                            </div>
                        </div>

                        <div class="form-group hide" id="status-video">
                            <label class="col-md-3 control-label" for="status_video">Status</label>

                            <div class="col-md-9">
                                <select class="form-control" name="status_video" id="status_video">
                                    <option value="0">Draft</option>
                                    <option value="1">Publish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="video_id" id="video_id">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="destroy" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure want to delete it?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                <a href="" id="action-url" type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>