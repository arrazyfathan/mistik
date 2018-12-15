<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Donatur -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Tabel Daftar Donatur</h4>
						<p class="category">Daftar Donatur Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table">
							<thead class="text-primary">
								<tr>
									<th>Nama Lengkap</th>
									<th>Email</th>
									<th>Alamat</th>
									<th>No. Telepon</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($donatur as $dtr) : ?>
								<tr>
									<td> <?= $dtr['nama_lengkap']; ?></td>
									<td> <?= $dtr['email']; ?></td>
									<td> <?= $dtr['alamat']; ?></td>
									<td> <?= $dtr['no_telepon']; ?> </td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <!-- End Daftar Donatur -->
		</div>
	</div>
</div>
