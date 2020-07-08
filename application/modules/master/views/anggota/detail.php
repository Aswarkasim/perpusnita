<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $anggota->nm_anggota ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama</label>
                        </div>
                        <div class="col-md-9">
                            <?= $anggota->nm_anggota ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tempat lahir</label>
                        </div>
                        <div class="col-md-6">
                            <?= $anggota->tempat_lahir ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tanggal lahir</label>
                        </div>
                        <div class="col-md-9">
                            <?= $anggota->tanggal_lahir ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Agama</label>
                        </div>
                        <div class="col-md-9">
                            <?= $anggota->agama ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-5">
                            <?= $anggota->agama ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Alamat</label>
                        </div>
                        <div class="col-md-9">
                            <?= $anggota->alamat ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">No. Telepon</label>
                        </div>
                        <div class="col-md-9">
                            <?= $anggota->no_telepon ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Foto</label>
                        </div>
                        <div class="col-md-9">
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
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>