<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Masukkan Kekurangan Logistik</h4>
                    </div>
                    <div class="card-content">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Company (disabled)</label>
                                        <input type="text" class="form-control" disabled="">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama-barang">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('nama-barang'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                <label class="control-label">Jenis Barang</label>
                                <select class="material-selected form-control" name="jenis-barang">
									<option value="sandang selected">Sandang</option>
									<option value="pangan">Pangan</option>
									<option value="papan">Papan</option>
								</select>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Stok Kebutuhan</label>
                                        <input type="text" class="form-control" name="stok-kebutuhan">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('stok-kebutuhan'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                            </div>
                            <div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('flash');?>"></div>
                            <button type="submit" class="btn btn-primary pull-right">Tambahkan</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>