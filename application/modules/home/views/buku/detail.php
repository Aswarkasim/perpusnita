<div class="container">
    <div class="row pt-5">
        <div class="col-md-12">
            <h2><?php echo $buku->judul_buku; ?></h2><br>
            <span class="pull-left">
                <a href="<?= base_url('home/buku') ?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
            </span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">

            <?php if ($buku->cover != "") { ?>
                <img src="<?= base_url('assets/uploads/images/buku/' . $buku->cover) ?>" class="img img-thumbnail img-responsive">
            <?php } else {
                echo "Tidak ada cover";
            } ?>

        </div>

        <div class="col-md-8 ">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="25%">Judul</th>
                        <th>: <?php echo $buku->judul_buku; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Penulis</td>
                        <td>: <?php echo $buku->penulis; ?></td>
                    </tr>
                    <tr>
                        <td>Bahasa</td>
                        <td>: <?php echo $buku->bahasa; ?></td>
                    </tr>
                    <tr>
                        <td>Letak Buku</td>
                        <td>: <?php echo $buku->lokasi_rak; ?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>: <?php echo $buku->nm_penerbit; ?></td>
                    </tr>
                    <tr>
                        <td>Tahun terbit</td>
                        <td>: <?php echo $buku->tahun_terbit; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Seri</td>
                        <td>: <?php echo $buku->isbn; ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>: <?php echo $buku->sinopsis; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>