<h3 class="page-title">
    Setting User
    <small>create & reset password</small>
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i> User List
                </div>
                <div class="actions">
                    <a href="#myModal" role="button" class="btn btn-default btn-sm" data-toggle="modal">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                    <tr>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="odd gradeX">
                            <td>
                                <?php echo $user['name']; ?>
                            </td>
                            <td>
                                <?php echo $user['email']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-xs"
                                        onclick="editUser(this)"
                                        data-id="<?php echo $user['id']; ?>">
                                    edit
                                </button>
                                <button type="button" class="btn btn-danger btn-xs"
                                        onclick="setDelUser(this)"
                                        data-id="<?php echo $user['id']; ?>">
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
<!-- END PAGE CONTENT-->

<div id="myModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add User Admin</h4>
            </div>
            <form method="post" class="form-horizontal form-row-seperated"
                  action="<?php echo site_url('dapur/user/save') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="name">Name</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="email">Email</label>

                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="password">Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" for="repassword">Confirm Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" name="repassword" id="repassword">
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