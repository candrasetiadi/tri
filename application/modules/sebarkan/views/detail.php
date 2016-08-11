<div class="content-wrapper">
    <!--SECTION-1-->
    <div class="section-1">
        <div class="row columns">
            <div class="small-12 large-6">
                <div class="large-12 small-12 user-photo-large">
                    <img src="<?php echo base_url($sebar['image']) ?>" alt="">
                </div>
            </div>
            <div class="small-12 large-6 user-profile-wrapper">
                <div class="user-title">
                    <div class="name">
                        <h1 class="bold"><?php echo $sebar['judul'] ?></h1>
                        <h4><?php echo $sebar['tagline'] ?></h4>
                    </div>
                    <div class="user-desc">
                        <p><?php echo nl2br($sebar['excerpt']) ?></p>
                    </div>
                    <!--USERSOCMED-->
                    <div class="user-socmed">
                        <ul>
                            <?php if ($sebar['website']): ?>
                                <li>
                                    <a href="#">
                                        <?php echo $sebar['website'] ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($sebar['twitter']): ?>
                                <li>
                                    <a href="#">
                                        <span><img src="<?php echo base_url('assets/packages/img/twitter-small.png') ?>"
                                                   alt=""></span>
                                        <?php echo $sebar['twitter'] ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($sebar['facebook']): ?>
                                <li>
                                    <a href="#">
                                        <span><img
                                                src="<?php echo base_url('assets/packages/img/facebook-small.png') ?>"
                                                alt=""></span>
                                        <?php echo $sebar['facebook'] ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ($sebar['instagram']): ?>
                                <li>
                                    <a href="#">
                                        <span><img src="<?php echo base_url('assets/packages/img/ig-small.png') ?>"
                                                   alt=""></span>
                                        <?php echo $sebar['instagram'] ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--/USERSOCMED-->
                    <div class="row columns">
                        <div class="divider hide-desktop">
                            <hr>
                        </div>
                    </div>
                    <div class="push-bottom">
                        <h4 class="bold">Kini giliranmu, apa ambisimu?</h4>
                        <a href="http://tri.co.id/ambisiku/registrasi/" onClick="_gaq.push(['_trackEvent', 'BtnSebarkanAmbisiku', 'clicked']);">
                            <div class="big-btn-green-left">
                                <div class="gallery-head">
                                    <h4 class="bold">>> Sebarkan #Ambisiku <<</h4>
                                </div>
                            </div>
                        </a>
                    </div>
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
    <div class="section-2">
        <div class="row">
            <div class="large-12 small-12 columns">
                <div class="gallery-head">
                    <h2 class="bold">Galeri #Ambisiku lainnya</h2>
                </div>
            </div>
            <!--GROUP 1-->
            <div class="group active columns">
                <div class="row small-up-1 medium-up-2 large-up-5 columns" id="sebarkan-holder">
                    <?php foreach ($other as $data): ?>
                        <div class="column gallery-thumb">
                            <a href="<?php echo site_url('sebarkan-ambisiku/' . $data['slug']) ?>">
                                <div class="thumbnail thumbnail-gallery"
                                     style="background-image: url(<?php echo base_url($data['thumbnail']) ?>);">
                                    <div class="video-des">
                                        <p>
                                            <span><?php echo $data['judul'] ?></span>
                                            <br> <?php echo $data['tagline'] ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--/GROUP 1-->
        </div>
        <?php if ($next): ?>
            <div class="load-more" id="load-more-sebar">
                <a href="javascript:;">
                    <img src="<?php echo base_url('assets/packages/img/btn-loadmore.png') ?>"
                         alt="">
                </a>
            </div>
        <?php endif; ?>
    </div>
    <!--<div class="row columns">-->
    <!--<div class="divider">-->
    <!--<hr>-->
    <!--</div>-->
    <!--</div>-->
</div>