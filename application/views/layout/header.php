<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>

<div class="jumbotron mb-0 pb-2 pt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <img width="100%" src="<?= base_url('assets/uploads/logo.png'); ?>" alt="">
            </div>
            <div class="col-md-11">
                <h2 class="mb-0"><b>PERPUSTAKAAN</b></h2>
                <h3><b> SMKN 5 MAKASSAR</b></h3>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($this->uri->segment(2) == '') {
                                        echo "active";
                                    }  ?>">
                    <a class="nav-link" href="<?= base_url() ?>">Beranda </a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(2) == 'buku') {
                                        echo "active";
                                    }  ?>">
                    <a class="nav-link" href="<?= base_url('home/buku') ?>">Buku</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(2) == 'sejarah') {
                                        echo "active";
                                    }  ?>">
                    <a class="nav-link" href="<?= base_url('home/sejarah') ?>">Sejarah</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(2) == 'visi') {
                                        echo "active";
                                    }  ?>">
                    <a class="nav-link" href="<?= base_url('home/visi') ?>">Visi & Misi</a>
                </li>
                <li class="nav-item <?php if ($this->uri->segment(2) == 'panduan') {
                                        echo "active";
                                    }  ?>">
                    <a class="nav-link" href="<?= base_url('home/panduan') ?>">Panduan</a>
                </li>
            </ul>

            <?php if ($this->session->userdata('kd_anggota') != '') { ?>
                <a class="btn btn-warning" href="<?= base_url('user/profil') ?>"><i class="fa fa-user"></i> <?= $this->session->userdata('nm_anggota') ?></a>
            <?php } else { ?>

                <a class="btn btn-warning mr-1" href="<?= base_url('user/auth/register') ?>">Register <i class="fa fa-user-plus"></i> </a>
                <a class="btn btn-warning" href="<?= base_url('user/auth') ?>">Login <i class="fa fa-sign-in"></i> </a>

            <?php } ?>
        </div>
    </div>
</nav>