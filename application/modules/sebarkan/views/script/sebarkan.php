<script src="http://www.youtube.com/player_api"></script>
<script>
    var next = <?php echo $next ?>;

    $(function () {
        $('#load-more-sebar').click(function () {
            if (next) {
                $.getJSON('<?php echo site_url('sebarkan-ambisiku/other') ?>/' + next, function (json) {
                    next = json.next;
                    $.each(json.data, function (key, val) {
                        var sebarkanHolder = '<div class="column gallery-thumb">';
                        sebarkanHolder += '<a href="' + val.url + '">';
                        sebarkanHolder += '<div class="thumbnail thumbnail-gallery" style="background-image: url(' + val.thumbnail + ');">';
                        sebarkanHolder += '<div class="video-des">';
                        sebarkanHolder += '<p>';
                        sebarkanHolder += '<span>'+val.judul+'</span>';
                        sebarkanHolder += '<br>'+val.tagline+'</p>';
                        sebarkanHolder += '</div>';
                        sebarkanHolder += '</div>';
                        sebarkanHolder += '</a>';
                        sebarkanHolder += '</div>';
                        $('#sebarkan-holder').append(sebarkanHolder);
                    });

                    if (!next) {
                        $('.load-more').remove();
                    }
                });
            }
        });
    });
</script>