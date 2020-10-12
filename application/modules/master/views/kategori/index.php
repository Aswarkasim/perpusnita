<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-7">


        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manajemen Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <p>
                    <!-- <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
                    <?php include('add.php') ?>
                </p>

                <?php

                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');

                ?>

                <table class="table DataTable">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Kode Kategori</th>
                            <th>Nama</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="targetData">
                        <?php $no = 1;
                        foreach ($is_parent as $row) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td>
                                    <strong><?= $row->kd_kategori ?></strong><br>
                                </td>
                                <td>
                                    <strong><?= $row->nm_kategori ?></strong><br>
                                    <?php
                                    $kategori = $this->BM->listChildKategori($row->kd_kategori);
                                    foreach ($kategori as $d) {
                                    ?>
                                        <span><?= $d->kd_kategori . ' - ' . $d->nm_kategori; ?></span>
                                        </a>
                                        <a href="<?= base_url($tombol['delete'] . $d->kd_kategori) ?>" class="tombol-hapus-kategori"> Hapus</a>
                                        <br>
                                    <?php } ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ModalEdit<?= $row->kd_kategori ?>">
                                        <i class="fa fa-edit"></i>Edit
                                    </button>

                                    <a href="<?= base_url($tombol['delete'] . $row->kd_kategori) ?>" class="btn btn-danger btn-xs tombol-hapus-kategori"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                                <?php include('edit.php')
                                ?>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->
        </div>

    </div>
</div>