<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen Anggota</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <p>
            <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah</a>
            <a href="<?= base_url('master/anggota/exportExcel') ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            <a href="<?= base_url('master/anggota/cetak') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
        </p>

        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>No Telp</th>
                    <th width="100px">Status Pinjam</th>
                    <th width="100px">Status Akun</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($anggota as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><a href="<?= base_url('master/anggota/detail/' . $row->kd_anggota) ?>"><b> <?= $row->nm_anggota ?></b></a></td>
                        <td><?= $row->kelamin ?></td>
                        <td><?= $row->no_telepon ?><br></td>
                        <td><?php if ($row->status_pinjam == 'Bebas') {
                                echo '<div class="label label-success">Bebas</div>';
                            } else {
                                echo '<div class="label label-danger">Pinjam</div>';
                            } ?></td>

                        <td><?php if ($row->is_active == '1') {
                                echo '<div class="label label-success">Aktif</div>';
                            } else {
                                echo '<div class="label label-danger">Tidak Aktif</div>';
                            } ?></td>

                        <td>
                            <a href="<?= base_url($tombol['edit'] . $row->kd_anggota)  ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-danger btn-xs tombol-hapus" href="<?= base_url($tombol['delete'] . $row->kd_anggota)  ?>"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>