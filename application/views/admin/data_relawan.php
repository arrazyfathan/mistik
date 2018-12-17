<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Petugas -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Tabel Daftar Petugas</h4>
						<p class="category"> Daftar Relawan Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Nama Depan</th>
									<th class="text-center">Nama Belakang</th>
									<th class="text-center">No. Telepon</th>
									<th class="text-center">Tempat Tanggal Lahir</th>
									<th class="text-center">Agama</th>
									<th class="text-center">Jenis kelamin</th>
									<th class="text-center">Jenis Identitas</th>
									<th class="text-center">No. Identitas</th>
									<th class="text-center">Alamat</th>
									<th class="text-center text-primary">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($petugas as $pts) : ?>
								<tr>
									<!-- Menghapus data -->
									<td class="text-center"> <?= $pts['nama_depan']; ?></td>
									<td class="text-center"> <?= $pts['nama_belakang']; ?></td>
									<td class="text-center"> <?= $pts['no_telepon']; ?> </td>
									<td class="text-center"> <?= $pts['ttl']; ?> </td>
									<td class="text-center"> <?= $pts['agama']; ?> </td>
									<td class="text-center"> <?= $pts['jenis_kelamin']; ?> </td>
									<td class="text-center"> <?= $pts['jenis_identitas']; ?> </td>
									<td class="text-center"> <?= $pts['no_identitas']; ?> </td>
									<td class="text-center"> <?= $pts['alamat']; ?> </td>
									<td class="text-center">
									<a href="<?= base_url() ?>admin/editPetugas/<?= $pts['id_petugas']; ?>" class="badge badge-warning">Edit </a>
									<a href="<?= base_url() ?>admin/hapusPetugas/<?= $pts['id_petugas']; ?>" class="badge badge-danger tombol-hapus">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($petugas)) : ?>
									<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
            <!-- End Daftar Petugas -->
		</div>
	</div>
</div>
