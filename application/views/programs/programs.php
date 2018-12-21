<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<html>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link href="<?php echo base_url('assets/css/program.css')?>" rel="stylesheet">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href=<?php echo base_url('assets/img/mistik.ico')?>>

  <title>Program</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?= base_url(); ?>"><img src="assets/img/logo.svg" alt=" logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section id="program">
	<div class="container-fluid programs">
		<div class="row">
			<p class="programs-text">SEMUA PROGRAM</p>
		</div>
		<div class="row">

			<!-- Looping -->
			<?php foreach ($bencana as $bcn) : ?>
			<div class="col-sm-3 my-3">
				<div class="card" style="width: 15rem;">
					<img class="card-img-top" src="<?= base_url("assets/img/programs/".$bcn['img_bencana'])?>" >
					<div class="card-body">
						<h5 class="card-title">
							<?= $bcn['nama_program']; ?>
						</h5>
						<p class="card-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
							<?= $bcn['deskripsi']; ?>
						</p>
						<a href="<?= base_url() ?>programcontroller/detailprogram/<?= $bcn['id_bencana']; ?>" class="btn card-button">Donasi Sekarang</a>
					</div>
				</div>
			</div>
				<?php endforeach; ?>
					<!-- End Looping -->
		</div>
	</div>
</section>
<!-- End Programs -->
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark foot">
	<div class="social" style="background-color: rgb(56, 128, 125);">
		<div class="container">
			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">
				<!-- Grid column -->
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0">Get connected with us on social networks!</h6>
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-md-6 col-lg-7 text-center text-md-right">
					<!-- Facebook -->
					<a href="" class="fb-ic" style="color: white; font-size:20px;">
						<i class="fab fa-facebook-f white mr-4"> </i>
					</a>
					<!-- Twitter -->
					<a href="" class="tw-ic" style="font-size:20px; color: white;">
						<i class="fab fa-twitter white-text mr-4"> </i>
					</a>
					<!-- Google +-->
					<a href="" class="gplus-ic" style="color: white; font-size:20px;">
						<i class="fab fa-google-plus-g mr-4"> </i>
					</a>
					<!--Instagram-->
					<a href="" class="ins-ic" style="color: white; font-size:20px;">
						<i class="fab fa-instagram white-text"> </i>
					</a>
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row-->
		</div>
	</div>
	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">
		<!-- Grid row -->
		<div class="row mt-3">
			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				<!-- Content -->
				<h6 class="text-uppercase font-weight-bold">Mistik</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
				<p>Platform yang digunakan untuk menyalurkan bantuan kepada para korban bencana alam, agar pasokan bantuan
					tersebar secara merata. Mari bantu saudara-saudara kita dengan mendonasikan sebagian harta kita atau
					menjadi relawan.</p>
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Program</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
				<p>
					<a href="#!">Peduli Lombok</a>
				</p>
				<p>
					<a href="#!">Banjir Sumatra</a>
				</p>
				<p>
					<a href="#!">Peduli Rakyat Palu</a>
				</p>
				<p>
					<a href="#!">Bantu rakya Sinabung</a>
				</p>
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Akun</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
				<p>
					<a href="#!">Daftar Menjadi Donatur</a>
				</p>
				<p>
					<a href="#!">Daftar Menjadi Relawan</a>
				</p>
				<p>
					<a href="#!">Log In</a>
				</p>
				<p>
					<a href="#!">Help</a>
				</p>
			</div>
			<!-- Grid column -->
			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Contact</h6>
				<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white;">
				<p>
					<i class="fa fa-home mr-3"></i> Sleman, Yogyakarta</p>
				<p>
					<i class="fa fa-envelope mr-3"></i> help.mistik@gmail.com</p>
				<p>
					<i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
				<p>
					<i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
			</div>
			<!-- Grid column -->
		</div>
		<!-- Grid row -->
	</div>
	<!-- Footer Links -->
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3" style="font-size: 15px;">© 2018 Copyright:
		<a href="">Mistik</a>
	</div>
	<!-- Copyright -->
</footer>
<!-- End Footer -->