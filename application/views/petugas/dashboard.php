<?php
    foreach($grafik as $grafik){
        $nama_program[] = $grafik->nama_program;
        $jumlah_pengungsi[] = $grafik->jumlah_pengungsi;
    }
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="orange">
						<i class="material-icons">content_copy</i>
					</div>
					<div class="card-content">
						<p class="category"  style="font-weight:500;">Total Program</p>
						<h3 class="title">
							<?php echo $program; ?>
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="green">
						<i class="material-icons">store</i>
					</div>
					<div class="card-content">
						<p class="category"  style="font-weight:500;">Total Posko</p>
						<h3 class="title">
							<?php echo $posko; ?>
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="red">
						<i class="material-icons">group_add</i>
					</div>
					<div class="card-content">
						<p class="category"  style="font-weight:500;">Total Pengungsi</p>
						<h3 class="title">
							<?php echo $pengungsi; ?>
						</h3>
					</div>
					<div class="card-footer">
						<div class="stats">

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="card card-stats">
					<div class="card-header" data-background-color="blue">
						<i class="material-icons">local_atm</i>
					</div>
					<div class="card-content">
						<p class="category"  style="font-weight:500;">Total Donasi</p>
						<h3 class="title">Rp. <?php echo $uang; ?></h3>
					</div>
					<div class="card-footer">
						<div class="stats">

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- GRAFIK 1-->
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="green">
					<h4 class="title" style="font-weight:500;">Grafik Jumlah Pengungsi</h4>
						<p class="category">Jumlah pengungsi berdasarkan data relawan</p>
					</div>
					<div class="card-content">
						<canvas id="myChart" width="150" height="50"></canvas>
					</div>
					<div class="card-footer">
						<div class="stats">
							<i class="material-icons">access_time</i> updated 4 minutes ago
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- PENGUNGSI CHART -->
		<script>
			let myChart = document.getElementById('myChart').getContext('2d');
			// Global Options
			Chart.defaults.global.defaultFontFamily = 'Roboto';
			Chart.defaults.global.defaultFontSize = 12;
			Chart.defaults.global.defaultFontColor = '#777';

			let massPopChart = new Chart(myChart, {
				type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
				data: {
					labels: <?php echo json_encode($nama_program);?>,
					datasets: [{
						label: 'Jumlah Pengungsi',
						data: <?php echo json_encode($jumlah_pengungsi);?>,
						backgroundColor: [
							'rgba(255, 99, 132, 0.6)',
							'rgba(54, 162, 235, 0.6)',
							'rgba(255, 206, 86, 0.6)',
							'rgba(75, 192, 192, 0.6)',
							'rgba(153, 102, 255, 0.6)',
							'rgba(255, 159, 64, 0.6)',
							'rgba(255, 99, 132, 0.6)'
						],
						borderWidth: 1,
						borderColor: '#777',
						hoverBorderWidth: 3,
						hoverBorderColor: '#000'
					}]
				},
				options: {
					// title: {
					// 	display: true,
					// 	text: 'Grafik Jumlah Pengungsi',
					// 	fontSize: 25
					// },
					legend: {
						display: false,
						position: 'right',
						labels: {
							fontColor: '#000'
						}
					},
					layout: {
						padding: {
							left: 50,
							right: 0,
							bottom: 0,
							top: 20
						}
					},
					tooltips: {
						enabled: true
					}
				}
			});

		</script>
