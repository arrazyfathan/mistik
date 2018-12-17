<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Buat Posko</h4>
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
                                        <label class="control-label">Nama Posko</label>
                                        <input type="text" class="form-control" name="nama-posko">
                                        <span class="material-input"></span>
                                        <?php if (validation_errors()) : ?>
                                            <small><span class="text-danger"><?= form_error('nama-posko'); ?></span></small>
                                        <?php endif ?>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating">
										<label class="control-label">Nama Anggota</label>
										<select class="material-selected form-control" name="username">
                                            <?php foreach ($petugas as $pts) : ?>
											<option value="<?= $pts['username']; ?>">
												<?= $pts['nama_depan'];?> <?=$pts['nama_belakang'];?>
											</option>
											<?php endforeach; ?>
										</select>
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