<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manajemen User</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <p>
            <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Tambah</a>
        </p>

        <table class="table DataTable">
            <thead>
                <tr>
                    <th width="40px">No</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>No Telp</th>
                    <th width="100px">Status Pinjam</th>
                    <th width="200px">Aksi</th>
                </tr>
            </thead>
            <tbody id="targetData">
                <?php $no = 1;
                foreach ($anggota as $row) { ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><a href="<?= base_url('master/anggota/detail/' . $row->kd_anggota) ?>"><b> <?= $row->nm_anggota ?></b></a></td>
                        <td><?= $row->kelamin ?></td>
                        <td><?= $row->no_telepon ?><br></td>
                        <td><?php if ($row->status_pinjam == 'Bebas') {
                                echo '<div class="label label-success">Bebas</div>';
                            } else {
                                echo '<div class="label label-danger">Pinjam</div>';
                            } ?></td>
                        <td>
                            <a href="<?= base_url($tombol['edit'] . $row->kd_anggota)  ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-danger btn-xs tombol-hapus" href="<?= base_url($tombol['delete'] . $row->kd_anggota)  ?>"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->
</div>



<!-- <script>
    userData();

    function userData() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() . "admin/user/userData" ?>',
            dataType: 'json',
            success: function(data) {
                var baris = '';

                for (var i = 0; i < data.length; i++) {
                    baris += '<tr>' +
                        '<td>' + (i + 1) + '</td>' +
                        '<td><img width="50px" src="<?= base_url('assets/uploads/images/') ?>' + data[i].image + '" alt=""></td>' +
                        '<td>' +
                        '<strong>' + data[i].nama_user + '</strong><br>' +
                        '<p>' + data[i].email + ' - ' + data[i].role + '</p>' +
                        '</td>' +
                        '<td><a href="<?php
                                        ?>/' + data[i].id_user + '" class="btn btn-sm btn-primary"><i class="fas fa fa-edit"></i> Edit</a></td>' +
                        '</tr>';
                }

                $('#targetData').html(baris);
            }
        })
    }
</script> -->