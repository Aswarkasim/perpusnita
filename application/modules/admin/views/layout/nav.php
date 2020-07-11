<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>



            <li class="treeview <?php if ($this->uri->segment(1) == "master") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-folder"></i> <span>Data Master</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "anggota") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('master/anggota') ?>">Data Anggota</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "buku") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('master/buku') ?>">Data Buku</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "penerbit") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('master/penerbit') ?>">Data Penerbit</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "kategori") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('master/kategori') ?>">Data Kategori</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(1) == "transaksi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-exchange"></i> <span>Peminjaman Buku</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "peminjaman") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/peminjaman') ?>">Data Peminjaman</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "pengembalian") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/peminjaman/add') ?>">Tambah Peminjam</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(1) == "transaksi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-file"></i> <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "laporanUser") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/user') ?>">Laporan User</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "laporanPenerbit") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/penerbit') ?>">Laporan Penerbit</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "laporanKategori") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/kategori') ?>">Laporan Kategori</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "laporanBuku") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/laporanBuku') ?>">Laporan Buku</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "laporanKategori") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/kategori') ?>">Data Anggota</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "laporanKategori") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('laporan/kategori') ?>">Peminjaman Perbulan</a></li>
                </ul>
            </li>



            <li class="treeview <?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Manajemen User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/user') ?>">List User</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(2) == "kofigurasi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-cogs"></i> <span>Konfigurasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi') ?>">Konfigurasi</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "sejarah") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/sejarah') ?>">Sejarah</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "visimisi") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/visimisi') ?>">Visi & Misi</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "panduan") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/panduan') ?>">Panduan</a></li>
                </ul>
            </li>


        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">
