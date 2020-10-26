<button type="button" class="btn btn-warning btn-sx" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-search"></i> Cari
</button>

<?= form_open(base_url('master/buku/cari')) ?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">CariBuku</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Cari Buku</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Cari Buku" name="key">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= form_close() ?>
<!-- /.modal -->