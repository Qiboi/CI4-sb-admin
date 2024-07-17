<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel 5.a Kurikulum, Capaian Pembelajaran dan Rencana Pembelajaran</h1>
        <a href="<?= base_url('/kurikulum/create')?>" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50 mr-2"></i>Tambah Data</a>
    </div>

    <!-- Tabel Kurikulum, Capaian Pembelajaran dan Rencana Pembelajaran -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Kurikulum, Capaian Pembelajaran dan Rencana Pembelajaran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Semester</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Konversi ke jam</th>
                            <th>Unit</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                    <?php
                        $no = 1;
                        foreach ($kur as $data) {
                        ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $data->semester?></td>
                            <td><?= $data->kode_matkul?></td>
                            <td><?= $data->nama_matkul?></td>
                            <td><?= $data->sks?></td>
                            <td><?= $data->konversi?></td>
                            <td><?= $data->unit?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= base_url("/kurikulum/delete/$data->id_kurikulum")?>" class="btn btn-circle btn-danger mx-1"><i class="fas fa-trash"></i></a>
                                    <a href="<?= base_url("/kurikulum/edit/$data->id_kurikulum")?>" class="btn btn-circle btn-warning mx-1"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>