<ul class="nav nav-tabs">


    <li class="nav-link <?php if ($this->uri->segment('2') == 'profil') {
                            echo 'active';
                        } ?>">
        <a href="<?= base_url('user/profil') ?>" role="tab" class="control-item">Profil</a>
    </li>

    <li class="nav-link <?php if ($this->uri->segment('2') == 'buku') {
                            echo 'active';
                        } ?>">
        <a href="<?= base_url('user/buku') ?>" role="tab" class="control-item">Data Buku</a>
    <li class="nav-link <?php if ($this->uri->segment('2') == 'peminjaman') {
                            echo 'active';
                        } ?>">
        <a href="<?= base_url('user/peminjaman') ?>" role="tab" class="control-item">Data Peminjaman</a>

    <li class="nav-link <?php if ($this->uri->segment('2') == 'password') {
                            echo 'active';
                        } ?>">
        <a href="<?= base_url('user/password') ?>" role="tab" class="control-item">Ubah Password</a>
    </li>

</ul>