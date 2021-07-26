<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/guido-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 14:35:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="airbnb, booking, city guide, directory, events, hotel booking, listings, marketing, places, restaurant, restaurant">
    <meta name="description" content="Guido - Directory & Listing HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="<?= base_url('theme/guido'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('theme/guido'); ?>/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?= base_url('theme/guido'); ?>/css/responsive.css">
    <!-- Title -->
    <title>JDIH DPRD - Kabupaten Kulon Progo</title>
    <!-- Favicon -->
    <link href="<?= base_url('img'); ?>/logojdih.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="<?= base_url('img'); ?>/logojdih.ico" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .searchbar {
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background: white;
            border-radius: 30px;
            padding: 10px;
            display: inline-flex;
        }

        .search_input {
            color: black;
            border: 0;
            outline: 0;
            background: none;
            width: auto;
            padding: 0 10px;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_input {
            padding: 0 10px;
            width: auto;

            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_icon {
            background: linear-gradient(297.21deg, #2650D9 0%, #4567D5 92.82%);
            color: #ffffff;
        }

        .search_icon {
            height: 40px;
            width: 40px;
            float: right;

            justify-content: center;
            align-items: center;
            background: linear-gradient(297.21deg, #2650D9 0%, #4567D5 92.82%);
            border-radius: 50%;
            border-width: 0px;
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
            <div class="container-fluid p0">
                <!-- Ace Responsive Menu -->
                <nav>
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <img class="nav_logo_img img-fluid" src="<?= base_url('img'); ?>/logofix.png" alt="" style="height:60px">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="index.html" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="<?= base_url('img'); ?>/Logo.png" alt="" style="height:60px">
                        <img class="logo2 img-fluid" src="<?= base_url('img'); ?>/logofix.png" alt="" style="height:60px">

                    </a>
                    <!-- Responsive Menu Structure-->
                    <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                    <div class="ht_left_widget float-left">
                        <ul>
                            <li class="list-inline-item">
                                <div class="ht_search_widget">
                                    <div class="header_search_widget home1">
                                        <form class="form-inline mailchimp_form">
                                            <input type="text" class="custom_search_with_menu_trigger form-control" placeholder="Apa yang anda cari?" data-toggle="modal" data-target="#staticBackdrop">
                                            <button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                        <li>
                            <a href="<?= base_url(); ?>"><span class="title">Beranda</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="title">Profil</span></a>
                            <!-- Level Two-->
                            <ul>
                                <li><a href="<?= base_url(); ?>/profil/1">Sejarah</a></li>
                                <li><a href="<?= base_url(); ?>/profil/2">Visi Misi</a></li>
                                <li><a href="<?= base_url(); ?>/profil/3">Dasar Hukum</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">Dokumen</span></a>
                            <!-- Level Two-->
                            <ul>
                                <li><a href="<?= base_url(); ?>/produk_hukum/kategori/1">Peraturan DPRD</a></li>
                                <li><a href="<?= base_url(); ?>/produk_hukum/kategori/2">Keputusan DPRD</a></li>
                                <li><a href="<?= base_url(); ?>/produk_hukum/kategori/3">Keputusan Pimpinan DPRD</a></li>
                                <li><a href="<?= base_url(); ?>/risalah">Risalah Rapat Pembahasan Raperda</a></li>
                                <li><a href="<?= base_url(); ?>/naskah_akademik">Naskah Akademik Raperda Inisiatif DPRD</a></li>
                                <li><a href="<?= base_url(); ?>/produk_hukum/kategori/4">Keputusan Badan Kehormatan</a></li>
                                <li><a href="#">Buku Hukum</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/berita"><span class="title">Berita</span></a>
                        </li>
                        <li><a href="<?= base_url(); ?>/login">Login</a></li>

                    </ul>
                </nav>
            </div>
        </header>
        <!-- Modal -->
        <!-- <div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md mt100" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body container pb20 pl0 pr0 pt0">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Masuk</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content container" id="myTabContent">
                            <div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="col-lg-12">
                                    <div class="login_form">
                                        <form action="#">
                                            <div class="input-group mb-2 mr-sm-2">
                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username / Email">
                                            </div>
                                            <div class="input-group form-group mb5">
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-log btn-block btn-thm">Masuk</button>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="col-lg-12">
                                    <div class="sign_up_form">
                                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Customer</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Business Owner</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <form action="#">
                                                    <div class="form-group input-group">
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <input type="text" class="form-control" id="exampleInputName" placeholder="Username">
                                                    </div>
                                                    <div class="form-group input-group mb20">
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <form action="#">
                                                    <div class="form-group input-group">
                                                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Username">
                                                    </div>
                                                    <div class="form-group input-group mb20">
                                                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Main Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="main_logo_home2 text-left">
                        <img class="nav_logo_img img-fluid mt15" src="<?= base_url('img'); ?>/logofix.png" alt="" style="height:50px">
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#" data-toggle="modal" data-target="#staticBackdrop"><span class="flaticon-loupe"></span></a></li>
                        <li></li>
                        <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><a href="<?= base_url(); ?>">Beranda</a></li>
                    </li>
                    <li><span>Profil</span>
                        <ul>
                            <li><a href="<?= base_url(); ?>/profil/1">Sejarah</a></li>
                            <li><a href="<?= base_url(); ?>/profil/2">Visi Misi</a></li>
                            <li><a href="<?= base_url(); ?>/profil/3">Dasar Hukum</a></li>
                        </ul>
                    </li>
                    <li><span>Dokumen</span>
                        <ul>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/1">Peraturan DPRD</a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/2">Keputusan DPRD</a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/3">Keputusan Pimpinan DPRD</a></li>
                            <li><a href="<?= base_url(); ?>/risalah">Risalah Rapat Pembahasan Raperda</a></li>
                            <li><a href="<?= base_url(); ?>/naskah_akademik">Naskah Akademik Raperda Inisiatif DPRD</a></li>
                            <li><a href="<?= base_url(); ?>/produk_hukum/kategori/4">Keputusan Badan Kehormatan</a></li>
                            <li><a href="#">Buku Hukum</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url(); ?>/berita">Berita</a></li>
                    <li><a href="<?= base_url(); ?>/login"><span class="flaticon-avatar"></span> Login</a></li>
                </ul>
            </nav>
        </div>

        <!-- Search Field Modal -->
        <section class="modal fade search_dropdown" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup_modal_wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a class="close closer" data-dismiss="modal" aria-label="Close" href="#"><span><img src="<?= base_url('theme/guido'); ?>/images/icons/close.svg" alt=""></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 mb30">
                                        <h3>Peraturan dan Keputusan</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/produk_hukum/kategori/1" class="title">
                                                    Peraturan DPRD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/produk_hukum/kategori/2" class="title">
                                                    Keputusan DPRD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/produk_hukum/kategori/3" class="title">
                                                    Keputusan Pimpinan DPRD
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/produk_hukum/kategori/4" class="title">
                                                    Keputusan Badan Kehormatan
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb30">
                                        <h3>Non Peraturan</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/risalah" class="title">
                                                    Risalah Rapat
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="<?= base_url(); ?>/naskah_akademik" class="title">
                                                    Naskah Akademik
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-3">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-book"></span></div>
                                            <div class="content-details">
                                                <a href="#" class="title">
                                                    Buku Hukum
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Home Design -->
        <section class="home-one home1-overlay bg-img1">
            <div class="container">
                <div class="row posr">
                    <div class="col-lg-12">
                        <div class="home_content home1">
                            <div class="home-text text-center">
                                <h2 class="fz50">JDIH DPRD KABUPATEN KULON PROGO</h2>
                                <p class="fz18 color-white">Jaringan Dokumentasi dan Informasi Hukum Dewan Perwakilan Rakyat Daerah Kabupaten Kulon Progo</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-xl-8">
                                    <div class="home_adv_srch_opt text-center">
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
                                        <div class="home_mobile_slider home_custom_list dn db-767">
                                            <div class="item">
                                                <div class="icon_home1">
                                                    <div class="icon"><span class="flaticon-book"></span></div>
                                                    <strong><a href="<?= base_url(); ?>/produk_hukum" style="color: #ffffff;">Peraturan dan Keputusan</a></strong>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="icon_home1">
                                                    <div class="icon"><span class="flaticon-book"></span></div>
                                                    <strong><a href="<?= base_url(); ?>/risalah" style="color: #ffffff;">Risalah Rapat</a></strong>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="icon_home1">
                                                    <div class="icon"><span class="flaticon-book"></span></div>
                                                    <strong><a href="<?= base_url(); ?>/naskah_akademik" style="color: #ffffff;">Naskah Akademik</a></strong>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="icon_home1">
                                                    <div class="icon"><span class="flaticon-book"></span></div>
                                                    <strong><a href="#" style="color: #ffffff;">Buku Hukum</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Properties -->
        <section id="feature-property" class="feature-property pt0 border-bottom">
            <div class="container p0">
                <div class="feature-content dn-767">
                    <div class="row justify-content-center mt-80 mb45">
                        <div class="col-lg-4 text-center">
                            <p><em class="text-white">Apa yang anda cari ?</em></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="icon-box text-center">
                                <div class="icon"><span class="flaticon-book"></span></div>
                                <div class="content-details">
                                    <a href="<?= base_url(); ?>/produk_hukum" class="title">
                                        Peraturan dan Keputusan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="icon-box text-center">
                                <div class="icon"><span class="flaticon-book"></span></div>
                                <div class="content-details">
                                    <a href="<?= base_url(); ?>/risalah" class="title">
                                        Risalah Rapat
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="icon-box text-center">
                                <div class="icon"><span class="flaticon-book"></span></div>
                                <div class="content-details">
                                    <a href="<?= base_url(); ?>/naskah_akademik" class="title">
                                        Naskah Akademik
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3">
                            <div class="icon-box text-center">
                                <div class="icon"><span class="flaticon-book"></span></div>
                                <div class="content-details">
                                    <a href="#" class="title">
                                        Buku Hukum
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt100-767">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h2>Berita Terbaru</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($berita as $a) : ?>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="for_blog feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="<?= base_url('img'); ?>/berita/<?php
                                                                                                if ($a['gambar'] == '') {
                                                                                                    echo 'default.png';
                                                                                                } else {

                                                                                                    echo $a['gambar'];
                                                                                                }
                                                                                                ?>" alt="">
                                    <div class="tag bgc-thm"><a class="text-white" href="#">Berita Terbaru</a></div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <div class="bp_meta">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-avatar mr10"></span><?= $a['user']; ?></a></li>
                                                <li class="list-inline-item"><a href="#"><span class="flaticon-date mr10"></span>
                                                        <?=
                                                        helper('tanggal');
                                                        $tgl = $a['tgl'];
                                                        echo tjs($tgl);

                                                        ?></a></li>
                                            </ul>
                                        </div>
                                        <h4><a href="<?= base_url(); ?>/berita/read/<?= $a['judul']; ?>"><strong><?= $a['judul']; ?></strong></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?= $this->include('front/footer') ?>