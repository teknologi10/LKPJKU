<?= $this->include('front/header') ?>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">Berita</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                    <div class="wrapper">
                        <div class="home_adv_srch_form">
                            <form action="<?= base_url(); ?>/berita" method="get">
                                <div class="container h-100">
                                    <div class="d-flex justify-content-center h-100">
                                        <div class="searchbar col-lg-12">
                                            <input class="search_input" type="text" name="cari" value="<?= old('cari'); ?>" placeholder="Search..." style="width: 100%;">
                                            <!-- <a href="#" class="search_icon"><i class="fas fa-search"></i></a> -->
                                            <button type="submit" value="Search" class="search_icon"><i class="flaticon-loupe"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Blog Post Content -->
<section class="blog_post_container">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="sidebar_search_widget">
                    <div class="blog_search_widget">
                        <form class="footer_mailchimp_form" action="<?= base_url(); ?>/berita" method="get">
                            <div class="col-lg-12">
                                <div class="col-auto">
                                    <input type="text" class="form-control" id="inlineFormInput" placeholder="Pencarian ketik disini" name="cari" value="<?= old('cari'); ?>">
                                    <button type="submit" class="btn btn-primary"><i class="flaticon-loupe"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_post_content">
                    <?php foreach ($berita as $a) : ?>
                        <div class="for_blog list-type feat_property">
                            <div class="thumb w100 pb10">
                                <img class="img-whp" src="<?= $a['gambar']; ?>" alt="">
                                <div class="tag bgc-thm"><a class="text-white" href="#">Berita JDIH DPRD</a></div>
                            </div>
                            <div class="details pb5">
                                <div class="tc_content pt15">
                                    <div class="bp_meta mb20">
                                        <ul>
                                            <li class="list-inline-item"><a><span class="flaticon-avatar mr10"></span><?= $a['user']; ?></a></li>
                                            <li class="list-inline-item">
                                                <a><span class="flaticon-date mr10"></span>
                                                    <?=
                                                    helper('tanggal');
                                                    $tgl = $a['tgl'];
                                                    echo tjs($tgl);

                                                    ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h4 class="mt15 mb20"><a href="<?= base_url(); ?>/berita/read/<?= $a['judul']; ?>"><strong><?= $a['judul']; ?></strong></a></h4>
                                    <p class="mb10"><?= substr($a['konten'], 0, 250); ?>...</p>
                                    <a class="tdu text-thm" href="<?= base_url(); ?>/berita/read/<?= $a['judul']; ?>">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mbp_pagination mt30">
                                <ul class="page_navigation">
                                    <li class="page-item">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="fa fa-angle-right"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="sidebar_feature_listing">
                    <h4 class="title">Berita Terbaru</h4>
                    <?php foreach ($terbaru as $t) : ?>
                        <div class="media">
                            <img class="align-self-start mr-3" src="
                            <?= base_url('img'); ?>/berita/<?php
                                                            if ($t['gambar'] == '') {
                                                                echo 'default.png';
                                                            } else {

                                                                echo $t['gambar'];
                                                            }
                                                            ?>" alt="" style="width:30%;">
                            <div class="media-body">
                                <h5 class="mt-0 post_title"><a href="<?= base_url(); ?>/berita/read/<?= $t['judul']; ?>"><strong style="color: black;"><?= $t['judul']; ?></strong></a></h5>
                                <a><?=
                                    helper('tanggal');
                                    $tgl = $t['tgl'];
                                    echo tjs($tgl);
                                    ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('front/footer') ?>