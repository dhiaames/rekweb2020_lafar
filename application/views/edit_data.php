<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/img/favicon-lafar.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">
    <title>Edit Menu</title>
</head>

<body style="background-color:lightsteelblue;">
    <div class="container mt-5">
        <div class="d-flex justify-content-center ">
            <div class="card">
                <div class="card-header bg-dark text-warning">
                    <h3>Edit Menu</h3>
                </div>
                <!-- Form Edit -->
                <div class="card-body">
                    <form action="<?= base_url() ?>index.php/home/updatedata" method="post" enctype="multipart/form-data">
                        <div class="input-group form-group">
                            <!-- Nama -->
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-signature"></i></span>
                            </div>
                            <input type="text" name="nama_menu" value="<?= $data->nama_menu ?>">
                        </div>
                        <!-- Harga -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                            </div>
                            <input type="text" name="harga_menu" value="<?= $data->harga_menu ?>"><br><br>
                        </div>
                        <!-- Foto -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                            <input type="file" name="fotopost">
                            <img src="<?= base_url() ?>assets/img/menu/<?= $data->foto_menu ?>" alt="foto_menu" width="100">
                        </div>
                        <!-- Tombol Submit -->
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-warning">Edit Menu</button>
                        </div>
                        <!-- file lama -->
                        <input type="hidden" name="filelama" value="<?= $data->foto_menu ?>">
                        <!-- ID -->
                        <input type="hidden" name="id_menu" value="<?= $data->id_menu ?>">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>