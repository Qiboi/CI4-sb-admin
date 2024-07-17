<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel 6.a Penelitian DTTPS yang Melibatkan Mahasiswa</h1>
        <a href="<?= base_url('/penelitian/create')?>" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50 mr-2"></i>Tambah Data</a>
    </div>

    <!-- Tabel Penelitian DTTPS yang Melibatkan Mahasiswa -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Penelitian DTTPS yang Melibatkan Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>Nama Mahasiswa</th>
                            <th>Judul Kegiatan</th>
                            <th>Tahun</th>
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
                        foreach ($pen as $data) {
                        ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $data->dosen_penelitian?></td>
                            <td><?= $data->mahasiswa_penelitian?></td>
                            <td><?= $data->judul_penelitian?></td>
                            <td><?= $data->tahun_penelitian?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= base_url("/penelitian/delete/$data->id_penelitian")?>" class="btn btn-circle btn-danger mx-1"><i class="fas fa-trash"></i></a>
                                    <a href="<?= base_url("/penelitian/edit/$data->id_penelitian")?>" class="btn btn-circle btn-warning mx-1"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection() ?>