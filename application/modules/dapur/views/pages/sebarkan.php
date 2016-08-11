<h3 class="page-title">
    Sebarkan Page
    <small>add Sebarkan</small>
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i> Sebarkan List
                </div>
                <div class="actions">
                    <a href="#myModal" role="button" class="btn btn-default btn-sm" data-toggle="modal">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="tableSebarkan">
                    <thead>
                    <tr>
                        <th>
                            Judul
                        </th>
                        <th>
                            Tagline
                        </th>
                        <th>
                            Website
                        </th>
                        <th>
                            Twitter
                        </th>
                        <th>
                            Instagram
                        </th>
                        <th>
                            Facebook
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
                    <?php foreach ($sebarkan as $sebar): ?>
                        <tr class="odd gradeX">
                            <td>
                                <?php echo $sebar['judul'] ?>
                            </td>
                            <td>
                                <?php echo $sebar['tagline'] ?>
                            </td>
                            <td>
                                <?php echo $sebar['website'] ?>
                            </td>
                            <td>
                                <?php echo $sebar['twitter'] ?>
                            </td>
                            <td>
                                <?php echo $sebar['instagram'] ?>
                            </td>
                            <td>
                                <?php echo $sebar['facebook'] ?>
                            </td>
                            <td>
                                <?php echo ($sebar['status'] == 1) ? 'Publish' : 'Draft' ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-xs"
                                        onclick="editSebarkan(this)"
                                        data-id="<?php echo $sebar['id'] ?>">
                                    edit
                                </button>
                                <button type="button" class="btn btn-danger btn-xs"
                                        onclick="setDelSebar(this)"
                                        data-id="<?php echo $sebar['id']; ?>">
                                    hapus
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->

<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add Sebarkan</h4>
            </div>
            <form method="post" class="form-horizontal form-row-seperated"
                  enctype="multipart/form-data"
                  action="<?php echo site_url('dapur/sebarkan/save') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="title">Title</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title" id="title"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="tagline">Tagline</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tagline" id="tagline">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="description">Description</label>

                        <div class="col-md-9">
                            <textarea name="description" id="description" class="form-control" cols="30"
                                      rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="website">Website</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="website" id="website">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="instagram">Instagram</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="instagram" id="instagram">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="twitter">Twitter</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="twitter" id="twitter">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="facebook">Facebook</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="facebook" id="facebook">
                        </div>
                    </div>

                    <div class="form-group hide" id="status-sebar">
                        <label class="col-md-3 control-label" for="status">Status</label>

                        <div class="col-md-9">
                            <select class="form-control" name="status" id="status">
                                <option value="0">Draft</option>
                                <option value="1">Publish</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="thumbnail">Thumbnail</label>

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

                    <div class="form-group">
                        <label class="control-label col-md-3" for="image">Image</label>

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
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
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