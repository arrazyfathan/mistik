<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Petugas -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
					<h4 class="title">Tabel Daftar Posko
					<a href="<?php echo base_url() . 'admin/buatPosko' ?>">
                    <i class="material-icons float-right">add</i>
					</h4>
						<p class="category"> Daftar Posko Program Bantuan Bencana</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center text-primary">Nama Posko</th>
									<th class="text-center text-primary">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($posko as $psk) : ?>
								<tr>
									<td class="text-center"> <?= $psk['nama_posko']; ?></td>
									<td class="text-center">
									<a href="<?= base_url() ?>admin/detailPosko/<?= $psk['id_posko']; ?>" class="badge badge-warning">Detail </a>
									<a href="<?= base_url() ?>admin/editPosko/<?= $psk['id_posko']; ?>" class="badge badge-warning">Edit </a>
									<a href="<?= base_url() ?>admin/hapusPosko/<?= $psk['id_posko']; ?>" class="badge badge-danger tombol-hapus">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
            <!-- End Daftar Petugas -->
		</div>
	</div>
</div>
