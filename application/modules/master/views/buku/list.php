<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen Data Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>
            <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah</a>
            <a href="<?= base_url('master/buku/exportExcel') ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
            <a href="<?= base_url('master/buku/cetak') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
        </p>

        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>ISBN</th>
                    <th>Penulis</th>
                    <th>Jumlah</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($buku as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row->kd_buku ?></td>
                        <td><a href="<?= base_url('master/buku/detail/' . $row->kd_buku) ?>"><b><?= $row->judul_buku ?></b></a></td>
                        <td><?= $row->isbn ?></td>
                        <td><?= $row->penulis ?></td>
                        <td><?= $row->jumlah ?></td>
                        <td>
                            <a href="<?= base_url($tombol['edit'] . $row->kd_buku)  ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-danger btn-xs tombol-hapus" href="<?= base_url($tombol['delete'] . $row->kd_buku . '/' . $redirect)  ?>"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>