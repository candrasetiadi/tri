<script src="http://www.youtube.com/player_api"></script>
<script>
    var nextMentor = '<?php echo $nextMentor ?>';
    var nextInterview = '<?php echo $nextVideo ?>';

    $(function () {
        $('#load-more-mentor').click(function () {
            if (nextMentor) {
                $.getJSON('<?php echo site_url('kelas-ambisiku/mentor') ?>/' + nextMentor, function (json) {
                    nextMentor = json.nextMentor;
                    $.each(json.data, function (key, val) {
                        var classBW = '';
                        if (key == 0) {
                            classBW = 'bg-white';
                        } else if (key == 1) {
                            classBW = 'bg-blue bg-blue-mobile';
                        } else if (key == 2) {
                            classBW = 'bg-blue';
                        } else if (key == 3) {
                            classBW = 'bg-white bg-blue-mobile';
                        }

                        var mentorHolder = '<div class="column">';
                        mentorHolder += '<div class="tweet-container ' + classBW + '">';
                        mentorHolder += '<div class="large-9 medium-9 small-12 left">';
                        mentorHolder += '<div class="tweet-photo left" style="background-image: url(' + val.image + ');"></div>';
                        mentorHolder += '<div class="tweet-name">';
                        mentorHolder += '<h5>' + val.name + '</h5>';
                        mentorHolder += '<h6>' + val.twitter + '</h6>';
                        mentorHolder += '<p>' + val.description + '</p>';
                        mentorHolder += '</div>';
                        mentorHolder += '</div>';
                        mentorHolder += '<div class="large-3 small-1 medium-3 right date-wrapper">';
                        mentorHolder += '<div class="date">';
                        mentorHolder += '<p>' + val.schedule + '</p>';
                        mentorHolder += '</div>';
                        if (val.conversation) {
                            mentorHolder += '<a href="'+val.conversation+'" target="_blank">';
                            mentorHolder += '<div class="lihat">Lihat</div>';
                        } else {
                            mentorHolder += '<a href="#">';
                            mentorHolder += '<div class="lihat lihat-disable">Lihat</div>';
                        }
                        mentorHolder += '</a>';
                        mentorHolder += '</div>';
                        mentorHolder += '</div>';
                        mentorHolder += '</div>';
                        $('#mentor-holder').append(mentorHolder);
                    });

                    if (!nextMentor) {
                        $('.load-more-tweet').remove();
                    }
                });
            }
        });

        $('#load-more-interview').click(function () {
            if (nextInterview) {
                $.getJSON('<?php echo site_url('kelas-ambisiku/video') ?>/' + nextInterview, function (json) {
                    nextInterview = json.nextVideo;
                    $.each(json.data, function (key, val) {
                        var videoHolder = '<div class="large-3 small-12 medium-6 columns">';
                        videoHolder += '<div class="thumbnail-video">';
                        videoHolder += '<div class="video-3">';
                        videoHolder += '<iframe width="420" height="315" src="//www.youtube.com/embed/' + json.video_id + '?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>';
                        videoHolder += '</div>';
                        videoHolder += '<div class="video-title bg-blue-2">';
                        videoHolder += '<p>' + json.title + '</p>';
                        videoHolder += '</div>';
                        videoHolder += '<div class="video-desc">';
                        videoHolder += '<p>' + json.description + '</p>';
                        videoHolder += '</div>';
                        videoHolder += '</div>';
                        videoHolder += '</div>';
                        $('#video-holder').append(videoHolder);
                    });

                    if (!nextInterview) {
                        $('.load-more').remove();
                    }
                });
            }
        });
    });
</script>