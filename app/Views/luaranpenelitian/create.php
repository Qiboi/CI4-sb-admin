<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Luaran Penelitian/PkM Lainnya – Buku ber-ISBN, Book Chapter</h1>
        <a href="<?= base_url('/luaranpenelitian')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Luaran Penelitian -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Luaran Penelitian</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('luaranpenelitian/store')?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_luaran">Luaran Penelitian dan PkM</label>
                    <input class="form-control" type="text" id="nama_luaran" name="nama_luaran">
                </div>
                <div class="mb-3">
                    <label for="tahun_luaran">Tahun</label>
                    <input class="form-control" type="text" id="tahun_luaran" name="tahun_luaran">
                </div>
                <div class="mb-3">
                    <label for="keterangan_luaran">Keterangan</label>
                    <input class="form-control" type="text" id="keterangan_luaran" name="keterangan_luaran">
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