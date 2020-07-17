<div class="container mt-5">
    <div class="">
        <h4><strong> Daftar Buku</strong></h4>
    </div><br>
    <form action="<?= base_url('home/buku/cari'); ?>">
        <div class="row">

            <div class="offset-md-7 col-md-5">
                <div class="input-group mb-3">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Buku" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>

        </div>
    </form>


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
        <div class="col-lg-12">
            <?= $pagination ?>
        </div>
    </div>
</div>