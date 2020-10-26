<button type="button" class="btn btn-warning btn-sx" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-plus"></i>Tambah Kategori
</button>
<!-- <a href="<?= base_url('master/kategori/exportExcel') ?>" class="btn btn-sm btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</a> -->
<!-- <a href="<?= base_url('master/kategori/cetak') ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a> -->
<?= form_open(base_url('master/kategori')) ?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kode Kategori</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="kd_kategori" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Kategori</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nm_kategori" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Kategori Induk</label>
                        </div>
                        <div class="col-md-9">
                            <select name="is_parent" class="form-control select2" id="">
                                <option value="">-- Kategori Induk --</option>
                                <?php foreach ($is_parent as $row) { ?>
                                    <option value="<?= $row->kd_kategori; ?>"><?= $row->nm_kategori; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= form_close() ?>
<!-- /.modal -->


<script src="<?= base_url('assets/admin/') ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
    $(function() {
        $('.select2').select2();

    })
</script>