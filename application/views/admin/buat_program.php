<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header" data-background-color="blue">
						<h4 class="title">Tambahkan Program</h4>
					</div>
					<div class="card-content">
						<form method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Nama Program</label>
										<input type="text" class="form-control" name="nama-program">
										<span class="material-input"></span>
										<?php if (validation_errors()) : ?>
										<small><span class="text-danger">
												<?= form_error('nama-program'); ?></span></small>
										<?php endif ?>
									</div>
								</div>
							</div>
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
										<small><span class="text-danger">
												<?= form_error('jumlah-pengungsi'); ?></span></small>
										<?php endif ?>
									</div>
								</div>
								<div class="col-md-6" hidden>
								</div>
							</div>
							<!-- img -->
							<div class="row">
								<div class="col-md">
									<div class="form-group">
										<label for="img">Upload Image</label>
										<input type="file" id="img" name="img">
									</div>
								</div>
							</div>
							<!-- end img -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="form-group label-floating is-empty">
											<label class="control-label">Deskripsi</label>
											<textarea class="form-control" rows="5" name="deskripsi"></textarea>
											<span class="material-input"></span>
											<?php if (validation_errors()) : ?>
											<small><span class="text-danger">
													<?= form_error('deskripsi'); ?></span></small>
											<?php endif ?>
										</div>
									</div>
								</div>
							</div>
							<div class="flash-data2" data-flashdata2="<?= $this->session->flashdata('flash');?>"></div>
							<button type="submit" class="btn btn-primary pull-right" data-background-color="blue">Tambahkan</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
