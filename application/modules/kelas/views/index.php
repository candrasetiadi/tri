<div class="content-wrapper">
    <!--SECTION-1-->
    <div class="section-1">
        <div class="row columns">
            <div class="headline">
                <div class="small-12">
                    <h1 class="bold">Kelas #Ambisiku </h1>
                </div>
                <div class="small-12">
                    <div class="sub-nav">
                        <p>Inspirasi dari ambisi mereka yang menginspirasi.</p>
                    </div>
                </div>
            </div>
            <div class="small-12 large-12 tweet-talk">
                <div class="large-1 medium-2 small-1 left tweet-logo"><img
                        src="<?php echo base_url('assets/packages/img/twitter-large.png') ?>" alt="">
                </div>
                <div class="large-11 medium-10 small-10  right tweet-head">
                    <h1 class="bold">@triindonesia</h1><br>

                    <h2>Setiap Jumat jam 7 malam.</h2>
                </div>

            </div>
        </div>
    </div>
    <!--/SECTION-1-->
    <!--TWEETWRAPPER-->
    <div class="row columns">
        <!--/GROUP-TWEET-1-->
        <div class="group-tweet active">
            <div class="row small-up-1 medium-up-1 large-up-2" id="mentor-holder">
                <?php $i = 1;
                foreach ($mentor as $ment):
                    if ($i == 1) {
                        $bg = 'bg-white';
                    } else if ($i == 2) {
                        $bg = 'bg-blue bg-blue-mobile';
                    } else if ($i == 3) {
                        $bg = 'bg-blue';
                    } else if ($i == 4) {
                        $bg = 'bg-white bg-blue-mobile';
                    }
                    ?>
                    <!--TWEET-->
                    <div class="column">
                        <div class="tweet-container <?php echo $bg; ?>">
                            <div class="large-9 medium-9 small-12 left">
                                <div class="tweet-photo left"
                                     style="background-image: url(<?php echo base_url($ment['photo_url']) ?>);"></div>
                                <div class="tweet-name">
                                    <h5><?php echo $ment['name'] ?></h5>
                                    <h6><?php echo $ment['twitter'] ?></h6>

                                    <p><?php echo $ment['description'] ?></p>
                                </div>
                            </div>
                            <div class="large-3 small-1 medium-3 right date-wrapper">
                                <div class="date">
                                    <p><?php echo $ment['schedule'] == null ? '--' : date('d F', strtotime($ment['schedule'])) ?></p>
                                </div>
                                <a href="<?php echo ($ment['conversation']) ? $ment['conversation']:'#' ?>"<?php echo ($ment['conversation']) ? ' target="_blank"':'' ?>>
                                    <div class="lihat <?php echo ($ment['conversation']) ? '':'lihat-disable' ?>">Lihat</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/TWEET-->
                    <?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
    <?php if ($nextMentor): ?>
        <div class="load-more-tweet">
            <a href="javascript:;" id="load-more-mentor"><img
                    src="<?php echo base_url('assets/packages/img/btn-loadmore.png') ?>" alt=""></a>
        </div>
    <?php endif; ?>
    <!--/TWEETWRAPPER-->
    <div class="row columns">
        <div class="divider">
            <hr>
        </div>
    </div>
    <?php if (isset($interview[0])): ?>
        <!--SECTION-2-->
        <div class="section-2">
            <div class="row">
                <div class="large-12 small-12 columns">
                    <div class="gallery-head">
                        <h2 class="bold">Kelas #Ambisiku Interview</h2>
                    </div>
                </div>
                <!--GROUP 1-->
                <div class="group active" id="video-holder" style="width: 100%;">
                    <div class="row small-up-1 medium-up-2 large-up-4 columns">
                        <!--GALLERY_VIDEO-->
                        <?php foreach ($interview as $video): ?>
                            <div class="large-3 small-12 medium-6 columns">
                                <div class="thumbnail-video">
                                    <div class="video-3">
                                        <iframe width="420" height="315"
                                                src="//www.youtube.com/embed/<?php echo $video['video_url'] ?>?rel=0&showinfo=0"
                                                frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="video-title bg-blue-2">
                                        <p><?php echo $video['judul'] ?></p>
                                    </div>
                                    <div class="video-desc">
                                        <p><?php echo $video['excerpt'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--GALLERY_VIDEO-->
                    </div>
                </div>
                <!--/GROUP 1-->
            </div>
            <?php if ($nextVideo): ?>
                <div class="load-more">
                    <a href="javascript:;" id="load-more-interview"><img
                            src="<?php echo base_url('assets/packages/img/btn-loadmore.png') ?>" alt=""></a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>