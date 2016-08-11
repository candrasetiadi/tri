<div class="content-wrapper">
    <!--SECTION-1-->
    <div class="section-1">
        <div class="row">
            <div class="hide-desktop columns">
                <div class="headline">
                    <div class="small-12">
                        <h1 class="bold">Raih segala ambisi <br class="hide-desktop"> bersama Tri.</h1>
                    </div>
                    <div class="small-12">
                        <div class="sub-nav">
                            <ul>
                                <li><a href="<?php echo site_url('cerita-ambisiku') ?>">Cerita</a></li>
                                <li><img src="<?php echo base_url('assets/packages/img/dot.png') ?>" alt=""></li>
                                <li><a href="<?php echo site_url('kelas-ambisiku') ?>">Kelas</a></li>
                                <li><img src="<?php echo base_url('assets/packages/img/dot.png') ?>" alt=""></li>
                                <li><a href="<?php echo site_url('sebarkan-ambisiku') ?>">Sebarkan</a></li>
                                <li><img src="<?php echo base_url('assets/packages/img/dot.png') ?>" alt=""></li>
                                <li><a href="<?php echo site_url('parade-ambisiku') ?>">Parade</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 columns">
                <div class="video">
                    <div id="video"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/SECTION-1-->
    <div class="row columns">
        <div class="divider hide-desktop">
            <hr>
        </div>
    </div>
    <!--SECTION-2-->
    <div class="section-2-nomargin">
        <div class="row small-up-1 medium-up-2 large-up-4 columns nav-bottom-container">
            <div class="column nav-bottom-wrapper">
                <div class="large-12 nav-bottom">
                    <!--VIDEO-->
                    <a id="modal" data-open="modal-video">
                        <div class="small-8 medium-8 large-8 thumbnail-large-photo left">
                            <img class="play" src="<?php echo base_url('assets/packages/img/play.png') ?>" alt="">
                            <img src="<?php echo $lastCerita['thumbnail'] ?>" alt="">
                        </div>
                    </a>
                    <!--/VIDEO-->
                    <!--DESC-->
                    <div class="small-4 medium-4 large-4 thumbnail-large-desc right">
                        <h4 class="bold">Cerita #Ambisiku</h4>
                        <div class="small-btn-pink">
                            <a href="<?php echo site_url('cerita-ambisiku') ?>">Lihat</a>
                        </div>
                    </div>
                    <!--/DESC-->
                </div>
            </div>
            <div class="column nav-bottom-wrapper">
                <div class="large-12 nav-bottom">
                    <!--DESC-->
                    <div class="small-8 medium-8 large-8 thumbnail-large-photo left right-mobile">
                        <img src="<?php echo base_url($lastMentor['photo'])?>" alt="">
                    </div>
                    <!--/DESC-->
                    <!--VIDEO-->
                    <div class="small-4 medium-4 large-4 thumbnail-large-desc right left-mobile">
                        <h4 class="bold">Kelas #Ambisiku</h4>
                        <div class="small-btn-blue"><a href="<?php echo site_url('kelas-ambisiku');?>">Lihat</a></div>
                    </div>
                    <!--/VIDEO-->
                </div>
            </div>
            <div class="column nav-bottom-wrapper">
                <div class="large-12 nav-bottom">
                    <!--VIDEO-->
                    <div class="small-8 medium-8 large-8 thumbnail-large-photo left">
                        <img src="<?php echo base_url($lastSebarkan['thumbnail'])?>" alt="">
                    </div>
                    <!--/VIDEO-->
                    <!--DESC-->
                    <div class="small-4 medium-4 large-4 thumbnail-large-desc right">
                        <h4 class="bold">Sebarkan #Ambisiku</h4>
                        <div class="small-btn-green1"><a href="<?php echo site_url('sebarkan-ambisiku');?>">Lihat</a></div>
                    </div>
                    <!--/DESC-->
                </div>
            </div>
            <div class="column nav-bottom-wrapper">
                <div class="large-12 nav-bottom">
                    <!--DESC-->
                    <div class="small-8 medium-8 large-8 thumbnail-large-photo left right-mobile pull-up">
                        <img src="<?php echo base_url('assets/packages/img/thumbnail-large-3-2.jpg') ?>" alt="">
                    </div>
                    <!--/DESC-->
                    <!--VIDEO-->
                    <div class="small-4 medium-4 large-4 thumbnail-large-desc right left-mobile">
                        <h4 class="bold">Parade #Ambisiku</h4>
                        <div class="small-btn-green2"><a href="<?php echo site_url('parade-ambisiku') ?>">Segera</a></div>
                    </div>
                    <!--/VIDEO-->
                </div>
            </div>
        </div>
    </div>
    <!--/SECTION-2-->
</div>

<div class="reveal" id="modal-video" data-reveal data-close-on-click="true" data-animation-in="slide-in-down"
     data-animation-out="slide-out-down">
    <div class="video-popup">
        <iframe width="420" height="315"
                src="//www.youtube.com/embed/<?php echo $lastCerita['video_url'] ?>?rel=0=1&showinfo=0"
                frameborder="0" allowfullscreen></iframe>
    </div>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true"><img src="<?php echo base_url('assets/packages/img/close.jpg') ?>" alt=""></span>
    </button>
</div>