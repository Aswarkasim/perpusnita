<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pinjam Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-5">
                <table class="table">
                    <tr>
                        <td>Kode Anggota</td>
                        <td>:<?= $anggota->nm_anggota ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:<?= $anggota->kelamin ?></td>
                    </tr>
                    <tr>
                        <td>TTL</td>
                        <td>:<?= $anggota->tempat_lahir . ', ' . $anggota->tanggal_lahir ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:<?= $anggota->alamat ?></td>
                    </tr>
                    <tr>
                        <td>No. Telepon</td>
                        <td>:<?= $anggota->no_telepon ?></td>
                    </tr>
                    <tr>
                        <td>Status Pinjam</td>
                        <td>:<?= $anggota->status_pinjam ?></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>: <img src="<?= base_url('assets/uploads/images/anggota/' . $anggota->foto) ?>" width="150px"></td>
                    </tr>

                </table>
            </div>
            <div class="col-md-7">
                <?= form_open('admin/peminjaman/simpan') ?>
                <input type="hidden" name="kd_anggota" value="<?= $anggota->kd_anggota ?>">
                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                <h4>Pinjam Buku</h4>
                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <select name="kd_buku" id="" required class="form-control select2">
                        <option value="">--Judul Buku--</option>
                        <?php foreach ($buku as $row) { ?>
                            <option value="<?= $row->kd_buku ?>"> <?= $row->kd_buku . ' ' . $row->judul_buku . ' : Jumlah ' . $row->jumlah ?> </option>
                        <?php  } ?>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="">Tanggal Pinjam</label>
                        <input type="date" required name="tgl_pinjam" class="form-control" id="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tanggal Harus Kembali</label>
                        <input type="date" required name="tgl_kembali" class="form-control" id="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" id="">
                </div>

                <div class="pull-right">
                    <button class="btn btn-warning"><i class="fa fa-save"></i> Simpan</button>
                </div>

                <?php echo form_close();
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table DataTable">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Judul Buku - Kode</th>
                            <th width="">Tgl Peminjam</th>
                            <th width="">Tgl Harus Kembali</th>
                            <th width="">Tgl Kembali</th>
                            <th width="">Status Kembali</th>
                            <th width="">Action</th>
                        </tr>
                    </thead>
                    <tbody id="targetData">
                        <?php $no = 1;
                        foreach ($peminjaman as $row) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->judul_buku . ' - ' . $row->kd_buku ?></td>
                                <td><?= $row->tanggal_pinjam ?></td>
                                <td><?= $row->tanggal_harus_kembali ?></td>
                                <td><?= $row->tanggal_kembali ?></td>
                                <td><?php if ($row->status_kembali == "Belum") {
                                        echo '<div class="label label-warning">Belum</div>';
                                    } else if ($row->status_kembali == "Kembali") {
                                        echo '<div class="label label-success">Kembali</div>';
                                    } else {
                                        echo '<div class="label label-danger">Hilang</div>';
                                    } ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info"><i class="fa fa-cogs"></i></button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php if ($row->status_kembali != 'Kembali') { ?>
                                                <li><a href="<?= base_url($status . $row->kd_peminjaman . '/' . $row->kd_anggota . '/Kembali/' . $row->kd_buku)  ?>"><i class="fa fa-check"></i> Kembali</a></li>
                                            <?php } ?>
                                            <!-- <li><a href="<?= base_url($status . $row->kd_peminjaman . '/' . $row->kd_anggota . '/Belum/' . $row->kd_buku)  ?>"><i class="fa fa-circle"></i> Belum</a></li> -->

                                            <?php if ($row->status_kembali != 'Hilang') { ?>
                                                <li><a href="<?= base_url($status . $row->kd_peminjaman . '/' . $row->kd_anggota . '/Hilang/' . $row->kd_buku)  ?>"><i class="fa fa-pencil"></i> Hilang</a></li>
                                            <?php } ?>
                                            <!-- <li><a href="<?= base_url($edit . $row->kd_peminjaman)  ?>"><i class="fa fa-edit"></i> Edit</a></li> -->
                                            <li><a class="tombol-hapus" href="<?= base_url($delete . $row->kd_peminjaman . '/' . $row->kd_anggota)  ?>"><i class="fa fa-trash"></i> Hapus</a></li>
                                        </ul>
                                    </div>


                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.box-body -->
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