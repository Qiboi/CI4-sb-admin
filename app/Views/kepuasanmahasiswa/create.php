<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Kepuasan Mahasiswa</h1>
        <a href="<?= base_url('/kepuasanmahasiswa')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Kepuasan Mahasiswa -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Kepuasan Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('kepuasanmahasiswa/store')?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="aspek_kepuasan">Aspek yang diatur</label>
                    <input class="form-control" type="text" id="aspek_kepuasan" name="aspek_kepuasan">
                </div>
                <div class="mb-3">
                    <label for="sangat_baik">Sangat Baik</label>
                    <input class="form-control" type="text" id="sangat_baik" name="sangat_baik">
                </div>
                <div class="mb-3">
                    <label for="baik">Baik</label>
                    <input class="form-control" type="text" id="baik" name="baik">
                </div>
                <div class="mb-3">
                    <label for="cukup">Cukup</label>
                    <input class="form-control" type="text" id="cukup" name="cukup">
                </div>
                <div class="mb-3">
                    <label for="kurang">Kurang</label>
                    <input class="form-control" type="text" id="kurang" name="kurang">
                </div>
                <div class="mb-3">
                    <label for="rencana_kepuasan">Rencana Tindak Lanjut</label>
                    <input class="form-control" type="text" id="rencana_kepuasan" name="rencana_kepuasan">
                </div>
                <div class="mb-3">                    
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection() ?>