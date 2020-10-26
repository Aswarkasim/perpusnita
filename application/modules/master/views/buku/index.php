<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen Data Buku</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <p>
            <?php include('headmenu.php') ?>
        </p>

        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Kategori Inti</th>
                    <!-- <th>Kategori</th> -->
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($kategori as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td>
                            <h4><a href="<?= base_url('master/buku/listChild/' . $row->kd_kategori); ?>"><strong><?= $row->nm_kategori; ?></strong></a></h4>
                        </td>
                        <!-- <td>
                            <?php
                            $kategori = $this->BM->listChildKategori($row->kd_kategori);
                            foreach ($kategori as $d) {
                            ?>
                                <span><a href="<?= base_url('master/buku/list/' . $d->kd_kategori); ?>"><strong><?= $d->nm_kategori; ?></strong></a></span> <br>
                            <?php } ?>
                        </td> -->

                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>