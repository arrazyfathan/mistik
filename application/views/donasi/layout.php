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
    <link rel="stylesheet" href="assets/css/donasi.css">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/mistik.ico">

    <title>Donasi</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand " href="home"><img src="assets/img/logo.svg" alt=" logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
             <!--        <a class="nav-item nav-link active " href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link " href="#program">Program</a>
                    <a class="nav-item nav-link " href="#contact">Contact</a> -->
                    <a class="nav-item nav-link " href="#about">Hi, <?php echo $this->session->userdata('username');?></a>
                    <a class="nav-item btn tombol " href="<?php echo base_url().'login_donatur/logout'?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- Donasi -->
    <div class="container donasi">
        <h3>PILIH DONASI ANDA</h3>
        <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit,
            praesentium.Advoluptas perferendis repellat saepe quisquam iste omnis, ipsam animi dolore rem inventore ab
            quia tempor.</p>
        <div class="container kotak">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img class="card-img-top" src="assets/img/donasi/uang.png" alt="Card image cap">
                                <p class="card-text">Donasi via transfer bank<br>dan Donasi 24 Jam</p>
                            </div>
                            <div class="card-footer btn btn-donasi">
                                <a href="#">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img class="card-img-top" src="assets/img/donasi/barang.png" alt="Card image cap">
                                <p class="card-text">Donasi non-tunai dalam <br>bentuk barang fisik</p>
                            </div>
                            <div class="card-footer btn btn-donasi">
                                <a href="#">DONASI SEKARANG</a>
                            </div>
                        </div>
                    </div>
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
</body>

</html>