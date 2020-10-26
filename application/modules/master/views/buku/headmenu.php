<a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah Buku</a>
<a href="<?= base_url('master/buku/listAllBuku') ?>" class="btn btn-sm btn-info"><i class="fa fa-list"></i> List semua buku</a>
<a href="<?= base_url('master/buku/exportExcel') ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a>
<a href="<?= base_url('master/buku/cetak') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
<?php include('cari.php') ?>