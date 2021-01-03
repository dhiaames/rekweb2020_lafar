<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-lafar.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>

<body>
    <!--Nav bar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary rounded">
        <a class="navbar-brand" href="#"><img src="<?= base_url(); ?>assets/img/nav-lafar.png" width="20%" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item btn btn-dark" href="logout">Log out<span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>



    <div class="container">

        <h1 class="text-center bg-warning">DAFTAR MENU</h1>
        <form action="<?= base_url() ?>index.php/home/index" method="get">
            <a href="<?= base_url() ?>index.php/home/tambah" class="btn btn-dark">Tambah menu</a>
            <input type="text" name="cari">
            <input type="submit" value="Cari" class="btn btn-dark">
        </form>
        <hr>
        <!-- Tabel -->
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto Menu</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Harga</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data as $data) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><img src="<?= base_url() ?>assets/img/menu/<?= $data->foto_menu ?>" alt="foto" width="100"></td>
                            <td><?php echo $data->nama_menu ?></td>
                            <td>Rp. <?php echo $data->harga_menu ?></td>
                            <td> <a href="<?= base_url() ?>index.php/home/edit/<?= $data->id_menu ?>" class="btn btn-info" role="button">Edit</a>
                                <a href="<?= base_url() ?>index.php/home/deletedata/<?= $data->id_menu ?>/<?= $data->foto_menu ?>" class="btn btn-danger" role="button">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
    <!-- Page -->
    <div class="container">
        <?php echo $pagination ?>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>