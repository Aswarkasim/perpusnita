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
                        <td>NAMA BUKU</td>
                        <td>PENULIS</td>
                        <td>JUMLAH</td>
                        <td>TAHUN TERBIT</td>
                        <td widtj="100px">#</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>JUDUL</td>
                        <td>Tere Liye</td>
                        <td>2</td>
                        <td>
                            <span class="badge badge-success">Aktif</span>
                        </td>
                        <td><a href="" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>