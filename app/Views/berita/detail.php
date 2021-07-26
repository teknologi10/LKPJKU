<?= $this->include('front/header') ?>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="blog_single_post_heading text-center">
                    <div class="contents">
                        <h2 class="text-white mb15"> <?= $berita['judul']; ?> </h2>
                        <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-avatar mr10"></span><?= $berita['user']; ?></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-date mr10"></span>
                                    <?=
                                    helper('tanggal');
                                    $tgl = $berita['tgl'];
                                    echo tjs($tgl);
                                    ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Single Post -->
<section class="blog_post_container pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        <p><?= $berita['konten']; ?></p>
                        <div class="thumb mt30">
                            <img class="w100" src="<?= base_url(); ?>/img/berita/<?= $berita['gambar']; ?>" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->include('front/footer') ?>