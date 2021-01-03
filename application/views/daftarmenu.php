<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-lafar.png">

    <title>Daftar Menu</title>
    <style>
        body {
            background-color: antiquewhite;
        }

        .navbar-custom {
            background: transparent;
        }

        .navbar-custom.scrolled {
            background-color: #12172b;
        }

        .navbar-custom.scrolled .nav-link {
            color: white;
        }

        .navbar-toggler-icon {
            background-color: black;
        }

        #footer {
            padding: 50px;
            background-color: #efefef;
            color: #013f7e;
        }

        #footer p {
            font-size: 12px;
            text-align: left;
        }

        #footer .row .fa {
            padding-right: 20px;
            font-size: 15px;
        }

        #footer .fa-heart-o {
            color: red;
            font-size: 17px;
        }

        #footer .copyright {
            margin-bottom: 10px;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/nav-lafar.png" width="120">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-white" href="#top">All Menu</a>
                    <a class="nav-link text-white" href="#main_dish">Main Dish</a>
                    <a class="nav-link text-white" href="#dessert">Dessert</a>
                    <a class="nav-link text-white" href="#drink">Drink</a>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="index" class="btn btn-dark text-white">Back</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-3">
            <div class="col" style="margin-top:100px;">
                <h1 class="text-center">All Menu</h1>
            </div>
        </div>

        <section id="main_dish">
            <h3 style="padding: 20px;">Main Dish</h3>
            <div class="row" id="daftar-menu">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo base_url() ?>assets/img/menu/bakso_lafa.jpeg" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bakso Lafa</h5>
                            <h5 class="card-title">Rp. 20.000</h5>
                            <a href="#" class="btn btn-primary">Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Dessert -->
        <section id="dessert">
            <h3 style="padding: 20px;">Dessert</h3>
            <div class="row" id="daftar-menu">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo base_url() ?>assets/img/menu/11.png" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Choco Lava Cake</h5>
                            <h5 class="card-title">Rp. 35.000</h5>
                            <a href="#" class="btn btn-primary">Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Drink -->
        <section id="drink">
            <h3 style="padding: 20px;">Drink</h3>
            <div class="row" id="daftar-menu">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo base_url() ?>assets/img/menu/2.png" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ice Choco Lava</h5>
                            <h5 class="card-title">Rp. 20.000</h5>
                            <a href="#" class="btn btn-primary">Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <section id="footer">
        <div class="container ">
            <p class="copyright"> 2020 &copy; Made by Lafar Team</p>
            <p class="copyright"> LEKWEB | ARDHIA | FAUZAN | ANANDA | REYHAN</p>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 20)
        });
    </script>

    <script src="../../../assets/js/smooth-scroll.js"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>