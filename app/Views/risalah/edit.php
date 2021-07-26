<?= $this->include('admin/header') ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark text-center"> Selamat Datang dimenu admin JDIH DPRD</h1>
                </div>
            </div><br>
            <!-- Small Box (Stat card) -->


        </div>
    </section>

    <section class="content mx-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header" style="background:#182C61">
                            <h3 class="card-title">Edit Risalah Rapat</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form role="form" action="<?= base_url(); ?>/risalah/update/<?= $risalah['id']; ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="risalahdalama" value="<?= $risalah['file']; ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" placeholder="Judul ..." name="judul" value="<?= (old('judul')) ? old('judul') : $risalah['judul'] ?>">
                                            <div class=" invalid-feedback">
                                                <?= $validation->getError('judul'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" type="text" placeholder="Keterangan ..." name="ket"><?= (old('ket')) ? old('ket') : $risalah['keterangan'] ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class=" col-sm-12">
                                        <div class="form-group">
                                            <label for="peraturan">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input <?= ($validation->hasError('risalah')) ? 'is-invalid' : ''; ?>" id="raperda" name="raperda" value="<?= (old('risalah')) ? old('raperda') : $risalah['file'] ?>"><br>
                                                    <div class="error invalid-feedback">
                                                        <?= $validation->getError('raperda'); ?>
                                                    </div><br>
                                                    <label class="custom-file-label" for="raperda"><?= $risalah['file']; ?></label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url(); ?>/risalah/tampil" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-success  float-right">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?= $this->include('admin/footer') ?>