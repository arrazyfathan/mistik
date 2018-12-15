<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Petugas -->
			<div class="col-md-6">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Detail Posko</h4>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-primary">Anggota Posko</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($posko as $psk) : ?>
								<tr>
									<td class=""> <?= $psk['nama_posko']; ?></td>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <div class="col-md-6">
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
