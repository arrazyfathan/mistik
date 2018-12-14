<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/css/fixed-navbar.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/mistik.ico">

  <title>Daftar Donatur</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand " href="home"><img src="assets/img/logo-2.png" alt=" logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active " href="home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link " href="#program">Program</a>
          <a class="nav-item nav-link " href="#contact">Contact</a>
          <a class="nav-item nav-link " href="#about">About</a>
          <a class="nav-item btn tombol " href="login_donatur">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

<div class="kotak"></div>
</div>
<div class="container">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title">Daftar Akun Donatur</h3>
			<div class="tabel-donatur">

				<form action="" method="post">
					<div class="form-group">
						<div class="form-group">
						</div>
					</div>
					<div class="form-group">
						<label for="nama-lengkap">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama-lengkap" id="nama-lengkap" placeholder="Masukan Nama Lengkap">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('nama-lengkap'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('username'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="ttl">Tanggal Lahir</label>
						<input type="date" class="form-control" name="ttl" id="ttl" placeholder="">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('ttl'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('alamat'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="mail">E-Mail</label>
						<input type="mail" class="form-control" name="email" id="email" placeholder="Masukan E-Mail">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('email'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="notelp">No. Telepon</label>
						<input type="text" class="form-control" name="notelp" id="notelp" placeholder="Masukan No. Telepon">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('notelp'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('password'); ?></span></small>
					<?php endif ?>
					</div>
					<div class="form-group">
						<label for="repeat">Ulangi Password</label>
						<input type="password" class="form-control" name="repeat" id="repeat" placeholder="Ulangi Password">
					<?php if (validation_errors()) : ?>
						<small><span class="text-danger"><?= form_error('repeat'); ?></span></small>
					<?php endif ?>
					</div>
					
					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
		
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-daftar" id="daftar" >Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

		<!-- Script Sweet Alert2 -->
    <script src="<?= base_url()?>assets/js/sweetalert2.all.min.js"></script>

		<!-- My JSS -->
		<script src="<?= base_url()?>assets/js/sweetalertfix.js"></script>

</body>

</html>
