<script type="text/javascript" src="<?php echo base_url('assets') ?>/bn/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url('assets') ?>/bn/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url('assets') ?>/bn/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
<div class="template-upload fade row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-left">
                    <small class="error text-danger"></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <span class="preview"></span>
            </div>

            <div class="col-xs-12 col-lg-5">
                <p class="name">{%=file.name%}</p>
                <p class="size">Processing...</p>
            </div>

            <div class="col-xs-12 col-lg-4">
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-cloud-upload"></i>
                    <span>Upload</span>
                </button>
                {% } %}
                {% if (!i) { %}
                <button class="btn btn-default cancel">
                    <i class="glyphicon glyphicon-remove"></i>
                    <span>Batal</span>
                </button>
                {% } %}
            </div>
        </div>
    </div>
</div>
{% } %}


</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
<div class="template-download fade row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-left">
                    {% if (file.error) { %}
                    <small class="error">
                        <span class="label label-danger">Error :</span> {%=file.error%}
                    </small>
                    {% } %}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <span class="preview thumbnail">
                  {% if (file.thumbnailUrl) { %}
                      <img src="{%=file.thumbnailUrl%}">
                  {% } %}
                </span>
            </div>
            <div class="col-xs-12 col-lg-6">
                {% if (file.status == 0) { %}
                    <button type="button" class="btn btn-info btn-xs" onclick="setStatus(this)" data-type="draft" data-file="{%=file.id%}">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span>Draft</span>
                    </button>
                {% } else { %}
                    <button type="button" class="btn btn-default btn-xs" onclick="setStatus(this)" data-type="draft" data-file="{%=file.id%}">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span>Draft</span>
                    </button>
                {% } %}

                {% if (file.status == 1) { %}
                    <button type="button" class="btn btn-info btn-xs" onclick="setStatus(this)" data-type="publish" data-file="{%=file.id%}">
                        <i class="glyphicon glyphicon-picture"></i>
                        <span>Publish</span>
                    </button>
                {% } else { %}
                    <button type="button" class="btn btn-default btn-xs" onclick="setStatus(this)" data-type="publish" data-file="{%=file.id%}">
                        <i class="glyphicon glyphicon-picture"></i>
                        <span>Publish</span>
                    </button>
                {% } %}
            </div>
            <div class="col-xs-10 col-lg-3 text-center">
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete"
                        data-type="{%=file.deleteType%}"
                        data-url="{%=file.deleteUrl%}"
                        {% if (file.deleteWithCredentials) { %}
                        data-xhr-fields='{"withCredentials":true}'
                        {% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Hapus</span>
                </button>
                {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-remove"></i>
                    <span>Tutup</span>
                </button>
                {% } %}
            </div>
        </div>
    </div>
</div>
{% } %}
</script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url('assets') ?>/bn/uploader/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script>
    function setStatus(that) {
        var id = $(that).data('file');
        var type = $(that).data('type');

        $.getJSON('<?php echo site_url('dapur/cerita/image')?>/' + type + '/' + id, function (json) {
            $(that).siblings()
                .removeClass('btn-info')
                .addClass('btn-default');
            $(that).addClass('btn-info')
                .removeClass('btn-default');
        });
    }

    var current_files = <?php echo $image;?>;
    $(function () {
        if ($('#uploader').length) {
            $('#uploader').fileupload({
                // Uncomment the following to send cross-domain cookies:
                // xhrFields: {withCredentials: true},
                type: 'POST',
                url: '<?php echo site_url('dapur/cerita/upload/' . $cerita['id']);?>',
                sequentialUploads: true,
                minFileSize: 100,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                formAcceptCharset: 'utf-8',
                limitMultiFileUploads: 1,
                autoUpload: false,
                formData: {
                    cerita_id: '<?php echo $cerita['id'];?>'
                }
            }).bind('fileuploadprocessalways', function (e, data) {
                var index = data.index;
                if (index + 1 === data.files.length) {
                    $('.forupload')
                        .prop('disabled', !!data.files.error);
                }
            }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');

            $('#uploader').fileupload('option', 'done')
                .call($('#uploader'), $.Event('done'), {result: current_files});
        }
    });
</script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="/bn/uploader/js/cors/jquery.xdr-transport.js"></script>
<![endif]-->