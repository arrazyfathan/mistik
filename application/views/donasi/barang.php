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
  <div class="container-fluid barang">
    <h3>DONASI BARANG</h3>
    <div class="container">
      <div class="row kiri">
        <div class="col-6 form">
          <div class="form-group" hidden>
            <label>Ambil data user yang login</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $this->session->userdata('username');?>">
          </div>
          <div class="form-group programs atas">
            <label>Pilih Program Donasi :</label>
            <select class="custom-select pro" name="nama-program">
            <?php foreach ($bencana as $bcn) : ?>
              <option value="<?= $bcn['nama_program']; ?>">
              <?= $bcn['nama_program']; ?>
              </option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group programs bentuk">
            <label>Bentuk donasi :</label>
            <select class="custom-select" name="bentuk-donasi">
              <option selected>Pilih Donasi</option>
              <option value="Sandang">Sandang</option>
              <option value="Pangan">Pangan</option>
            </select>
          </div>
          <div class="form-group sandang">
							<label>Nama Barang :</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" 
							name='nama-barang' placeholder="Masukan Nama Barang">
						</div>
          <div class="form-group" hidden>
							<label>Status</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" value="Belum Diterima"
							name='status'>
            </div>
            <div class="form-group sandang">
							<label>Jumlah Barang :</label>
							<input type="text" class="form-control" id="exampleFormControlInput1" 
							name='nama-barang' placeholder="Masukan Nama Barang">
						</div>
         
          <button class="btn btn-kirim" data-toggle="modal" data-target=".bd-example-modal-lg">Kirim</button>
        </div>
        <div class="col-6">
        <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="519" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=uii&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{margin-left:80px;margin-top:40px;text-align:right;height:360px;width:519px;posisition:fixed;}.gmap_canvas {border-radius:8px;overflow:hidden;background:none!important;height:360px;width:519px;}</style></div> -->
          <img class="bc-img" src="assets/img/pinggir.png" alt="">
          <img class="bb-img" src="assets/img/barang.png" alt="">
        </div>
      </div>
    </div>
  </div>


<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Info Donasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">   
        <h4>Ketentuan Donasi Barang</h4><br>
        <ul>
          <li>Silahkan kirimkan donasi anda ke alamat berikut ini :<br>BPBD Kota Yogyakarta
 Jl. Ipda Tut Harsono No.8, Muja Muju, <br>Umbulharjo, Kota Yogyakarta, Daerah Istimewa <br>Yogyakarta 55165</li>
          <li>Barang dapat dikirimkan melalui JNE,POS Indonesia, J&T dan penyedia jasa lainnya. </li>
          <li>Barang akan dikirimkan langsung melalui BDPB ke lokasi bencana</li>
          <li>Terima Kasih sudah berdonasi, bantuan anda akan sangat bermanfaat.</li>
        </ul>

        <img class="modal-img" src="assets/img/love.png" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-close" data-dismiss="modal">Kembali</button>
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
    <script>
    $('html, body').css({
      overflow: 'hidden',
      height: '100%'
    });
  </script>
</body>

</html>