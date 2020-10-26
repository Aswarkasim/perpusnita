<div class="container mt-5">
    <div class="">
        <h4><strong> Daftar Buku <?= $kat_parent->nm_kategori; ?></strong></h4>
    </div><br>
    <div class="row">

        <?php include('cari.php') ?>

    </div>


    <div class="row">


        <?php foreach ($kategori as $row) { ?>
            <div class="col-md-3 pt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><strong> <?= $row->nm_kategori ?></strong></h4>
                        <a href="<?= base_url('home/buku/listBuku/' . $row->kd_kategori) ?>" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>

        <?php   } ?>
    </div>

    <div class="row pt-5">
        <div class="col-lg-12">
        </div>
    </div>
</div>