<div class="content-wrapper">
    <!--SECTION-1-->
    <div class="section-1">
        <div class="row columns">
            <div class="headline">
                <div class="small-12">
                    <h1 class="bold">Cerita #Ambisiku</h1>
                </div>
                <div class="small-12">
                    <div class="sub-nav">
                        <p>
                            Perjalanan ambisi anak muda Indonesia. Saksikan setiap hari Selasa dan Jumat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6">
                <div class="video-2">
                    <iframe width="420" height="315"
                            src="//www.youtube.com/embed/<?php echo $last['video_url'] ?>?rel=0&showinfo=0"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="small-12 large-6 user-profile-wrapper" style="margin-top:0">
                <div class="user-profile<?php echo (empty($images)) ? ' no-slider' : '' ?>">
                    <?php if ($last['judul']): ?>
                        <div class="name"><h4><?php echo $last['judul'] ?></h4></div>
                    <?php endif; ?>
                    <div class="user-desc">
                        <p><?php echo nl2br($last['tagline']) ?></p>
                    </div>
                    <?php if ($last['twitter'] || $last['facebook'] || $last['instagram']): ?>
                        <!--USERSOCMED-->
                        <div class="user-socmed">
                            <ul>
                                <?php if ($last['twitter']): ?>
                                    <li>
                                        <a href="javascript:;">
                                        <span>
                                            <img src="<?php echo base_url('assets/packages/img/twitter-small.png') ?>"
                                                 alt="">
                                        </span>
                                            <?php echo $last['twitter'] ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($last['facebook']): ?>
                                    <li>
                                        <a href="javascript:;">
                                        <span>
                                            <img src="<?php echo base_url('assets/packages/img/facebook-small.png') ?>"
                                                 alt="">
                                        </span>
                                            <?php echo $last['facebook'] ?>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if ($last['instagram']): ?>
                                    <li>
                                        <a href="javascript:;">
                                        <span>
                                            <img src="<?php echo base_url('assets/packages/img/ig-small.png') ?>"
                                                 alt="">
                                        </span>
                                            <?php echo $last['instagram'] ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!--/USERSOCMED-->
                    <?php endif; ?>

                    <?php if (!empty($images)): ?>
                        <div class="slider carousel multiple-items">
                            <?php foreach ($images as $image): ?>
                                <a href="<?php echo base_url($image['large']) ?>">
                                    <div class="slider-items"
                                         style="background-image:url(<?php echo base_url($image['small']) ?>);"></div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--/SECTION-1-->
    <div class="row columns">
        <div class="divider">
            <hr>
        </div>
    </div>
    <!--SECTION-2-->
    <?php if (isset($other[0])): ?>
        <div class="section-2">
            <div class="row">
                <div class="large-12 small-12 columns">
                    <div class="gallery-head">
                        <h2 class="bold">Cerita #Ambisiku lainnya</h2>
                    </div>
                </div>
                <!--GROUP 1-->
                <div class="group active columns">
                    <div class="row small-up-1 medium-up-2 large-up-4 columns" id="cerita-holder">
                        <!--GALLERY_VIDEO-->
                        <?php foreach ($other as $cerita): ?>
                            <div class="large-3 small-12 medium-6 columns">
                                <div class="thumbnail-video">
                                    <div class="video-3">
                                        <iframe width="420" height="315"
                                                src="//www.youtube.com/embed/<?php echo $cerita['video_url'] ?>?rel=0&showinfo=0"
                                                frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="video-title">
                                        <p><?php echo $cerita['judul'] ?></p>
                                    </div>
                                    <div class="video-desc">
                                        <p><?php echo character_limiter($cerita['tagline'], 70) ?></p>
                                    </div>
                                    <div class="small-btn-black">
                                        <a href="<?php echo site_url('cerita/' . $cerita['slug']) ?>">
                                            <p>Lihat</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!--/GROUP 1-->
            </div>

            <?php if ($next): ?>
                <div class="load-more-tweet">
                    <a href="javascript:;" id="load-more-cerita">
                        <img src="<?php echo base_url('assets/packages/img/btn-loadmore.png') ?>" alt="">
                    </a>
                </div>
            <?php endif; ?>

        </div>
        <div class="row columns">
            <div class="divider">
                <hr>
            </div>
        </div>
    <?php endif; ?>
    <!--/SECTION-2-->
</div>