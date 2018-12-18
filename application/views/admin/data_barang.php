<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Petugas -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
					<h4 class="title">Tabel Daftar Donasi
					</h4>
						<p class="category"> Daftar Donasi Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center text-primary">Nama Donatur</th>
									<th class="text-center text-primary">Program Donasi</th>
									<th class="text-center text-primary">Bentuk Donasi</th>
									<th class="text-center text-primary">Nama Barang</th>
									<th class="text-center text-primary">Jumlah Barang</th>
									<th class="text-center text-primary">ٍStatus</th>
									<th class="text-center text-primary">ٍAction</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($barang as $brg) : ?>
								<tr>
									<td class="text-center"> <?= $brg['nama_donatur']; ?></td>
									<td class="text-center"> <?= $brg['program_donasi']; ?></td>
									<td class="text-center"> <?= $brg['bentuk_donasi']; ?></td>
									<td class="text-center"> <?= $brg['nama_barang']; ?></td>
									<td class="text-center"> <?= $brg['jumlah_barang']; ?></td>
									<td class="text-center"> <?= $brg['status']; ?></td>
									<a href="<?= base_url() ?>admin/editDonatur/<?= $dtr['id_donatur']; ?>" class="badge badge-warning">Edit </a>			
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($barang)) : ?>
									<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
