<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel 4 Penggunaan Dana</h1>
        <a href="<?= base_url('/penggunaandana/create')?>" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50 mr-2"></i>Tambah Data</a>
    </div>

    <!-- Tabel Penggunaan Dana -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Penggunaan Dana</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Penggunaan</th>
                            <th>Biaya</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th class="border-none">Jumlah</th>
                            <th><?= $count?></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                        $no = 1;
                        foreach ($penggunaan as $data) {
                        ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $data->jenis_penggunaan?></td>
                            <td><?= $data->biaya_penggunaan?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= base_url("/penggunaandana/delete/$data->id_penggunaan")?>" class="btn btn-circle btn-danger mx-1"><i class="fas fa-trash"></i></a>
                                    <a href="<?= base_url("/penggunaandana/edit/$data->id_penggunaan")?>" class="btn btn-circle btn-warning mx-1"><i class="fas fa-edit"></i></a>
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