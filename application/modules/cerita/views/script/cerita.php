<script>
    var next = '<?php echo $next ?>';

    $(function () {
        $('#load-more-cerita').click(function () {
            if (next) {
                $.getJSON('<?php echo site_url('cerita/next') ?>/' + next, function (json) {
                    next = json.next;
                    $.each(json.data, function (key, val) {
                        var ceritaBW = '';
                        ceritaBW += '<div class="large-3 small-12 medium-6 columns">';
                        ceritaBW += '<div class="thumbnail-video">';
                        ceritaBW += '<div class="video-3">';
                        ceritaBW += '<iframe width="420" height="315"';
                        ceritaBW += 'src="//www.youtube.com/embed/' + val.video + '?rel=0&showinfo=0"';
                        ceritaBW += 'frameborder="0" allowfullscreen></iframe>';
                        ceritaBW += '</div>';
                        ceritaBW += '<div class="video-title">';
                        ceritaBW += '<p>' + val.title + '</p>';
                        ceritaBW += '</div>';
                        ceritaBW += '<div class="video-desc">';
                        ceritaBW += '<p>' + val.description  + '</p>';
                        ceritaBW += '</div>';
                        ceritaBW += '<div class="small-btn-black">';
                        ceritaBW += '<a href="<?php echo site_url('cerita') ?>/' + val.slug  + '">';
                        ceritaBW += '<p>Lihat</p>';
                        ceritaBW += '</a>';
                        ceritaBW += '</div>';
                        ceritaBW += '</div>';
                        ceritaBW += '</div>';
                        $('#cerita-holder').append(ceritaBW);
                    });

                    if (!next) {
                        $('.load-more-tweet').remove();
                    }
                });
            }
        });
    });
</script>