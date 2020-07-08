<?php $this->load->view('user/headprofil'); ?>
<div class="container">
    <?php $this->load->view('user/nav');

    if (isset($error)) {
        echo $error;
    }
    echo form_open_multipart('user/profil/edit');

    ?>
    <form method="post">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-7">
                            <?= validation_errors('<p class="alert alert-danger">', '</p>') ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Nama</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="nm_anggota" value="<?= $profil->nm_anggota ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Username</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" disabled name="username" value="<?= $profil->username ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Jenis Kelamin</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="kelamin" value="<?= $profil->kelamin ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Agama</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="agama" value="<?= $profil->agama ?>">
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Tempat Lahir</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="tempat_lahir" value="<?= $profil->tempat_lahir ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Tanggal Lahir</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $profil->tanggal_lahir ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">No Hp</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="no_telepon" value="<?= $profil->no_telepon ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Alamat</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="alamat" value="<?= $profil->alamat ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <b><label class="pull-right">Gambar</label></b>
                        </div>
                        <div class="col-md-7">
                            <input type="file" class="form-control" name="foto">
                            <br>
                            <img width="200px" src="<?php if ($profil->foto == "") {
                                                        echo base_url('assets/uploads/images/default.jpg');
                                                    } else {
                                                        echo base_url('assets/uploads/images/anggota/' . $profil->foto);
                                                    } ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-7">
                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <?= form_close() ?>
</div>