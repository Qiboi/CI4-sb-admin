<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Penggunaan Dana</h1>
        <a href="<?= base_url('/penggunaandana')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Penggunaan Dana -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Penggunaan Dana</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/penggunaandana/store')?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="jenis_penggunaan">Jenis Penggunaan</label>
                    <input class="form-control" type="text" id="jenis_penggunaan" name="jenis_penggunaan">
                </div>
                <div class="mb-3">
                    <label for="biaya_penggunaan">Biaya</label>
                    <input class="form-control" type="text" id="biaya_penggunaan" name="biaya_penggunaan">
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