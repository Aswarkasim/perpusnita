<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen Peminjaman</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>
            <a href="<?= base_url('admin/peminjaman_guru/add'); ?>" class="btn btn-warning"><i class="fa fa-plus"></i> Tambah</a>
        </p>
        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama Guru</th>
                    <th>Judul Buku - Kode</th>
                    <th width="">Tgl Peminjam</th>
                    <th width="">Tgl Harus Kembali</th>
                    <th width="">Tgl Kembali</th>
                    <th width="">Status Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($peminjaman_guru as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <?= $row->nama_guru ?>
                        </td>
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
                                    <?php if ($row->status_kembali == "Kembali") { ?>
                                        <li><a href="<?= base_url('admin/peminjaman_guru/status/Belum/' . $row->kd_peminjaman_guru . '/' . $row->kd_buku)  ?>"><i class="fa fa-times"></i> Belum Kembali</a></li>
                                    <?php } else { ?>
                                        <li><a href="<?= base_url('admin/peminjaman_guru/status/kembali/' . $row->kd_peminjaman_guru . '/' . $row->kd_buku)  ?>"><i class="fa fa-check"></i> Kembali</a></li>
                                    <?php } ?>
                                    <li><a href="<?= base_url($edit . $row->kd_peminjaman_guru)  ?>"><i class="fa fa-edit"></i> Edit</a></li>
                                    <li><a class="tombol-hapus" href="<?= base_url($delete . $row->kd_peminjaman_guru)  ?>"><i class="fa fa-trash"></i> Hapus</a></li>
                                </ul>
                            </div>


                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>