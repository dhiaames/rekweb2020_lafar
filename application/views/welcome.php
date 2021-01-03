<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-lafar.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/cuaca.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lafar Resto</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>assets/img/nav-lafar.png" width="20%" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#top">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#contact">Contact</a>
                </li>
                <a class="nav-item btn btn-dark" href="<?php echo base_url() ?>login">Login</a>
                <a class="nav-item btn btn-warning" href="<?php echo base_url() ?>register">Register</a>
            </div>
        </div>
    </nav>
    <!-- Carousel -------------------------------------------------------------------------------------------->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-caption d-none d-md-block">
                <img src="<?php echo base_url() ?>assets/img/nav-lafar.png" alt="" width="400">
                <h1 class="text-dark">Lafar buat harimu berat.....</h1>
                <h4>Lumer saus lafa yang manis tak tertahankan...</h4>

            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/bg1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/bg2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url() ?>assets/img/bg3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About --------------------------------------------------------------------------------------------------->
    <section id="about">
        <h3 class="section-heading" style="color: black;">About Us</h3>
        <div class="container">
            <div class="row" id="change-it-now">
                <div class="col-md-6">
                    <img src="<?php echo base_url() ?>assets/img/volcano.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 text-justify">
                    <h3 style="margin: 0;">L A F A R</h3>
                    <h4>Lafa Restaurant</h4>
                    <h5>Restoran kekinian dengan tema makanan Lava. semua yang kami jual kepada pelanggan adalah segala jenis makanan dan minuman yang terlihat seperti lava. <br>Berdiri belum lama ini karena kepentingan tugas mata kuliah rekayasa web.</h5>
                    <h5>Logo kami pun terinspirasi dari letupan kuat lava dari perut bumi yang berarti letupan semangat yang berapi - api dalam mencapai tujuannya.</h5>
                    <img src="<?php echo base_url() ?>assets/img/nav-lafar.png" alt="" width="300">
                </div>
            </div>
        </div>
    </section>


    <!-- Menu --------------------------------------------------------------------------------------------------------->
    <section id="menu" class="menu-area">
        <div class="container">
            <h3 class="section-heading">Top Menu</h3>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="menu-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="<?php echo base_url() ?>assets/img/menu/bakso_lafa.jpeg" alt="" width="180">
                                        </div>
                                        <h4>Bakso Lafa</h4>
                                        <p>Main Dish</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Bakso Lafa</h4>
                                        <h6>Bakso lafa ini adalah varian bakso unik di yang bentuknya menyita perhatian seperti kawah gunung yang sedang meletus dengan tambahan siraman sambal rawit super</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="menu-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="<?php echo base_url() ?>assets/img/menu/1.png" alt="" width="180">
                                        </div>
                                        <h4>Choco Lafa Cake</h4>
                                        <p>Dessert</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Choco Lafa Cake</h4>
                                        <h6>Ciri khas choco lafa cake adalah bagian kue luarnya yang lembut dan bagian dalamnya meleleh seperti lava</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="menu-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="<?php echo base_url() ?>assets/img/menu/2.png" alt="" width="180">
                                        </div>
                                        <h4>Ice Choco Lafa</h4>
                                        <p>Drink</p>
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Ice Choco Lafa</h4>
                                        <h6>Ice Choco Lava merupakan menu minuman cokelat yang lezat dan bakal dengan rasa manis dari cokelat dicampur dengan susu segar ditambah siraman saus coklat. </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-warning btn-lg" href="<?php echo base_url() ?>welcome/bukaMenu"><span><i class="fa fa-chevron-circle-down mr-2"></i></span>
                    More Menu</a>
            </div>
        </div>
    </section>


    <!-- Contact US ----------------------------------------------------------------------------------------------->
    <section id="contact" class="bg-warning">
        <p>----- <a class="copyright text-warning" href="<?php echo base_url() ?>home/index">admin</a> ------</p>
        <h3 class="section-heading">Contact Us</h3>
        <div class="content">
            <h4>Kunjungi Kami</h4>
            <h4>Kami Siap Melayani Dengan Bergejolak Hati</h4>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Jl. Setia Budhi No 67, <br>43252 <br>Bandung</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone / Fax</h3>
                        <p>+62-878-3435-7215 / +62-213-3422-223</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>lafar_resto@gmail.com</p>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2267.88891228699!2d107.59504495191638!3d-6.862431692535312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bf5522233d%3A0x79b748ddb30311cc!2sJl.%20Dr.%20Setiabudi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1609185137655!5m2!1sid!2sid" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="row">
                <!-- API Cuaca -->
                <div class="cuaca-container rounded">
                    <h3>Today's Weather</h3>
                    <img src="" alt="" class="icon">
                    <p class="cuaca"></p>
                    <p class="temp"></p>
                </div>
            </div>


        </div>

    </section>





    <!-- Footer -->
    <section id="footer">
        <div class="container justify-content-center">
            <p class="copyright"> 2020 &copy; Made by Lafar Team</p>
            <p class="copyright"> LEKWEB | ARDHIA | FAUZAN | ANANDA | REYHAN</p>
        </div>
    </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Change Navbar -->
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100)
        });
    </script>

    <script src="<?php echo base_url() ?>assets/js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script src="<?php echo base_url() ?>assets/js/cuaca.js"></script>
</body>

</html>