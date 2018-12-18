  <!-- My CSS -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/img/logo.svg" alt=" logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#program">Program</a>
          <a class="nav-item nav-link" href="#contact">Contact</a>
          <a class="nav-item nav-link" href="#about"><span>About</span></a>
          <a class="nav-item btn tombol" href="<?= base_url();?>daftar_donatur">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->


  <!-- Jumbotron -->
  <section id="home">
    <div class="jumbotron jumbotron-fluid">
      <div class="container-fluid">
        <h1 class="display-4">Sistem Distribusi<br> Logistik</h1>
        <p>Platform yang digunakan untuk menyalurkan bantuan
          kepada para korban<br> bencana alam, agar pasokan bantuan
          tersebar secara merata.<br><br>

          Mari bantu saudara-saudara kita dengan mendonasikan
          sebagian<br> harta kita atau menjadi relawan.</p>

        <a class="btn tombol1" href="<?= base_url();?>donasicontroller">Donasi Sekarang</a><a class="btn tombol1" href="<?= base_url();?>daftar_relawan">Jadi
          Relawan</a>
      </div>
    </div>
  </section>
  <!-- End Jumbotron -->


  <!-- Programs -->
  <section id="program">
    <div class="container-fluid programs">  
      <div class="row">
        <p class="programs-text">PROGRAM</p>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="assets/img/content/lombok-01.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Peduli Lombok</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="<?= base_url();?>content/contentcontroller" class="btn card-button">Donasi Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="assets/img/content/sumatra-01.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Banjir Sumatra</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="<?= base_url();?>content/content1controller" class="btn card-button">Donasi Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="assets/img/content/palu-01.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Peduli Rakyat Palu</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="<?= base_url();?>content/content2controller" class="btn card-button">Donasi Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card" style="width: 15rem;">
            <img class="card-img-top" src="assets/img/content/sinabung-01.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Bantu Rakyat Sinabung</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's content.</p>
              <a href="<?= base_url();?>content/content3controller" class="btn card-button">Donasi Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="<?= base_url();?>programcontroller" class="btn more">Lihat semua</a>
      </div>
    </div>
  </section>
  <!-- End Programs -->

  <!-- Why  -->
  <div class="container-fluid feature">
    <div class="row">
      <div class="col-lg-8">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"">
          <ol class="
          carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="border-radius: 10px;">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/img/Slide/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/Slide/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/img/Slide/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4">
        <h4 class="feature-text">Ayo donasi sekarang</h4>
        <p class="feature-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, error. Voluptatem amet
          ratione eos quibusdam sint molestiae. Ipsa quaerat quod commodi quis placeat iure, libero amet magnam error
          vero totam?</p>
        <a href="" class="btn ayo-donasi">Ayo Donasi</a>
      </div>
    </div>
  </div>

  <!-- End Why -->

  <!-- Contact -->
  <section id="contact">
    <div class="container-fluid contact">
      <div class="row">
        <div class="col">
          <h3>Hubungi Kami</h3>
          <p>Kesulitan dalam melakukan donasi? Kami siap melayani anda 24 Jam.<br> Hubungi kami melalui cara berikut
            ini
            :</p>
          <div class="d-flex justify-content-center">
            <button class="btn cs"><i class="fas fa-phone"></i> Customer Service</button> <button class="btn email"><i
                class="fas fa-at" style="font-size:18px; color: white;"></i></i> Email</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End contact -->


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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <!-- Change color on scroll -->
<script>
    $(window).scroll(function () {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 10);
    })

    $(window).scroll(function () {
      $('.nav-link').toggleClass('scrolled', $(this).scrollTop() > 10);
    })

    $(window).scroll(function () {
      $('.nav-link span').toggleClass('scrolled', $(this).scrollTop() > 10);
    })

    $(window).scroll(function () {
      $('.tombol').toggleClass('scrolled', $(this).scrollTop() > 10);
    })
  </script>


  