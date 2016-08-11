<div class="content-wrapper">
    <!--SECTION-1-->
    <div class="section-1">
        <div class="row columns">
            <div class="headline">
                <div class="small-12">
                    <h1 class="bold">Sebarkan #Ambisiku </h1>
                </div>
                <div class="small-12">
                    <div class="sub-nav">
                        <p>Tunjukan ambisimu dan jadilah inspirasi.</p>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 sub-head-desc">
                <p>Ambisi yang kamu sebarkan akan Tri bantu
                    promosikan di sosial mediaTri Indonesia (Facebook, Twitter dan
                    Instagram).</p>
            </div>
            <div class="small-12 large-6">
                <a href="http://tri.co.id/ambisiku/registrasi/" onClick="_gaq.push(['_trackEvent', 'BtnSebarkanAmbisiku', 'clicked']);">
                    <div class="big-btn-green">
                        <h4 class="bold">>> Sebarkan #Ambisiku <<</h4>
                    </div>
                </a>
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
                    <h2 class="bold">Galeri #Ambisiku</h2>
                </div>
            </div>
            <!--GROUP 1-->
            <div class="group active columns">
                <div class="row small-up-1 medium-up-2 large-up-5 columns" id="sebarkan-holder">
                    <?php foreach ($sebar as $data): ?>
                        <div class="column gallery-thumb">
                            <a href="<?php echo site_url('sebarkan-ambisiku/' . $data['slug']) ?>">
                                <div class="thumbnail thumbnail-gallery"
                                     style="background-image: url(<?php echo base_url($data['thumbnail']) ?>);">
                                    <div class="video-des">
                                        <p>
                                            <span><?php echo $data['judul'] ?></span>
                                            <br><?php echo $data['tagline'] ?>
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
</div>