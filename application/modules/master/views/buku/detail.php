<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/select2/dist/css/select2.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><b>Detail Buku <?= $buku->judul_buku ?></b></h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

                ?>

                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Kode Buku</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->kd_buku ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Judul Buku</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->judul_buku ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">ISBN</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->isbn ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Penulis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->penulis ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Tahun Terbit</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->tahun_terbit ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jumlah Halaman</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->jumlah_halaman ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Bahasa</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->bahasa ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jumlah</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->jumlah ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Cover</label>
                                    </div>
                                    <div class="col-md-9">
                                        <br>
                                        <img width="50%" src="<?php if ($buku->cover != '') {
                                                                    echo base_url('assets/uploads/images/buku/' . $buku->cover);
                                                                } else {
                                                                    echo base_url('assets/uploads/images/default_buku.jpg');
                                                                } ?>" alt="" class="thumbnail">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-7">


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Penerbit</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->nm_penerbit ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jenis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->nm_jenis ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Kategori</label>
                                    </div>
                                    <div class="col-md-9">
                                        <?= $buku->nm_kategori ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Sinopsis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <p> <?= $buku->sinopsis ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-9">
                                        <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>



            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<script src="<?= base_url('assets/admin/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>bower_components/ckeditor/ckeditor.js"></script>
<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        $('.select2').select2();

    })
</script>