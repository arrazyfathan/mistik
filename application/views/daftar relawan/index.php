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
  <link rel="stylesheet" href="assets/css/daftar-relawan.css">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/mistik.ico">

  <title>Daftar Relawan</title>
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
          <a class="nav-item nav-link " href="home/#program">Program</a>
          <a class="nav-item nav-link " href="#contact">Contact</a>
          <a class="nav-item nav-link " href="#about">About</a>
          <a class="nav-item btn tombol " href="login.html">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

<div class="kotak"></div>
<div class="container">
	<div class="card relawan">
		<div class="card-body">
			<div class="container-fluid">
				<p class="title">Daftar Akun Relawan</p>
				<form action="" method="post">
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<p class="subtitle">Informasi Pribadi</p>
								<label for="namadepan">Nama Depan</label>
								<input type="text" class="form-control" name="namadepan" placeholder="Nama Depan" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('namadepan'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="namabelakang">Nama Belakang</label>
								<input type="text" name="namabelakang" class="form-control" placeholder="Nama Belakang" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('namabelakang'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="ttl">Tempat Tanggal Lahir</label>
								<input type="text" name="ttl" class="form-control" placeholder="Masukkan Tempat tanggal lahir"></input>
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('ttl'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="agama">Agama</label><br>
								<select class="custom-select" name="agama">
									<option selected value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Budha">Budha</option>
									<option value="Hindu">Hindu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="jenkel">Jenis Kelamin</label><br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki-laki">
									<label class="form-check-label" for="jenkel"> Laki-laki</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan">
									<label class="form-check-label" for="jenkel">Perempuan</label>
								</div>
							</div>
							<div class="form-group">
								<label for="jenisidentitas" >Jenis Identitas</label><br>
								<select class="custom-select" name="jenisidentitas">
									<option selected value="KTP">KTP</option>
									<option value="SIM">SIM</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>
							<div class="form-group">
								<label for="noid">No. Identitas</label>
								<input type="text" name="noid" class="form-control" placeholder="Masukkan No.Identitas">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('noid'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control"></textarea>
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('alamat'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="pos">Kode POS</label>
								<input type="text" name="pos" id="pos" class="form-control" placeholder="Masukkan kode POS" />
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('pos'); ?></span></small>
								<?php endif ?>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<p class="subtitle">Informasi Akun</p>
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('username'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="mail">Email</label>
								<input type="mail" class="form-control" id="email" name="email" placeholder="Masukan email">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('email'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="notelp"> No. Telepon</label>
								<input type="text" class="form-control" id="notelp" name="notelp" placeholder="Masukan no Telepon">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('notelp'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('password'); ?></span></small>
								<?php endif ?>
							</div>
							<div class="form-group">
								<label for="repeat">Ulangi Password</label>
								<input type="password" class="form-control" id="repeat" name=repeat placeholder="Ulangi Password">
								<?php if (validation_errors()) : ?>
								<small><span class="text-danger">
										<?= form_error('repeat'); ?></span></small>
								<?php endif ?>
							</div>
							
							<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>

							<div class="invisible">
								<label for="level">Role</label>
								<input type="number" value="2" class="form-control" id="level" name="level" placeholder="Ulangi Password">
							</div>
						</div>
					</div>
			</div>
			<button class="btn btn-daftar" type="submit">Daftar</button>
			</form>
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
