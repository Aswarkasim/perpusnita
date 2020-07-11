<!-- <div class="d-flex flex-column flex-md-row align-items-center p-3 <?php if ($this->uri->segment(1) == "user") {
                                                                            echo "mb-3";
                                                                        } ?> px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><b><a href="">PERPUSTAKAAN SMKN 5 MAKASSAR</a></b></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?= base_url() ?>">Beranda</a>
        <a class="p-2 text-dark" href="<?= base_url('home/home/sejarah') ?>">Sejarah</a>
        <a class="p-2 text-dark" href="<?= base_url('home/home/visi') ?>">Visi & Misi</a>
        <a class="p-2 text-dark" href="<?= base_url('home/home/panduan') ?>">Panduan</a>
    </nav>
    <a class="btn btn-primary" href="<?= base_url('user/profil') ?>"><i class="fa fa-user"></i> Sign up</a>
</div> -->

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fa fa-book"></i> PERPUSTAKAAN SMKN 5 MAKASSAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($this->uri->segment(2)=='index'){echo "active";}  ?>">
                    <a class="nav-link" href="<?= base_url() ?>">Beranda </a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='buku'){echo "active";}  ?>">
                    <a class="nav-link" href="<?= base_url('home/buku') ?>">Buku</a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='sejarah'){echo "active";}  ?>">
                    <a class="nav-link" href="<?= base_url('home/sejarah') ?>">Sejarah</a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='visi'){echo "active";}  ?>">
                    <a class="nav-link" href="<?= base_url('home/visi') ?>">Visi & Misi</a>
                </li>
                <li class="nav-item <?php if($this->uri->segment(2)=='panduan'){echo "active";}  ?>">
                    <a class="nav-link" href="<?= base_url('home/panduan') ?>">Panduan</a>
                </li>
            </ul>

            <?php if ($this->session->userdata('kd_anggota') != '') { ?>
                <a class="btn btn-warning" href="<?= base_url('user/profil') ?>"><i class="fa fa-user"></i> <?= $this->session->userdata('nm_anggota') ?></a>
            <?php } else { ?>

                <a class="btn btn-warning" href="<?= base_url('user/auth') ?>">Login <i class="fa fa-sign-in"></i> </a>

            <?php } ?>
        </div>
    </div>
</nav>