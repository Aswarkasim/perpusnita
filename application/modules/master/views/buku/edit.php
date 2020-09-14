<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/select2/dist/css/select2.min.css">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><b>Edit Buku <?= $buku->judul_buku ?></b></h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                echo form_open_multipart('master/buku/edit/' . $buku->kd_buku);
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
                                        <input type="text" class="form-control" name="kd_buku" placeholder="Kode Buku" value="<?= $buku->kd_buku ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Judul Buku</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="judul_buku" class="form-control" value="<?= $buku->judul_buku ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">ISBN</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="isbn" class="form-control" value="<?= $buku->isbn ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Penulis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="penulis" class="form-control" value="<?= $buku->penulis ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Tahun Terbit</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="tahun_terbit" class="form-control" value="<?= $buku->tahun_terbit ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jumlah Halaman</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="jumlah_halaman" class="form-control" value="<?= $buku->jumlah_halaman ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Bahasa</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="bahasa" class="form-control" value="<?= $buku->bahasa ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jumlah</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="jumlah" class="form-control" value="<?= $buku->jumlah ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Cover</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="file" name="cover" class="form-control">
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
                                        <select name="kd_penerbit" required class="form-control select2">
                                            <option value="">Penerbit</option>
                                            <?php foreach ($penerbit as $row) { ?>
                                                <option value="<?= $row->kd_penerbit ?>" <?php if (($row->kd_penerbit) == $buku->kd_penerbit) {
                                                                                                echo 'selected';
                                                                                            } ?>><?= $row->nm_penerbit ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Jenis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="kd_jenis" required class="form-control select2">
                                            <option value="">Jenis</option>
                                            <?php foreach ($jenis as $row) { ?>
                                                <option value="<?= $row->kd_jenis ?>" <?php if (($row->kd_jenis) == $buku->kd_jenis) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $row->nm_jenis ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Kategori</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="kd_kategori" required class="form-control select2">
                                            <option value="">Kategori</option>
                                            <?php foreach ($kategori as $row) { ?>
                                                <option value="<?= $row->kd_kategori ?>" <?php if (($row->kd_kategori) == $buku->kd_kategori) {
                                                                                                echo 'selected';
                                                                                            } ?>><?= $row->nm_kategori ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="" class="pull-right">Sinopsis</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="sinopsis" id="editor1" cols="30" rows="10"><?= $buku->sinopsis ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-9">
                                        <a href="<?= base_url('master/buku') ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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