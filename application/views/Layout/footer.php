<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
<!-- jquery-validation -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-validation/additional-methods.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000)
</script>
<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        //Initialize Select2 Elements
        $('.select2').select2()
    });
</script>
<script>
    $("#kependudukan").on('change', function() {
        $(".nama_kk").html($(this).find(':selected').attr('data-kepala'));
        $(".nama_kk").val($(this).find(':selected').attr('data-kepala'));

        $(".alamat").html($(this).find(':selected').attr('data-alamat'));
        $(".alamat").val($(this).find(':selected').attr('data-alamat'));

        $(".jml").html($(this).find(':selected').attr('data-jml'));
        $(".jml").val($(this).find(':selected').attr('data-jml'));

        $(".tanggungan").html($(this).find(':selected').attr('data-tanggungan'));
        $(".tanggungan").val($(this).find(':selected').attr('data-tanggungan'));

        $(".b_anak").html($(this).find(':selected').attr('data-bobot'));
        $(".b_anak").val($(this).find(':selected').attr('data-bobot'));
    });
</script>
<script>
    $("#kondisi").on('change', function() {
        $(".rumah").html($(this).find(':selected').attr('data-fuzzy'));
        $(".rumah").val($(this).find(':selected').attr('data-fuzzy'));

        $(".b_rumah").html($(this).find(':selected').attr('data-bobot'));
        $(".b_rumah").val($(this).find(':selected').attr('data-bobot'));

    });
</script>
<script>
    $("#penghasilan").on('change', function() {
        $(".penghasilan").html($(this).find(':selected').attr('data-fuzzy'));
        $(".penghasilan").val($(this).find(':selected').attr('data-fuzzy'));

        $(".b_penghasilan").html($(this).find(':selected').attr('data-bobot'));
        $(".b_penghasilan").val($(this).find(':selected').attr('data-bobot'));

    });
</script>
</body>

</html>