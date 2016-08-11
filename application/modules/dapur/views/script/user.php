<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/bn/global/scripts/metronic.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/admin/pages/scripts/table-managed.js') ?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    function getDetails(y_id) {
        $.getJSON("https://www.googleapis.com/youtube/v3/videos", {
            key: "AIzaSyAnSVknhDGZOk7V7xvRfzZsusgaHugq4s8",
            part: "snippet",
            id: y_id
        }, function (data) {
            var snippet = data.items[0].snippet;
            $('#title').val(snippet.title);
            $('#description').val(snippet.description);
            $('#thumbnail').val(snippet.thumbnails.medium.url);
        });
    }

    function editUser(that) {
        var id = $(that).data('id');

        $.getJSON('<?php echo site_url('dapur/user')?>/' + id, function (json) {
            $('#name').val(json.name);
            $('#email').val(json.email);
            $('#id').val(json.id);
            $('#myModal').modal('show');
        });
    }

    function setDelUser(that) {
        var id = $(that).data('id');
        var url = '<?php echo base_url('dapur/user/destroy')?>/';
        $('#action-url').attr('href', url + id);
        $('#destroy').modal('show');
    }

    $(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        TableManaged.init();

        $('#youtube_checker').click(function () {
            var url = $('#youtube_url').val();
            getDetails(url);
        });
    });
</script>