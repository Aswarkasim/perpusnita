<style>
    .bg-img {
        background-image: url(<?= base_url('assets/uploads/bg.jpeg') ?>);
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;

    }
</style>


<div class="bg-white bg-img">
    <div class="row text-center">
        <div class="container-fluid">
            <div class="offset-md-3 col-md-5">
                <form action="<?= base_url('user/auth/register')  ?>" method="post">
                    <h1 class="h3 mb-3 font-weight-normal text-white">Registrasi</h1>

                    <?= validation_errors('<div class="text text-danger">', '</div>') ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">NIS</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="number" class="form-control" placeholder="NIS" name="kd_anggota">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Nama</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nm_anggota">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Username</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Jurusan</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Jurusan" name="jurusan">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Kelas</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Jenis Kelamin</label></b>
                            </div>
                            <div class="col-md-8">
                                <select name="kelamin" required class="form-control" id="">
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Agama</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Agama" class="form-control" name="agama">
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Tempat Lahir</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Tanggal Lahir</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">No Hp</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="number" placeholder="No. Hp" class="form-control" name="no_telepon">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <b><label class="pull-right text-white">Alamat</label></b>
                            </div>
                            <div class="col-md-8">
                                <input type="text" placeholder="Alamat" class="form-control" name="alamat">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword" class="pull-right text-white">Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword" class="pull-right text-white">Ketik Ulang Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="re_password" placeholder="Password" type="Ketik ulang password">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit"><i class="fa fa-folder"></i> Registrasi</button><br><br>
                    <p>Sudah punya akun? silakan <a href="<?= base_url('user/auth') ?>">Login</a></p>
                    <p class="mt-5 mb-3 text-muted">© 2020</p>


                </form>
            </div>
        </div>
    </div>
</div>