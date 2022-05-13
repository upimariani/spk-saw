<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perhitungan Status Ekonomi Penduduk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Metode SAW</li>
                    </ol>
                </div>
            </div>
            <a href="<?= base_url('cMetodeSAW/hitung') ?>" class="btn btn-app">
                <i class="fas fa-calculator"></i>Hitung
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
            <?php
            if ($this->session->userdata('error')) {
                echo ' <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>';
                echo $this->session->userdata('error');
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
                            <h3 class="card-title">Informasi Hasil Perhitungan Status Ekonomi Penduduk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kartu Keluarga</th>
                                        <th>Penghasilan Per Bulan</th>
                                        <th>Kondisi Rumah</th>
                                        <th>Jumlah Anak</th>
                                        <th>Hasil Perhitungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($hasil_saw as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $value->nama_kk ?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->penghasilan == '1') {
                                                    echo 'Kuarang dari Rp. 1.000.000';
                                                } else if ($value->penghasilan == '2') {
                                                    echo 'Kurang dari Rp. 3.000.000';
                                                } else if ($value->penghasilan == '3') {
                                                    echo 'Kurang dari Rp. 5.000.000';
                                                } else if ($value->penghasilan == '4') {
                                                    echo 'Lebih dari Rp. 5.000.000';
                                                }
                                                ?></td>
                                            <td class="text-center">
                                                <?php
                                                if ($value->kondisi_rumah == '1') {
                                                    echo 'Cukup Sederhana';
                                                } else if ($value->kondisi_rumah == '2') {
                                                    echo 'Sederhana';
                                                } else if ($value->kondisi_rumah == '3') {
                                                    echo 'Mewah';
                                                } else if ($value->kondisi_rumah == '4') {
                                                    echo 'Sangat Mewah';
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center"><?= $value->jumlah_anak ?></td>
                                            <td class="text-center"><?= $value->hasil ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kartu Keluarga</th>
                                        <th>Penghasilan Per Bulan</th>
                                        <th>Kondisi Rumah</th>
                                        <th>Jumlah Anak</th>
                                        <th>Hasil Perhitungan</th>
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