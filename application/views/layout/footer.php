<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="pull-right">
            <?php if ($this->session->userdata('kd_anggota') != '') { ?>
                <a href="<?= base_url('user/auth/logout') ?>" class="btn btn-secondary"><i class="fa fa-sign-out"></i> Logout</a>

            <?php  } ?>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/home/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/home/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url('assets/home/') ?>js/clean-blog.min.js"></script>

</body>

</html>