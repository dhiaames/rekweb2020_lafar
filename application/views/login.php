<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>


    <!--Bootsrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-lafar.png">
    <!--styles-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/stylelogin.css">

</head>

<body class="bg-secondary">
    <div class="container mt-5">
        <div class="d-flex justify-content-center ">
            <div class="card">
                <div class="card-header bg-warning">
                    <h3>Log In</h3>
                </div>
                <div class="card-body">
                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>

                    <?php
                    if ($this->session->flashdata('success_register') != '') {
                        echo '<div class="alert alert-info" role="alert">';
                        echo $this->session->flashdata('success_register');
                        echo '</div>';
                    }
                    ?>
                    <form method="post" action="<?php echo base_url(); ?>login/proses">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username" name="username" id="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-light">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="<?= base_url() ?>register">Sign Up</a>
                    </div>
                    <a href="<?= base_url() ?>welcome" class="btn btn-dark">Back to Main</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>