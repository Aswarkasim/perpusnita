<footer class="footer bg-secondary">
    <div class="container mt-0">
        <span class="text-muted"><a href="<?= base_url('admin/auth'); ?>">admin log</a> Sistem Informasi Perpuskaan SMKN 5 Makassar</span>
        <span class="pull-right">
            <?php if ($this->session->userdata('kd_anggota') != '') { ?>
                <a href="<?= base_url('user/auth/logout') ?>" class="btn btn-secondary"><i class="fa fa-sign-out"></i> Logout</a>

            <?php  } ?>
        </span>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/home/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/home/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url('assets/home/') ?>js/clean-blog.min.js"></script>
<script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/mySwal.js"></script>

<!-- page script -->
<script>
    $(function() {
        $('.DataTable').DataTable();
        $('.select2').select2()
    })
</script>

</body>

</html>