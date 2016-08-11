<h3 class="page-title">
    Cerita Page
</h3>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i> Video List
                </div>
                <div class="actions">
                    <a href="<?php echo site_url('dapur/cerita/add') ?>" role="button" class="btn btn-default btn-sm"
                       data-toggle="modal">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                    <tr>
                        <th>
                            Video Title
                        </th>
                        <th>
                            Video URL
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($cerita as $list): ?>
                    <tr class="odd gradeX">
                        <td>
                            <?php echo $list['judul'] ?>
                        </td>
                        <td>
                            <?php echo $list['video_url'] ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url('dapur/cerita/edit/' .$list['id']) ?>"
                               class="btn btn-primary btn-xs">
                                edit
                            </a>
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