<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kurikulum</h1>
        <a href="<?= base_url('/kurikulum')?>" class="d-none d-sm-inline-block btn btn-danger shadow-sm">
        <i class="fas fa-angle-left fa-sm text-white-50 mr-2"></i>Kembali</a>
    </div>

    <!-- Form Kurikulum -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Kurikulum</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('kurikulum/update/' . $kur->id_kurikulum)?>" method="post">
            <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="semester">Semester</label>
                    <input class="form-control" type="text" id="semester" name="semester" value="<?= $kur->semester?>">
                </div>
                <div class="mb-3">
                    <label for="kode_matkul">Kode Matkul</label>
                    <input class="form-control" type="text" id="kode_matkul" name="kode_matkul" value="<?= $kur->kode_matkul?>">
                </div>
                <div class="mb-3">
                    <label for="nama_matkul">Nama Matkul</label>
                    <input class="form-control" type="text" id="nama_matkul" name="nama_matkul" value="<?= $kur->nama_matkul?>">
                </div>
                <div class="mb-3">
                    <label for="sks">SKS</label>
                    <input class="form-control" type="number" id="sks" name="sks" " value="<?= $kur->sks?>">
                </div>
                <div class="mb-3">
                    <label for="konversi">Koversi ke Jam</label>
                    <input class="form-control" type="number" id="konversi" name="konversi" value="<?= $kur->konversi?>">
                </div>
                <div class="mb-3">
                    <label for="unit">Unit</label>
                    <input class="form-control" type="text" id="unit" name="unit" value="<?= $kur->unit?>">
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