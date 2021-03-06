<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Edit Profile</h4>
						<p class="category">Complete your profile</p>
					</div>
					<div class="card-content">
						<form method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="">Nama Depan</label>
										<input type="text" class="form-control" name="nama-depan" value="<?= $petugas['nama_depan']; ?>">
										<span class="material-input"></span>
										<?php if (validation_errors()) : ?>
										<small><span class="text-danger">
												<?= form_error('nama-depan'); ?></span></small>
										<?php endif ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="">Nama Belakang</label>
										<input type="text" class="form-control" name="nama-belakang" value="<?= $petugas['nama_belakang']; ?>">
										<span class="material-input"></span>
										<?php if (validation_errors()) : ?>
										<small><span class="text-danger">
												<?= form_error('nama-belakang'); ?></span></small>
										<?php endif ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="">No. Telepon</label>
										<input type="text" class="form-control" name="notelp" value="<?= $petugas['no_telepon']; ?>">
										<span class="material-input"></span>
										<?php if (validation_errors()) : ?>
										<small><span class="text-danger">
												<?= form_error('notelp'); ?></span></small>
										<?php endif ?>
									</div>
								</div> 
                                </div>
                                <div class="row">
								<div class="col-md-12">
									<div class="form-group label-floating is-empty">
										<label class="">Alamat</label>
										<input type="text" class="form-control" name="alamat" value="<?= $petugas['alamat']; ?>">
										<span class="material-input"></span>
										<?php if (validation_errors()) : ?>
										<small><span class="text-danger">
												<?= form_error('alamat'); ?></span></small>
										<?php endif ?>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary pull-right" data-background-color="blue">Update Profile</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-4">
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
							Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye
							loves Kanye I love Rick Owens’ bed design but the back is...
						</p>
						<a href="#pablo" class="btn btn-primary btn-round">Follow</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
