<style>
    .bg-img {
        background-image: url(<?= base_url('assets/uploads/bg.jpeg') ?>);
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>

<div class="bg-img">
    <div class="row text-center">
        <div class="offset-md-4 col-md-4">
            <form action="<?= base_url('user/auth') ?>" method="post">
                <h1 class="h3 mb-3 font-weight-normal text-white">Silahkan Login</h1>
                <?php
                echo validation_errors('<div class="text text-danger">', '</div>');
                if (isset($error)) {
                    echo '<div class="text text-danger">';
                    echo $error;
                    echo '</div>';
                }

                ?>

                <div class="form-group">
                    <label for="inputEmail" class="sr-only">NIS</label>
                    <input name="kd_anggota" class="form-control" placeholder="NIS" type="number">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input name="password" placeholder="Password" class="form-control" type="password">
                </div>

                <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Masuk</button><br><br>
                <p class="text-white">Belum punya akun? silahkan <a href="<?= base_url('user/auth/register') ?>" class="text-warning">Registrasi</a></p>
                <p class="mt-5 mb-3 text-muted">© 2020</p>
            </form>
        </div>
    </div>
</div>