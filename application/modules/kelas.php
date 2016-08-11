<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/bn/global/scripts/metronic.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"
        type="text/javascript"></script>
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
            $('#thumbnail').val(snippet.thumbnails.maxres.url);
        });
    }

    function editMentor(that) {
        var id = $(that).data('id');
        $.getJSON('<?php echo site_url('dapur/kelas/getMentor');?>/' + id, function (json) {
            $('#mentor_name').val(json.name);
            $('#mentor_description').val(json.description);
            $('#twitterID').val(json.twitter);
            $('#schedule').val(json.schedule);
            $('#mentor_id').val(json.id);
            $('#myModal').modal('show');
        });
    }

    function resetForm() {
        $('input').val('');
        $('textarea').val('');
    }

    $(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout

        // init table tenant
        var table = $('#tableTenant');
        table.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,
            "language": {
                "lengthMenu": " _MENU_ records",
                "paging": {
                    "previous": "Prev",
                    "next": "Next"
                }
            },
            "order": [
                [5, "asc"]
            ] // set first column as a default sort by asc
        });

        // init table interview video
        var tableWrapper = $('#tableTenant_wrapper');
        tableWrapper.find('.dataTables_length select').select2();

        var table2 = $('#tableInterview');
        table2.dataTable({

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "No entries found",
                "infoFiltered": "(filtered1 from _MAX_ total entries)",
                "lengthMenu": "Show _MENU_ entries",
                "search": "Search:",
                "zeroRecords": "No matching records found"
            },

            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
            // So when dropdowns used the scrollable div should be removed.
            //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

            "bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

            "lengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 5,
            "language": {
                "lengthMenu": " _MENU_ records",
                "paging": {
                    "previous": "Prev",
                    "next": "Next"
                }
            },
            "order": [
                [3, "asc"]
            ] // set first column as a default sort by asc
        });

        var tableWrapper2 = $('#tableInterview_wrapper');
        tableWrapper2.find('.dataTables_length select').select2(); // initialize select2 dropdown

        $('#youtube_checker').click(function () {
            var url = $('#youtube_url').val();
            getDetails(url);
        });

        $('#myModal').on('hidden.bs.modal', function (e) {
            resetForm();
        });

        $('#modalVideo').on('hidden.bs.modal', function (e) {
            resetForm();
        });

        $('.date-picker').datepicker({
            rtl: Metronic.isRTL(),
            autoclose: true
        });
    });
</script>