<?php
$kd_anggota = $this->session->userdata('kd_anggota');
$anggota = $this->Crud_model->listingOne('tbl_anggota', 'kd_anggota', $kd_anggota);
?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="<?= base_url('assets/uploads/images/anggota/' . $anggota->foto) ?>" alt="author" width="100%">
            </div>
            <div class="col-md-3">
                <div class="author-prof">@<?= $this->session->userdata('username') ?></div>
                <h6 class="author-name"><?= $this->session->userdata('nm_anggota') ?></h6>
            </div>
        </div>
    </div>
</div>