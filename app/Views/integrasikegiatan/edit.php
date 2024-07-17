<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran</h1>
        <a href="<?= base_url('/integrasikegiatan')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Integrasi Kegiatan Penelitian -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Integrasi Kegiatan Penelitian</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('/integrasikegiatan/update/' . $integrasi->id_integrasi)?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="judul_integrasi">Judul Penelitian</label>
                    <input class="form-control" type="text" id="judul_integrasi" name="judul_integrasi" value="<?= $integrasi->judul_integrasi?>">
                </div>
                <div class="mb-3">
                    <label for="dosen_integrasi">Nama Dosen</label>
                    <input class="form-control" type="text" id="dosen_integrasi" name="dosen_integrasi" value="<?= $integrasi->dosen_integrasi?>">
                </div>
                <div class="mb-3">
                    <label for="matkul_integrasi">Mata Kuliah</label>
                    <input class="form-control" type="text" id="matkul_integrasi" name="matkul_integrasi" value="<?= $integrasi->matkul_integrasi?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_integrasi">Tahun</label>
                    <input class="form-control" type="number" id="tahun_integrasi" name="tahun_integrasi" value="<?= $integrasi->tahun_integrasi?>">
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