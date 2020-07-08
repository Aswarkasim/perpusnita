<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit <?= $anggota->nm_anggota ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                echo form_open_multipart('master/anggota/edit/' . $anggota->kd_anggota);
                ?>

                <form action="" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nm_anggota" class="form-control" value="<?= $anggota->nm_anggota ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tempat tanggal lahir</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="tempat_lahir" class="form-control" value="<?= $anggota->tempat_lahir ?>">
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="tanggal_lahir" class="form-control" value="<?= $anggota->tanggal_lahir ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Agama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="agama" class="form-control" value="<?= $anggota->agama ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-5">
                                <select name="kelamin" class="form-control">
                                    <option value=""></option>
                                    <option value="L" <?php if ($anggota->kelamin == 'L') {
                                                            echo "selected";
                                                        }  ?>>Laki-laki</option>
                                    <option value="P" <?php if ($anggota->kelamin == 'P') {
                                                            echo "selected";
                                                        }  ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="alamat" class="form-control" value="<?= $anggota->alamat ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">No. Telepon</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="no_telepon" class="form-control" value="<?= $anggota->no_telepon ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Foto</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" name="foto" class="form-control">
                                <br>
                                <img width="50%" src="<?php if ($anggota->foto != '') {
                                                            echo base_url('assets/uploads/images/anggota/' . $anggota->foto);
                                                        } else {
                                                            echo base_url('assets/uploads/images/default.jpg');
                                                        } ?>" alt="" class="thumbnail">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url('master/anggota') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>