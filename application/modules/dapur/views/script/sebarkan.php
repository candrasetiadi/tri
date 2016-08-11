<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('assets/bn/global/scripts/metronic.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/admin/layout/scripts/layout.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/bn/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"
        type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    function editSebarkan(that) {
        var id = $(that).data('id');
        $.getJSON('<?php echo site_url('dapur/sebarkan/edit');?>/' + id, function (json) {
            $('#id').val(json.id);
            $('#title').val(json.judul);
            $('#tagline').val(json.tagline);
            $('#description').val(json.excerpt);
            $('#website').val(json.website);
            $('#instagram').val(json.instagram);
            $('#twitter').val(json.twitter);
            $('#facebook').val(json.facebook);
            $('#status').val(json.status);
            $('#status-sebar').removeClass('hide');
            $('#img-holder img').attr('src', json.image);
            $('#img-holder').removeClass('hide');
            $('#thumb-holder img').attr('src', json.thumbnail);
            $('#thumb-holder').removeClass('hide');
            $('#myModal').modal('show');
        });
    }

    function resetForm() {
        $('input').val('');
        $('textarea').val('');
        $('#img-holder').addClass('hide');
        $('#thumb-holder').addClass('hide');
        $('#status-sebar').addClass('hide');
    }

    function setDelSebar(that) {
        var id = $(that).data('id');
        var url = '<?php echo base_url('dapur/sebarkan/destroy')?>/';
        $('#action-url').attr('href', url + id);
        $('#destroy').modal('show');
    }

    $(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout

        // init table tenant
        var table = $('#tableSebarkan');
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

            //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

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
                [7, "asc"]
            ] // set first column as a default sort by asc
        });

        // init table interview video
        var tableWrapper = $('#tableSebarkan_wrapper');

        tableWrapper.find('.dataTables_length select').select2();

        $('#myModal').on('hidden.bs.modal', function (e) {
            resetForm();
        });
    });
</script>