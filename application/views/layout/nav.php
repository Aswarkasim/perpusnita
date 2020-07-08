<div class="col-lg-2 col-md-4 mx-auto">
    <div class="list-group">
        <a href="<?= base_url('user/profil') ?>" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == "profil") {
                                                                                                    echo "active";
                                                                                                } ?>">
            <i class="fa fa-user"></i> Profil
        </a>
        <a href="<?= base_url('user/buku') ?>" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == "buku") {
                                                                                                    echo "active";
                                                                                                } ?>"><i class="fa fa-book"></i> Data Buku <span class="badge badge-primary badge-pill">14</span></a>
        <a href="<?= base_url('user/peminjaman') ?>" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == "peminjaman") {
                                                                                                        echo "active";
                                                                                                    } ?>"><i class="fa fa-tag"></i> Peminjaman <span class="badge badge-primary badge-pill">14</span></a>
    </div>
</div>