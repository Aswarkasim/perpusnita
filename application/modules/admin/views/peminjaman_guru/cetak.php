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
      <h3><?php echo 'DATA ' . strtoupper($title) ?></h3>
      <h3><?= $konfigurasi->nama_aplikasi; ?></h3>
    </div>



    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="40px">No</th>
          <th>Nama Anggota</th>
          <th>Judul Buku - Kode</th>
          <th>Tgl Peminjam</th>
          <th>Tgl Harus Kembali</th>
          <th>Tgl Kembali</th>
          <th>Status Kembali</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($peminjaman as $row) { ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row->nm_anggota ?><br></td>
            <td><?= $row->kd_buku . ' - ' . $row->judul_buku ?></td>
            <td><?= $row->tanggal_pinjam ?></td>
            <td><?= $row->tanggal_harus_kembali ?></td>
            <td><?= $row->tanggal_kembali ?></td>
            <td><?php if ($row->status_kembali == "Belum") {
                  echo '<div class="label label-warning">Belum</div>';
                } else if ($row->status_kembali == "Kembali") {
                  echo '<div class="label label-success">Kembali</div>';
                } else {
                  echo '<div class="label label-danger">Hilang</div>';
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