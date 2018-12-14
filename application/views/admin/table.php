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
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($bencana as $bcn) : ?>
								<tr>
									<td> <?= $bcn['nama_program']; ?></td>
									<td> <?= $bcn['jenis_bencana']; ?></td>
									<td> <?= $bcn['jumlah_pengungsi']; ?></td>
									<td> <?= $bcn['deskripsi']; ?> </td>
									<!-- Menghapus data -->
									<td><a href="<?= base_url() ?>admin/hapusBencana/<?= $bcn['id_bencana']; ?>" onclick="return confirm('Anda Yakin');">hapus</a></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		    <!-- End Daftar Program -->
            <!-- Daftar Petugas -->
			<div class="col-md-12">
				<div class="card card-plain">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Tabel Daftar Petugas</h4>
						<p class="category">Relawan Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center text-primary">Action</th>
									<th class="text-center">Nama Depan</th>
									<th class="text-center">Nama Belakang</th>
									<th class="text-center">Email</th>
									<th class="text-center">No. Telepon</th>
									<th class="text-center">Tempat Tanggal Lahir</th>
									<th class="text-center">Agama</th>
									<th class="text-center">Jenis kelamin</th>
									<th class="text-center">Jenis Identitas</th>
									<th class="text-center">No. Identitas</th>
									<th class="text-center">Alamat</th>
									<th class="text-center">Kode POS</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($petugas as $pts) : ?>
								<tr>
									<!-- Menghapus data -->
									<td><a href="<?= base_url() ?>admin/hapusPetugas/<?= $pts['id_petugas']; ?>" onclick="return confirm('Anda Yakin');">hapus</a></td>
									<td class="text-center"> <?= $pts['nama_depan']; ?></td>
									<td class="text-center"> <?= $pts['nama_belakang']; ?></td>
									<td class="text-center"> <?= $pts['email']; ?></td>
									<td class="text-center"> <?= $pts['no_telepon']; ?> </td>
									<td class="text-center"> <?= $pts['ttl']; ?> </td>
									<td class="text-center"> <?= $pts['agama']; ?> </td>
									<td class="text-center"> <?= $pts['jenis_kelamin']; ?> </td>
									<td class="text-center"> <?= $pts['jenis_identitas']; ?> </td>
									<td class="text-center"> <?= $pts['no_identitas']; ?> </td>
									<td class="text-center"> <?= $pts['alamat']; ?> </td>
									<td class="text-center"> <?= $pts['pos']; ?> </td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <!-- End Daftar Petugas -->
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
									<th class="text-primary">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($donatur as $dtr) : ?>
								<tr>
									<td> <?= $dtr['nama_lengkap']; ?></td>
									<td> <?= $dtr['email']; ?></td>
									<td> <?= $dtr['alamat']; ?></td>
									<td> <?= $dtr['no_telepon']; ?> </td>
									<!-- Menghapus data -->
									<td><a href="<?= base_url() ?>admin/hapusDonatur/<?= $dtr['id_donatur']; ?>" onclick="return confirm('Anda Yakin');">hapus</a></td>
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
