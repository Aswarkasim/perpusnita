<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="row">
  <div class="col-md-4">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Cetak Laporan</h3>
      </div>
      <div class="box-body">

        <form action="<?= base_url('admin/peminjaman/laporan'); ?>" target="_blank" method="post">
          <input type="hidden" value="aa" name="bantu">
          <div class="form-group">
            <label for="">Transaksi</label>
            <select required name="transaksi" class="form-control" id="">
              <option value="">-- Pilih --</option>
              <!-- <option value="">Semua</option> -->
              <option value="Kembali">Kembali</option>
              <option value="Belum">Dipinjam</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Dari</label>
            <input type="date" class="form-control" name="dari">
          </div>

          <div class="form-group">
            <label for="">Sampai</label>
            <input type="date" class="form-control" name="sampai">
          </div>

          <div class="form-group">
            <button type="submit" name="cetak" class="btn btn-warning"><i class="fa fa-print"></i> Cetak Langsung</button>
            <button type="submit" name="excel" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>