<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak SURAT BEBAS PERPUSTAKAAN</title>
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
      <h3>PERPUSTAKAAN SMK NEGERI 5 MAKASSAR</h3>
      <h3>SURAT BEBAS PERPUSTAKAAN</h3>
    </div>

    <table class="table">
      <tr>Yang bertanda tangan dibawah ini:</tr>
      <tr>
        <td>Nama</td>
        <td>: <?= $anggota->nm_anggota; ?></td>
      </tr>
      <tr>
        <td>NIS</td>
        <td>: <?= $anggota->kd_anggota; ?></td>
      </tr>
      <tr>
        <td>Kelas/ Jurusan</td>
        <td>: <?= $anggota->kelas . '/' . $anggota->jurusan; ?></td>
      </tr>
    </table>
    <p>
      Sesuai catatan yang ada di perpustakaan, siswa (i) tersebut tidak mempunyai tunggakan (denda/masalah) di perpustakaan
    </p>

    <div class="row pull-right">
      <div class="offset-8 col-md-4">
        <p>Makassar,...........</p>
        <br><br><br><br>
        <p>MUH. TAHIR L, S.Sos</p>
        <span>NIP. 19621231 199303 1 096</span>
      </div>
    </div>


  </div>

  <script>
    window.print()
  </script>
</body>

</html>