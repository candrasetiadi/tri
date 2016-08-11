<script src="http://www.youtube.com/player_api"></script>
<script>
    var videos = <?php echo $video;?>;
    var current = 0;
    var next = current + 1;
    var player;

    function onYouTubePlayerAPIReady() {
        player = new YT.Player('video', {
            height: '390',
            width: '640',
            videoId: videos[current],
            playerVars: {
                'autoplay': 0,
                'controls': 1,
                'rel': 0,
                'showinfo': 0
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // autoplay video
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // when video ends
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            if ((current + 1) < videos.length) {
                player.loadVideoById(videos[next]);
                current = next;
                next = next + 1;
            } else {
                current = 0;
                next = current + 1;
                player.loadVideoById(videos[current]);
                player.stopVideo();
            }
        }
    }
</script>