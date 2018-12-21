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
									<th class="text-center text-primary">Jumlah Donasi</th>
									<th class="text-center text-primary">Metode Pembayaran</th>
									<th class="text-center text-primary">Nama Bank</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($uang as $ung) : ?>
								<tr>
									<td class="text-center"> <?= $ung['nama_donatur']; ?></td>
									<td class="text-center"> <?= $ung['program_donasi']; ?></td>
									<td class="text-center"> <?= $ung['jumlah']; ?></td>
									<td class="text-center"> <?= $ung['metode_pembayaran']; ?></td>
									<td class="text-center"> <?= $ung['nama_bank']; ?></td>		
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
						<?php if(empty($uang)) : ?>
									<div class="title text-center text-warning"><h3>DATA TIDAK DITEMUKAN</h3></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
