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
  <link rel="stylesheet" href="<?= base_url('assets/css/donasi.css')?>">

  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico')?>">

  <title>Donasi</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand " href="<?= base_url()?>"><img src="assets/img/logo.svg" alt=" logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <!--        <a class="nav-item nav-link active " href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="#program">Program</a>
                    <a class="nav-item nav-link " href="#contact">Contact</a> -->
          <a class="nav-item nav-link ">Hi,
            <?php echo $this->session->userdata('username');?></a>
          <a class="nav-item btn tombol" href="<?= base_url().'login_donatur/logout'?>">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid uang">
    <h3>DONASI UANG</h3>
    <div class="container">
      <div class="row">
        <div class="col-6 formm">
          <div class="form-group" hidden>
            <label>Ambil data user yang login</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $this->session->userdata('username');?>">
          </div>
          <div class="form-group programs">
            <label>Pilih Program Donasi :</label>
            <select class="custom-select">
            <?php foreach ($bencana as $bcn) : ?>
              <option value="<?= $bcn['nama_program']; ?>">
              <?= $bcn['nama_program']; ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group jumlah">
            <label>Jumlah Donasi :</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jumlah Donasi">
          </div>
          <div class="form-group metode">
            <label>Metode Pembayaran :</label>
            <select class="custom-select">
              <option selected>Transfer Bank</option>
            </select>
          </div>
          <div class="form-group">
            <label for="bank">Pilih Bank :</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Bank Mandiri">
              <label class="form-check-label" for="inlineRadio1"><img class="bank-img" src="assets/img/bank/mandiri.png" alt=""></label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Bank BCA">
              <label class="form-check-label" for="inlineRadio2"><img class="bank-img" src="assets/img/bank/bca.png" alt=""></label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Bank BNI">
              <label class="form-check-label" for="inlineRadio3"><img class="bank-img" src="assets/img/bank/bnisya.png" alt=""></label>
            </div><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="Bank BRI">
              <label class="form-check-label" for="inlineRadio4"><img class="bank-img" src="assets/img/bank/bri.png" alt=""></label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="Bank CIMB Niaga">
              <label class="form-check-label" for="inlineRadio5"><img class="bank-img" src="assets/img/bank/cimb.png" alt=""></label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="Permata Bank">
              <label class="form-check-label" for="inlineRadio6"><img class="bank-img" src="assets/img/bank/permata.png" alt=""></label>
            </div>  
          </div>
          <a href="<?php echo base_url();?>InvoiceController" class="btn btn-kirim">Kirim</a>
        </div>
        <div class="col-6">
          <img class="img-donation" src="assets/img/donat_uang.png" alt="donation">
        </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- <script>
    $('html, body').css({
      overflow: 'hidden',
      height: '100%'
    });
  </script> -->
</body>
</html>