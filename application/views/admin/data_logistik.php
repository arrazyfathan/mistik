<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
					<h4 class="title">Tabel Daftar Kelogistik
					</h4>
						<p class="category">Daftar Kekurangan Logistik</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center text-primary">Nama Barang</th>
									<th class="text-center text-primary">Jenis Barang</th>
									<th class="text-center text-primary">Stok Kebutuhan</th>
									<th class="text-center text-primary">Status</th>
									<th class="text-center text-primary">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kelogistik as $kgt) : ?>
								<tr>
									<td class="text-center"> <?= $kgt['nama_barang']; ?></td>
									<td class="text-center"> <?= $kgt['jenis_barang']; ?></td>
									<td class="text-center"> <?= $kgt['stok_kebutuhan']; ?></td>
									<td class="text-center">Belum Terpenuhi</td>
									<td class="text-center">
									<a href="<?= base_url() ?>admin/hapusLogistik/<?= $kgt['id_logistik']; ?>" class="tombol-hapus"><i class="material-icons">done</i></a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($kelogistik)) : ?>
									<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
