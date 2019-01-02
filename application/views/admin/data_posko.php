<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Posko -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="blue">
					<h4 class="title">Tabel Daftar Posko
					<a href="<?php echo base_url() . 'admin/buatPosko' ?>">
                    <i class="material-icons float-right" style="border-radius:100px; background-color:#fff; color:#0CB5C9;">add</i>
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
								<?php foreach ($data->result_array() as $psk) : ?>
								<tr>
									<td class="text-center"> <?= $psk['nama_posko']; ?></td>
									<td class="text-center">
									<a href="<?= base_url() ?>admin/detailPosko/<?= $psk['id_posko']; ?>" ><i class="material-icons" title="detail">visibility</i></a>
									<a href="<?= base_url() ?>admin/editPosko/<?= $psk['id_posko']; ?>" ><i class="material-icons" title="edit">create</i></a>
									<a href="<?= base_url() ?>admin/hapusPosko/<?= $psk['id_posko']; ?>" class="tombol-hapus"><i class="material-icons" title="hapus">delete_sweep</i></a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($data)) : ?>
									<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
            <!-- End Daftar Posko -->
			<!-- pagenation -->
			<div class="row">
				<div class="col">
					<?php echo $pagination; ?>
				</div>
			</div>
			<!-- end pagenation -->
		</div>
	</div>
</div>
