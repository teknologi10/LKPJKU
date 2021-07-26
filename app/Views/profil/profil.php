<?= $this->include('front/header') ?>
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <?php foreach ($profil as $p) : ?>
                        <h2 class="breadcrumb_title"><?= $p['judul']; ?></h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $p['judul']; ?></li>
                        </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Text Content -->
<section class="blog_post_container pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        <?= $p['konten']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->include('front/footer') ?>