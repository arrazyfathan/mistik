<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Data Persebaran Lokasi Posko</h4>
					</div>
                    <!-- Mapbox -->
					<div class="card-content">
						<div id='map' style='width: 900px; height: 500px;'></div>
						<script>
							mapboxgl.accessToken =
								'pk.eyJ1IjoiaGV4YXRlZCIsImEiOiJjanBuczAwemMwNmI0NDJwZnkyanBsd3lkIn0.P2gTKBkU4LbB_mKqtq5a6A';
							var map = new mapboxgl.Map({
								container: 'map',
								style: 'mapbox://styles/mapbox/streets-v9',
                                center: [0, 0], // starting position [lng, lat]
                                zoom: 9 // starting zoom
							});      
						</script>
					</div>
                    <!-- End Mapbox -->
				</div>
			</div>
		</div>
	</div>
</div>
