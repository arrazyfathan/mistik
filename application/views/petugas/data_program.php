<div class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- Daftar Program -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Tabel Daftar Program</h4>
						<p class="category">Daftar Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table">
							<thead class="text-primary">
								<tr>
									<th>Nama Program</th>
									<th>Jenis Bencana</th>
									<th>Jumlah Pengungsi</th>
									<th>Deskripsi</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($bencana as $bcn) : ?>
								<tr>
									<td> <?= $bcn['nama_program']; ?></td>
									<td> <?= $bcn['jenis_bencana']; ?></td>
									<td> <?= $bcn['jumlah_pengungsi']; ?></td>
									<td> <?= $bcn['deskripsi']; ?> </td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		    <!-- End Daftar Program -->
		</div>
	</div>
</div>
