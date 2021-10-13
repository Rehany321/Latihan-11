<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BARANG</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">
                    <form action="action.php" method="POST">
                        <div class="form-group mb-2 py-2">
                            <label for="id_barang">ID Barang</label>
                            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="ID Barang" require />
                        </div>
                        <div class="form-group mb-2 py-2">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" />
                        </div>
                        <div class="form-group mb-2 py-2">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="number" class="form-control" name="harga_barang" id="harga_barang" placeholder="Harga Barang" />
                        </div>
                        <input name="submit" type="submit" value="kirim" class="btn btn-primary">
                    </form>

                </div>


            </div>
        </div>
    </div>


</body>

</html>