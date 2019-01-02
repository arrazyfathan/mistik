<div class="content">
	<div class="container-fluid">
		<div class="row">
            <!-- Daftar Posko -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
					<h4 class="title">Tabel Daftar Posko
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
									<a href="<?= base_url() ?>admin/detailPosko/<?= $psk['id_posko']; ?>" class="badge badge-warning">Detail </a>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
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
