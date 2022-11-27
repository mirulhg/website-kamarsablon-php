<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style-inv-pesan.css">
    <title>Invoice</title>
</head>
<body>
    <form action="">
        <div class="card">
            <div class="card-header">
                <h3>INVOICE KAMAR SABLON</h3>
                <div class="button-group">
                    <button class="btn btn-secondary">Batal</button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group satu">
                    <label for="">Dari</label>
                    <p>
                        Kamar Sablon, Yogyakarta
                    </p>
                    <label for="">Untuk</label>
                    <input type="text">
                </div>
                <div class="form-group dua">
                    <label for="">Invoice ID</label>
                    <input type="text">

                    <label for="">Invoice Date</label>
                    <input type="text">
                </div>
                <div class="form-group tiga">
                    <h4>Produk</h4>
                    <label for="">Jenis Kaos</label>
                    <input type="text" name="" placeholder="">

                    <label for="">Ketebalan Kaos</label>
                    <input type="text" name="" placeholder="">

                    <label for="">Warna Kaos</label>
                    <input type="text" name="" placeholder="">

                    <label for="">Ukuran</label>
                    <input type="text" name="" placeholder="">
                    
                    <label for="">Lusin</label>
                    <input type="text" name="" placeholder="">
                </div>
                <div class="form-group empat">
                    <label for="">Sub Total</label>
                    <input type="text">
                    
                    <label for="">Total</label>
                    <input type="text">
                </div>
            </div>
            <div class="card-footer">
                <div class="button-group">
                    <button class="btn btn-primary">Simpan</button>
                    <button class="btn btn-warning">Edit</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>