<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen User</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>
            <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah</a>
        </p>

        <?php
        //notifikassi
        if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
            echo $this->session->flashdata('sukses');
            echo '</div>';
        }
        ?>

        <table class="table DataTable table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Judul Buku - Kode</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Harus Kembali</th>
                    <th>Status Kembali</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1;
                foreach ($peminjaman as $row) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>
                            <a href="<?php echo base_url('transaksi/peminjaman/add/' . $row->kd_anggota) ?>">
                                <?php echo $row->nm_anggota; ?> <i class="fa fa-link"></i>
                            </a>
                        </td>
                        <td><?php echo $row->judul_buku; ?> - <?php echo $row->kd_buku; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($row->tanggal_pinjam)) ?></td>
                        <td><?php echo date('d-m-Y', strtotime($row->tanggal_kembali)) ?></td>
                        <td><?php echo $row->status_kembali ?></td>
                        <td>
                            <a href="<?php echo base_url('transaksi/peminjaman/edit/' . $row->id_peminjaman) ?>" class="btn btn-success"><i class="fa fa-check"></i> Kembali</a>
                            <a href="<?php echo base_url('transaksi/peminjaman/edit/' . $row->id_peminjaman) ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url('transaksi/peminjaman/delete/' . $row->id_peminjaman) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>