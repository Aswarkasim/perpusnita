<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manajemen Peminjaman Guru</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <p>
                    <a href="<?= base_url('admin/peminjaman_guru'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                </p>

                <?= form_open('admin/peminjaman_guru/edit/' . $pinjam->kd_peminjaman_guru) ?>
                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                ?>

                <div class="form-group">
                    <label for="">Nama Guru Peminjam</label>
                    <input type="text" class="form-control" name="nama_guru" value="<?= $pinjam->nama_guru ?>" placeholder="Nama Guru" id="">
                </div>

                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <select name="kd_buku" id="" required class="form-control select2">
                        <option value="">--Judul Buku--</option>
                        <?php foreach ($buku as $row) { ?>
                            <option value="<?= $row->kd_buku ?>" <?php if ($row->kd_buku  == $pinjam->kd_buku) {
                                                                        echo "selected";
                                                                    } ?>> <?= $row->kd_buku . ' ' . $row->judul_buku . ' : Jumlah ' . $row->jumlah ?> </option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="number" class="form-control" placeholder="0" value="<?= $pinjam->jumlah ?>" name="jumlah" id="">
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tanggal Pinjam</label>
                        <input type="date" value="<?= $pinjam->tanggal_pinjam ?>" name="tgl_pinjam" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tanggal Harus Kembali</label>
                        <input type="date" value="<?= $pinjam->tanggal_harus_kembali ?>" name="tgl_kembali" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" value="<?= $pinjam->keterangan ?>" placeholder="Keterangan" name="keterangan" id="">
                </div>

                <div class="pull-right">
                    <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                </div>

                <?php echo form_close();
                ?>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>