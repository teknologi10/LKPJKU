<?= $this->include('admin/header') ?>
<?= csrf_field(); ?>
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
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header" style="background:#182C61">
                <h3 class="card-title" style="color:#ffffff">Daftar Risalah Rapat</h3>
                <div class="card-tools">
                    <a href="<?= base_url(); ?>/risalah/add" class="btn btn-tool btn-sm">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($risalah as $r) : ?>
                            <tr>
                                <td class="text-center" style="width: 5%;"><?php echo $no++ ?></td>
                                <td>
                                    <?= $r['judul']; ?>
                                </td>
                                <td>
                                    <?= $r['keterangan']; ?>
                                </td>
                                <td class="text-center"><?= $r['tanggal']; ?>
                                </td>
                                <td class="text-center" style="width: 14%;">
                                    <a class="text-muted d-inline-block mr-2" href="<?= base_url(); ?>/risalah/edit_risalah/<?= $r['id']; ?>" class="btn btn-sm"> <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="text-muted d-inline-block" href="<?= base_url(); ?>/risalah/delete/<?= $r['id']; ?>" class="btn btn-sm" onclick="return confirm('apakah anda ingin hapus data?');"> <i class="fas fa-trash-alt"></i>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
    </section>
</div>



<?= $this->include('admin/footer') ?>