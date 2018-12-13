<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link href="<?php echo base_url('assets/css/content.css')?>" rel="stylesheet">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/mistik.ico')?>">

  <title>Peduli Lombok</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand " href="<?php echo base_url()?>"><img src="<?= base_url('assets/img/logo.svg') ?>" alt=" logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active " href="home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link " href="home">Program</a>
          <a class="nav-item nav-link " href="home">Contact</a>
          <a class="nav-item nav-link " href="home">About</a>
          <a class="nav-item btn tombol " href="login">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Content -->
  <div class="container-fluid konten">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Program</a></li>
        <li class="breadcrumb-item active" aria-current="page">Peduli Lombok</li>
      </ol>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg">
          <h3>Peduli Lombok</h3>
          <small>12 Agustus 2018</small><br>
          <img src="<?php echo base_url('assets/img/Slide/2.jpg')?>">
        </div>
        <div class="col-lg">
          <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, magni. Enim modi
            perspiciatis quasi, numquam
            at repellendus odit consequatur architecto aspernatur, corrupti animi rem iste veniam fugiat dolor quas
            magni.<br><br>

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, magni. Enim modi
            perspiciatis quasi, numquam
            at repellendus odit consequatur architecto aspernatur, corrupti animi rem iste veniam fugiat dolor quas
            magni.</p>
        </div>
        <div class="col-lg">
          <div class="alert alert-primary pengungsi" role="alert">
            <img src="<?php echo base_url('assets/img/icon/pengungsi.png')?>">
            <p class="ico-title">120.000 Pengungsi</p>
          </div>
          <div class="alert alert-primary posko" role="alert">
            <img src="<?php echo base_url('assets/img/icon/posko.png')?>">
            <p class="ico-title">140 Posko</p>
          </div>
          <div class="alert alert-primary bantuan" role="alert">
            <img src="<?php echo base_url('assets/img/icon/donasi.png')?>">
            <p class="ico-title">Belum Terpenuhi</p>
          </div>
          <a href="<?= base_url();?>donasicontroller" class="btn btn-primary donasi" >Donasi Sekarang</a>
        </div>
      </div>
    </div>
  </div>



  <!-- End Content -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>