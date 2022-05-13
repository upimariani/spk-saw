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
                        <form role="form" action="<?= base_url('cMetodeSAW/hitung') ?>" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Kartu Keluarga</label>
                                            <select id="kependudukan" name="no_kk" class="form-control select2" style="width: 100%;">
                                                <option value=" " selected="selected">---Pilih No Kartu Keluarga---</option>
                                                <?php
                                                foreach ($penduduk as $key => $value) {
                                                ?>
                                                    <option data-kepala="<?= $value->nama_kk ?>" <?php if ($value->jumlah_anak == '1') {
                                                                                                        echo 'data-tanggungan="Sangat Rendah" data-bobot="2"';
                                                                                                    } else if ($value->jumlah_anak == '2') {
                                                                                                        echo 'data-tanggungan="Rendah" data-bobot="4"';
                                                                                                    } else if ($value->jumlah_anak == '3') {
                                                                                                        echo 'data-tanggungan="Sedang" data-bobot="6"';
                                                                                                    } else if ($value->jumlah_anak == '4') {
                                                                                                        echo 'data-tanggungan="Tinggi" data-bobot="8"';
                                                                                                    } else if ($value->jumlah_anak == '5') {
                                                                                                        echo 'data-tanggungan="Sangat Tinggi" data-bobot="10"';
                                                                                                    } else if ($value->jumlah_anak == '6') {
                                                                                                        echo 'data-tanggungan="Sangat Tinggi" data-bobot="10"';
                                                                                                    }
                                                                                                    ?> data-alamat="Alamat <?= $value->alamat ?> RT. <?= $value->rt ?> RW. <?= $value->rw ?>" data-jml="<?= $value->jumlah_anak ?>" value="<?= $value->id_penduduk ?>"><?= $value->no_kk ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            <?= form_error('no_kk', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Kepala Keluarga</label>
                                            <input type="text" name="nama_kk" class="nama_kk form-control" id="exampleInputPassword1" placeholder="Enter Alamat" readonly>
                                            <?= form_error('nama_kk', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Alamat</label>
                                            <input type="text" name="alamat" class="alamat form-control" id="exampleInputPassword1" placeholder="Enter No Telepon" readonly>
                                            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Jumlah Anak</label>
                                            <input type="text" name="jml" class="jml form-control" id="exampleInputPassword1" placeholder="Enter Username" readonly>
                                            <?= form_error('jml', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Penghasilan</label>
                                            <select id="penghasilan" name="penghasilan" class="form-control">
                                                <option value="">---Pilih Kriteria Penghasilan---</option>
                                                <option data-fuzzy="Rendah" data-bobot="2.5" value="1">Kurang dari Rp. 1.000.000</option>
                                                <option data-fuzzy="Sedang" data-bobot="5" value="2">Kurang dari Rp. 3.000.000</option>
                                                <option data-fuzzy="Tinggi" data-bobot="7.5" value="3">Kurang dari Rp. 5.000.000</option>
                                                <option data-fuzzy="Sangat Tinggi" data-bobot="10" value="4">Lebih dari Rp. 5.000.000</option>
                                            </select>
                                            <?= form_error('penghasilan', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Kondisi Rumah</label>
                                            <select id="kondisi" name="rumah" class="form-control">
                                                <option value="">---Pilih Kriteria Kondisi Rumah---</option>
                                                <option data-fuzzy="Rendah" data-bobot="2.5" value="1">Cukup Sederhana</option>
                                                <option data-fuzzy="Sedang" data-bobot="5" value="2">Sederhana</option>
                                                <option data-fuzzy="Tinggi" data-bobot="7.5" value="3">Mewah</option>
                                                <option data-fuzzy="Sangat Tinggi" data-bobot="10" value="4">Sangat Mewah</option>
                                            </select>
                                            <?= form_error('rumah', '<small class="text-danger">', '</small>') ?>
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
                                                <td class="b_anak"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Kondisi Rumah (K3)</h6>
                                                </td>
                                                <td class="rumah"></td>
                                                <td class="b_rumah"></td>
                                            </tr>
                                        </table>
                                        <input type="hidden" name="k1" class="b_penghasilan">
                                        <input type="hidden" name="k2" class="b_anak">
                                        <input type="hidden" name="k3" class="b_rumah">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?= base_url('cMetodeSAW') ?>" class="btn btn-danger"><i class="fas fa-hand-point-left"></i></a>
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