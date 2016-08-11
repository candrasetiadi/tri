<script type="text/javascript" src="<?php echo base_url('assets/bn/global/plugins/select2/select2.min.js') ?>"></script>
<script type="text/javascript"
        src="<?php echo base_url('assets/bn/global/plugins/datatables/media/js/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript"
        src="<?php echo base_url('assets/bn/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') ?>"></script>
<script>
    function editUrl(that) {
        $('#video_id').val($(that).data('id'));
        $('#youtube_url').val($(that).data('yurl'));
        $('#myModal').modal('show');
    }

    function setDel(that) {
        var id = $(that).data('id');
        var url = '<?php echo base_url('dapur/home/destroy')?>/';
        $('#action-url').attr('href', url + id);
        $('#destroy').modal('show');
    }
</script>