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
      <h3>DATA BUKU</h3>
      <h3><?= $konfigurasi->nama_aplikasi; ?></h3>
    </div>


    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Kode Buku</th>
          <th>Judul Buku</th>
          <th>ISBN</th>
          <th>Penulis</th>
          <th>Jumlah</th>
        </tr>
      </thead>
      <tbody id="targetData">
        <?php $no = 1;
        foreach ($buku as $row) { ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row->kd_buku ?></td>
            <td><?= $row->judul_buku ?></td>
            <td><?= $row->isbn ?></td>
            <td><?= $row->penulis ?></td>
            <td><?= $row->jumlah ?></td>

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