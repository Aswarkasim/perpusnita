<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak Anggota</title>
  <link href="<?= base_url('assets/home/') ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <style type="text/css">
    /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

    @page {
      size: landscape;
      margin-left: 100px;
      margin-right: 100px;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .pembungkus {
      position: relative;
    }

    #qrCode {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    /* h2 {
            position: absolute;
            left: 410px;
            top: 320px;
        }

        p {
            position: absolute;
            left: 220px;
            top: 380px;
            width: 600px
        } */
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="text-center">
      <h3>DATA ANGGOTA</h3>
      <h3><?= $konfigurasi->nama_aplikasi; ?></h3>
    </div>


    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Nama</th>
          <th>JK</th>
          <th>agama</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th width="100px">Status Pinjam</th>
        </tr>
      </thead>
      <tbody id="targetData">
        <?php $no = 1;
        foreach ($anggota as $row) { ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row->nm_anggota ?></td>
            <td><?= $row->kelamin ?></td>
            <td><?= $row->agama ?></td>
            <td><?= $row->tempat_lahir ?></td>
            <td><?= $row->tanggal_lahir ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->no_telepon ?><br></td>
            <td><?php if ($row->status_pinjam == 'Bebas') {
                  echo '<div class="label label-success">Bebas</div>';
                } else {
                  echo '<div class="label label-danger">Pinjam</div>';
                } ?></td>
          </tr>
        <?php $no++;
        } ?>
      </tbody>
    </table>

  </div>

  <script>
    window.print()
  </script>
</body>

</html>