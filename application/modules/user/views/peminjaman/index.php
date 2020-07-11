<?php

$this->load->view('user/headprofil');

?>
<div class="container">
    <?php $this->load->view('user/nav'); ?>
    <div class="row">
        <div class="col-md-12">
            <br>
            <strong>
                <h4>Data Peminjaman Buku</h4>
            </strong>

            <table class="table">
                <thead>
                    <tr>
                        <td width="100px">NO</td>
                        <td>JUDUL BUKU</td>
                        <td>TANGGAL PINJAM</td>
                        <td>BATAS WAKTU</td>
                        <td widtj="100px">AKSI</td>
                    </tr>
                </thead>
                <tbody>

                <?php $no = 1; foreach ($buku as $row) {?>
                    <tr>
                        <td width="50px"><?= $no++ ?></td>
                        <td><a href="<?= base_url('user/peminjaman/detail/'.$row->kd_buku) ?>"><?= $row->judul_buku ?></a></td>
                        <td><?= $row->tanggal_pinjam ?></td>
                        <td><?= $row->tanggal_harus_kembali ?></td>
                        <td><a href="" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a></td>
                    </tr>

                <?php  } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>