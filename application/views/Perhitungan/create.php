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
                        <li class="breadcrumb-item active">Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('cAdmin/create') ?>" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Kartu Keluarga</label>
                                            <select id="kependudukan" class="form-control select2" style="width: 100%;">
                                                <option selected="selected">---Pilih No Kartu Keluarga---</option>
                                                <?php
                                                foreach ($penduduk as $key => $value) {
                                                ?>
                                                    <option data-kepala="<?= $value->nama_kk ?>" data-tanggungan="<?php if ($value->jumlah_anak == '1') {
                                                                                                                        echo 'Sangat Rendah';
                                                                                                                    } else if ($value->jumlah_anak == '2') {
                                                                                                                        echo 'Rendah';
                                                                                                                    } else if ($value->jumlah_anak == '3') {
                                                                                                                        echo 'Sedang';
                                                                                                                    } else if ($value->jumlah_anak == '4') {
                                                                                                                        echo 'Tinggi';
                                                                                                                    } else if ($value->jumlah_anak == '5') {
                                                                                                                        echo 'Sangat Tinggi';
                                                                                                                    } else if ($value->jumlah_anak == '6') {
                                                                                                                        echo 'Sangat Tinggi';
                                                                                                                    }
                                                                                                                    ?>" data-alamat="Alamat <?= $value->alamat ?> RT. <?= $value->rt ?> RW. <?= $value->rw ?>" data-jml="<?= $value->jumlah_anak ?>"><?= $value->no_kk ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Kepala Keluarga</label>
                                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="nama_kk form-control" id="exampleInputPassword1" placeholder="Enter Alamat" readonly>
                                            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alamat</label>
                                            <input type="text" name="no_tlpon" value="<?= set_value('no_tlpon') ?>" class="alamat form-control" id="exampleInputPassword1" placeholder="Enter No Telepon" readonly>
                                            <?= form_error('no_tlpon', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Jumlah Anak</label>
                                            <input type="text" name="username" value="<?= set_value('username') ?>" class="jml form-control" id="exampleInputPassword1" placeholder="Enter Username" readonly>
                                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Penghasilan</label>
                                            <select id="penghasilan" class="form-control">
                                                <option value="">---Pilih Kriteria Penghasilan---</option>
                                                <option data-fuzzy="Rendah" data-bobot="2,5" value="1">Kurang dari Rp. 1.000.000</option>
                                                <option data-fuzzy="Sedang" data-bobot="5" value="2">Kurang dari Rp. 3.000.000</option>
                                                <option data-fuzzy="Tinggi" data-bobot="7,5" value="3">Kurang dari Rp. 5.000.000</option>
                                                <option data-fuzzy="Sangat Tinggi" data-bobot="10" value="4">Lebih dari Rp. 5.000.000</option>
                                            </select>
                                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kondisi Rumah</label>
                                            <select id="kondisi" class="form-control">
                                                <option value="">---Pilih Kriteria Kondisi Rumah---</option>
                                                <option data-fuzzy="Rendah" data-bobot="2,5" value="1">Cukup Sederhana</option>
                                                <option data-fuzzy="Sedang" data-bobot="5" value="2">Sederhana</option>
                                                <option data-fuzzy="Tinggi" data-bobot="7,5" value="3">Mewah</option>
                                                <option data-fuzzy="Sangat Tinggi" data-bobot="10" value="4">Sangat Mewah</option>
                                            </select>
                                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>Variabel Perhitungan Metode SAW</h4>
                                        <table class="table">
                                            <tr>
                                                <th>Kriteria</th>
                                                <th>Data Fuzzy</th>
                                                <th>Bobot</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Penghasilan (K1)</h6>
                                                </td>
                                                <td class="penghasilan"></td>
                                                <td class="b_penghasilan"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Tanggungan Anak (K2)</h6>
                                                </td>
                                                <td class="tanggungan"></td>
                                                <td class="jml"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Kondisi Rumah (K3)</h6>
                                                </td>
                                                <td class="rumah"></td>
                                                <td class="b_rumah"></td>
                                            </tr>
                                        </table>



                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="<?= base_url('cAdmin') ?>" class="btn btn-danger"><i class="fas fa-hand-point-left"></i></a>
                                <button type="submit" class="btn btn-warning"><i class="far fa-save"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>