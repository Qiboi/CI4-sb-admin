<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Penelitian DTTPS yang Melibatkan Mahasiswa</h1>
        <a href="<?= base_url('/penelitian')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Penelitian DTTPS yang Melibatkan Mahasiswa -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Penelitian DTTPS yang Melibatkan Mahasiswa</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/penelitian/update/' . $pen->id_penelitian)?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="dosen_penelitian">Nama Dosen</label>
                    <input class="form-control" type="text" id="dosen_penelitian" name="dosen_penelitian" value="<?= $pen->dosen_penelitian?>">
                </div>
                <div class="mb-3">
                    <label for="mahasiswa_penelitian">Nama Mahasiswa</label>
                    <input class="form-control" type="text" id="mahasiswa_penelitian" name="mahasiswa_penelitian" value="<?= $pen->mahasiswa_penelitian?>">
                </div>
                <div class="mb-3">
                    <label for="judul_kegiatan">Judul Kegiatan</label>
                    <input class="form-control" type="text" id="judul_penelitian" name="judul_penelitian" value="<?= $pen->judul_penelitian?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_penelitian">Tahun</label>
                    <input class="form-control" type="number" id="tahun_penelitian" name="tahun_penelitian" value="<?= $pen->tahun_penelitian?>">
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