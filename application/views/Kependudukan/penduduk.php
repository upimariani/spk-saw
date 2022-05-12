<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Data Kependudukan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kependudukan</li>
                    </ol>
                </div>
            </div>
            <a href="<?= base_url('cKependudukan/create') ?>" class="btn btn-app">
                <i class="fas fa-feather"></i> Tambah Penduduk
            </a>
            <?php
            if ($this->session->userdata('success')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>';
                echo $this->session->userdata('success');
                echo ' </div>';
            }
            ?>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Kependudukan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">No Kartu Keluarga</th>
                                        <th class="text-center">Nama Kepala Keluarga</th>
                                        <th class="text-center">Nama Istri</th>
                                        <th class="text-center">Jumlah Anak</th>
                                        <th class="text-center">RT</th>
                                        <th class="text-center">RW</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($penduduk as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $value->no_kk ?></td>
                                            <td><?= $value->nama_kk ?></td>
                                            <td><?= $value->nama_ibu ?></td>
                                            <td><?= $value->jumlah_anak ?></td>
                                            <td><?= $value->rt ?></td>
                                            <td><?= $value->rw ?></td>
                                            <td><?= $value->alamat ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-success" href="<?= base_url('cKependudukan/update/' . $value->id_penduduk) ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a class="btn btn-danger" href="<?= base_url('cKependudukan/delete/' . $value->id_penduduk) ?>">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">No Kartu Keluarga</th>
                                        <th class="text-center">Nama Kepala Keluarga</th>
                                        <th class="text-center">Nama Istri</th>
                                        <th class="text-center">Jumlah Anak</th>
                                        <th class="text-center">RT</th>
                                        <th class="text-center">RW</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->