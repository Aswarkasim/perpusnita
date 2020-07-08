<div class="jumbotron bg-white">
    <div class="row text-center">
        <div class="container-fluid">
            <div class="offset-md-4 col-md-4">
                <form action="<?= base_url('home/auth/register')  ?>" method="post">
                    <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>

                    <?= validation_errors('<div class="text text-danger">', '</div>') ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Username</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="username" placeholder="Username" type="text" value="<?= set_value('username') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-gorup">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Alamat Email</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="email" placeholder="Email" type="email" value="<?= set_value('email') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-gorup">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>No Hp</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="nohp" placeholder="No. Hp" type="text" value="<?= set_value('nohp') ?>">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Nama Lengkap</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="namalengkap" placeholder="Nama Lengkap" type="text" value="<?= set_value('namalengkap') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>Tanggal Lahir</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" type="text" value="<?= set_value('tanggal_lahir') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Kepesertaan</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="is_ptik" id="is_ptik">
                                    <option data-display="Status Kepesertaan">Status Kepesertaan</option>
                                    <option value="1">Mahasiswa PTIK UNM</option>
                                    <option value="0">Umum</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="form-group" id="nim">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="pull-right"><strong>NIM</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nim" placeholder="NIM" type="text" value="<?= set_value('nim') ?>">
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(function() {
                            $("#is_ptik").change(function() {
                                if ($(this).val() == "1") {
                                    $("#nim").show();
                                } else {
                                    $("#nim").hide();
                                }
                            });
                        });
                    </script>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword">Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="inputPassword">Ketik Ulang Password</strong></label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" class="form-control" name="re_password" placeholder="Password" type="Ketik ulang password">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit"><i class="fa fa-folder"></i> Registrasi</button><br><br>
                    <p>Sudah punya akun? silakan <a href="<?= base_url('user/auth') ?>">Login</a></p>
                    <p class="mt-5 mb-3 text-muted">© 2017-2019</p>


                </form>
            </div>
        </div>
    </div>
</div>