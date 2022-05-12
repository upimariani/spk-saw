<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
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
                        <form role="form" action="<?= base_url('cAdmin/update/' . $admin->id_admin) ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Admin</label>
                                    <input type="text" name="nama" value="<?= $admin->nama_admin ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat</label>
                                    <input type="text" name="alamat" value="<?= $admin->alamat ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Alamat">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Telepon</label>
                                    <input type="number" name="no_tlpon" value="<?= $admin->no_hp ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter No Telepon">
                                    <?= form_error('no_tlpon', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" value="<?= $admin->username ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Username">
                                    <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" name="password" value="<?= $admin->password ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
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