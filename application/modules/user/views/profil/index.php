<?php

$this->load->view('user/headprofil');

?>
<div class="container">
    <?php $this->load->view('user/nav'); ?>
    <div class="row">
        <div class="col-md-12">
            <br>
            <!-- <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
            </div><br> -->

            <table class="table">
                <tr>
                    <td width="300px">Nama Lengkap</td>
                    <td>: <?= $profil->nm_anggota ?></td>
                </tr>
                <tr>
                    <td width="300px">Username</td>
                    <td>: <?= $profil->username ?></td>
                </tr>
                <tr>
                    <td width="300px">Jurusan</td>
                    <td>: <?= $profil->jurusan ?></td>
                </tr>
                <tr>
                    <td width="300px">Kelas</td>
                    <td>: <?= $profil->kelas ?></td>
                </tr>
                <tr>
                    <td width="300px">Jenis Kelamin</td>
                    <td>: <?= $profil->kelamin ?></td>
                </tr>
                <tr>
                    <td width="300px">Tempat Lahir</td>
                    <td>: <?= $profil->tempat_lahir ?></td>
                </tr>
                <tr>
                    <td width="300px">Tanggal Lahir</td>
                    <td>: <?= mediumdate_indo($profil->tanggal_lahir) ?></td>
                </tr>
                <tr>
                    <td width="300px">Alamat</td>
                    <td>: <?= $profil->alamat ?></td>
                </tr>
                <tr>
                    <td width="300px">No Hp</td>
                    <td>: <?= $profil->no_telepon ?></td>
                </tr>
                <tr>
                    <td width="300px">Status Pinjam</td>
                    <td>: <?= $profil->status_pinjam ?></td>
                </tr>
                <tr>
                    <td width="300px">Foto</td>
                    <td><img src="<?= base_url('assets/uploads/images/anggota/' . $profil->foto) ?>" width="50%"></td>
                </tr>

            </table>
            <div class="pull-left">
                <a href="<?= base_url('user/profil/edit') ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            </div>
        </div>
    </div>
</div>