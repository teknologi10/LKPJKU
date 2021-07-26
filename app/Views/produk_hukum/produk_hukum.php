<?= $this->include('front/header') ?>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">PERATURAN dan KEPUTUSAN</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Peraturan dan Keputusan</li>
                    </ol>
                    <div class="wrapper">
                        <div class="home_adv_srch_form">
                            <form action="<?= base_url(); ?>/produk_hukum" method="get">
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
                        <form class="footer_mailchimp_form" action="<?= base_url(); ?>/produk_hukum" method="get">
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
                    <?php foreach ($peraturan as $p) : ?>
                        <div class="for_blog list-type feat_property" style="width: 100%;">
                            <!-- <div class="thumb w100 pb10">
                                <img class="img-whp" src="#" alt="">
                                <div class="tag bgc-thm"><a class="text-white" href="#"><?= $p['tahun']; ?></a></div>
                            </div> -->
                            <div class="details pb5">
                                <div class="tc_content pt15">
                                    <!-- <div class="bp_meta mb20">
                                        <ul>
                                            <li class="list-inline-item"><a><span class="flaticon-avatar mr10"></span>#</a></li>
                                            <li class="list-inline-item">
                                                <a><span class="flaticon-date mr10"></span>
                                                    <?= date("d-m-Y", $p['date']); ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <h4 class="mt15 mb20"><a href="<?= base_url(); ?>/peraturan/<?= $p['url']; ?>" target="_blank">
                                            <?php
                                            if ($p['kid'] == 1) {
                                                echo 'PERATURAN DPRD';
                                            } else if ($p['kid'] == 2) {
                                                echo 'KEPUTUSAN DPRD';
                                            } else if ($p['kid'] == 3) {
                                                echo 'KEPUTUSAN PIMPINAN DPRD';
                                            } else {
                                                echo 'KEPUTUSAN BADAN KEHORMATAN';
                                            }
                                            ?> NOMOR <?= $p['judul']; ?> TAHUN <?= $p['tahun']; ?>
                                        </a></h4>
                                    <p class="mb10"><?= $p['keterangan']; ?></p>
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
                <div class="terms_condition_widget">
                    <h4 class="title">KATEGORI</h4>
                    <div class="widget_list">
                        <ul class="list_details order_list list-style-type-bullet">
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/1">PERATURAN DPRD </a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/2">KEPUTUSAN DPRD </a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/3">KEPUTUSAN PIMPINAN DPRD </a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/4">KEPUTUSAN BADAN KEHORMATAN </a></li>
                        </ul>
                    </div>
                </div>
                <div class="terms_condition_widget">
                    <h4 class="title">PERATURAN TERBARU</h4>
                    <div class="widget_list">
                        <ul class="list_details order_list list-style-type-bullet">
                            <?php foreach ($terbaru as $t) : ?>
                                <li><a href="<?= base_url(); ?>/peraturan/<?= $t['url']; ?>">
                                        <?php
                                        if ($t['kid'] == 1) {
                                            echo 'PERATURAN DPRD';
                                        } else if ($t['kid'] == 2) {
                                            echo 'KEPUTUSAN DPRD';
                                        } else if ($t['kid'] == 3) {
                                            echo 'KEPUTUSAN PIMPINAN DPRD';
                                        } else {
                                            echo 'KEPUTUSAN BADAN KEHORMATAN';
                                        }
                                        ?> NOMOR <?= $t['judul']; ?> TAHUN <?= $t['tahun']; ?> </a></li>

                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('front/footer') ?>