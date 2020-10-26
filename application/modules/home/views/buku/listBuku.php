<div class="container mt-5">
    <div class="">
        <h4><strong> Daftar Buku <?php if (isset($kat_parent->nm_kategori)) {
                                        echo $kat_parent->nm_kategori;
                                    }; ?></strong></h4>
    </div><br>
    <div class="row">

        <?php include('cari.php') ?>

    </div>


    <div class="row">

        <?php foreach ($buku as $row) { ?>
            <div class="col-md-3 pt-5">
                <div class="card">
                    <img class="card-img-top" src="<?php if ($row->cover != '') {
                                                        echo base_url('assets/uploads/images/buku/' . $row->cover);
                                                    } else {
                                                        echo base_url('assets/uploads/images/bukuDefault.jpg');
                                                    }  ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><strong> <?= $row->judul_buku ?></strong></h4>
                        <span><?= $row->penulis ?></span> <br>
                        <a href="<?= base_url('home/buku/detail/' . $row->kd_buku) ?>" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

        <?php   } ?>
    </div>

    <div class="row pt-5">
        <?php if (isset($pagination)) {
            echo $pagination;
        } ?>
    </div>
</div>