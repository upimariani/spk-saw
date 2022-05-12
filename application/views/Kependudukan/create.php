<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Kependudukan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kependudukan</li>
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
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('cKependudukan/create') ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Kartu Keluarga</label>
                                    <input type="text" value="<?= set_value('no_kk') ?>" name="no_kk" class="form-control" id="exampleInputEmail1" placeholder="Enter No KK">
                                    <?= form_error('no_kk', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Kepala Keluarga</label>
                                    <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Kepala Keluarga">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Istri</label>
                                    <input type="text" name="nama_istri" value="<?= set_value('nama_istri') ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Istri">
                                    <?= form_error('nama_istri', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jumlah Anak</label>
                                    <select name="jml" class="form-control">
                                        <option value="">---Pilih Jumlah Anak---</option>
                                        <option value="1" <?php if (set_value('jml') == '1') {
                                                                echo 'selected';
                                                            } ?>>01</option>
                                        <option value="2" <?php if (set_value('jml') == '2') {
                                                                echo 'selected';
                                                            } ?>>02</option>
                                        <option value="3" <?php if (set_value('jml') == '3') {
                                                                echo 'selected';
                                                            } ?>>03</option>
                                        <option value="4" <?php if (set_value('jml') == '4') {
                                                                echo 'selected';
                                                            } ?>>04</option>
                                        <option value="5" <?php if (set_value('jml') == '5') {
                                                                echo 'selected';
                                                            } ?>>05</option>
                                        <option value="6" <?php if (set_value('jml') == '6') {
                                                                echo 'selected';
                                                            } ?>>Lebih dari 05</option>
                                    </select>
                                    <?= form_error('jml', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">RT</label>
                                            <select name="rt" class="form-control">
                                                <option value="">---Pilih RT---</option>
                                                <option value="01" <?php if (set_value('rt') == '01') {
                                                                        echo 'selected';
                                                                    } ?>>01</option>
                                                <option value="02" <?php if (set_value('rt') == '02') {
                                                                        echo 'selected';
                                                                    } ?>>02</option>
                                                <option value="03" <?php if (set_value('rt') == '03') {
                                                                        echo 'selected';
                                                                    } ?>>03</option>
                                                <option value="04" <?php if (set_value('rt') == '04') {
                                                                        echo 'selected';
                                                                    } ?>>04</option>
                                                <option value="05" <?php if (set_value('rt') == '05') {
                                                                        echo 'selected';
                                                                    } ?>>05</option>
                                                <option value="06" <?php if (set_value('rt') == '06') {
                                                                        echo 'selected';
                                                                    } ?>>06</option>
                                                <option value="07" <?php if (set_value('rt') == '07') {
                                                                        echo 'selected';
                                                                    } ?>>07</option>
                                                <option value="08" <?php if (set_value('rt') == '08') {
                                                                        echo 'selected';
                                                                    } ?>>08</option>
                                                <option value="09" <?php if (set_value('rt') == '09') {
                                                                        echo 'selected';
                                                                    } ?>>09</option>
                                                <option value="10" <?php if (set_value('rt') == '10') {
                                                                        echo 'selected';
                                                                    } ?>>10</option>
                                            </select>
                                            <?= form_error('rt', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">RW</label>
                                            <select name="rw" class="form-control">
                                                <option value="">---Pilih RW---</option>
                                                <option value="01" <?php if (set_value('rw') == '01') {
                                                                        echo 'selected';
                                                                    } ?>>01</option>
                                                <option value="02" <?php if (set_value('rw') == '02') {
                                                                        echo 'selected';
                                                                    } ?>>02</option>
                                                <option value="03" <?php if (set_value('rw') == '03') {
                                                                        echo 'selected';
                                                                    } ?>>03</option>
                                                <option value="04" <?php if (set_value('rw') == '04') {
                                                                        echo 'selected';
                                                                    } ?>>04</option>
                                                <option value="05" <?php if (set_value('rw') == '05') {
                                                                        echo 'selected';
                                                                    } ?>>05</option>
                                                <option value="06" <?php if (set_value('rw') == '06') {
                                                                        echo 'selected';
                                                                    } ?>>06</option>
                                            </select>
                                            <?= form_error('rw', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" value="<?= set_value('alamat') ?>" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Enter Alamat">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="card-footer">
                                    <a href="<?= base_url('cKependudukan') ?>" class="btn btn-danger"><i class="fas fa-hand-point-left"></i></a>
                                    <button type="submit" class="btn btn-warning"><i class="far fa-save"></i></button>
                                </div>
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