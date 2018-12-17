<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Buat Program</h4>
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
                                        <label class="control-label">Nama Program</label>
                                        <input type="text" class="form-control" name="nama-program">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('nama-program'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Jenis Bencana</label>
                                        <input type="text" class="form-control" name="jenis-bencana">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('jenis-bencana'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                                <div class="col-md-6" hidden>
                                </div>
                            </div> -->
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                <label class="control-label">Jenis bencana</label>
                                <select class="material-selected form-control" name="jenis-bencana">
									<option value="Gempa bumi selected">Gempa bumi</option>
									<option value="Letusan gunung api">Letusan gunung api</option>
									<option value="Tsunami">Tsunami</option>
									<option value="Tanah longsor">Tanah longsor</option>
									<option value="Banjir">Banjir</option>
									<option value="Banjir bandang">Banjir bandang</option>
									<option value="Kekeringan">Kekeringan</option>
									<option value="Kebakaran">Kebakaran</option>
									<option value="Kebakaran hutan dan lahan">Kebakaran hutan dan lahan</option>
									<option value="Angin puting beliung">Angin puting beliung</option>
									<option value="Gelombang pasang atau badai">Gelombang pasang atau badai</option>
									<option value="Kejadian Luar Biasa (KLB)">Kejadian Luar Biasa (KLB)</option>
									<option value="Konflik Sosial">Konflik Sosial</option>
									<option value="Aksi Teror">Aksi Teror</option>
									<option value="Sabotase">Sabotase</option>
								</select>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Jumlah Pengungsi</label>
                                        <input type="text" class="form-control" name="jumlah-pengungsi">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('jumlah-pengungsi'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                                <div class="col-md-6" hidden>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Deskripsi</label>
                                            <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                                            <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('deskripsi'); ?></span></small>
                                        <?php endif ?>
                                            </div>
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
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="<?php echo base_url(); ?>assets/img/faces/marc.jpg">
                        </a>
                    </div>
                    <div class="content">
                        <h6 class="category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-content">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>