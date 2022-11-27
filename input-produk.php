<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Informasi Produk</title>
    <!-- GET BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <form action="includes/input-produk.inc.php" method="POST">
    <div class="card card-header container">
        <header class="d-flex justify-content-center">INPUT DATA INFORMASI PRODUK</header>
    </div>
    <div class="card card-body container">
    <div class="container-sm btn-group mb-3 d-flex justify-content-center" role="group">
        <a href="info-produk.php"><button name="simpan3" type="submit" class="btn btn-primary">SAVE</button></a>
        <a href=""><button type="button" class="btn btn-warning">Edit</button></a>
        <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
        </div>
    <div class="card card-body container container-fluid shadow-3 mb-5 bg-body rounded col-md-6 ">
        <h6>Jenis Baju</h6>
        <label for="polo" class="form-label">Kaos Kerah Polo</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="polo" id="btnradio17" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio17">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="polo" id="btnradio18" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio18">Tersedia</label>
        </div>

        <label for="oblong" class="form-label">Kaos Oblong</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="oblong" id="btnradio19" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio19">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="oblong" id="btnradio20" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio20">Tersedia</label>
        </div>

        <label for="pendek" class="form-label">Kemeja Pendek</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="pendek" id="btnradio21" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio21">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="pendek" id="btnradio22" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio22">Tersedia</label>
        </div>

        <label for="panjang" class="form-label">Kemeja Panjang</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="panjang" id="btnradio23" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio23">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="panjang" id="btnradio24" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio24">Tersedia</label>
        </div>
    </div>
    <div class="card card-body container container-fluid shadow-3 mb-5 bg-body rounded col-md-6">
        <h6>Ketebalan Baju</h6>
        <label for="20s" class="form-label">20s</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="20s" id="btnradio25" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio25">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="20s" id="btnradio26" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio26">Tersedia</label>
        </div>

        <label for="24s" class="form-label">24s</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="24s" id="btnradio27" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio27">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="24s" id="btnradio28" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio28">Tersedia</label>
        </div>

        <label for="30s" class="form-label">30s</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="30s" id="btnradio28" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio29">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="30s" id="btnradio29" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio29">Tersedia</label>

        </div>

        <label for="32s" class="form-label">32s</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="32s" id="btnradio30" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio30">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="32s" id="btnradio31" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio31">Tersedia</label>

        </div>

        <label for="40s" class="form-label">40s</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="40s" id="btnradio32" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio32">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="40s" id="btnradio33" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio33">Tersedia</label>

        </div>
    </div>
    <div class="card card-body container container-fluid shadow-3 mb-5 bg-body rounded col-md-6">
        <h6>WARNA</h6>
        <label for="hitam" class="form-label">HITAM</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="hitam" id="btnradio1" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="hitam" id="btnradio2" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio2">Tersedia</label>
        </div>

        <label for="putih" class="form-label">PUTIH</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="putih" id="btnradio3" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio3">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="putih" id="btnradio4" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio4">Tersedia</label>
        </div>

        <label for="merah" class="form-label">MERAH</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="merah" id="btnradio5" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio5">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="merah" id="btnradio6" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio6">Tersedia</label>
        </div>

        <label for="biru" class="form-label">BIRU</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="biru" id="btnradio7" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio7">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="biru" id="btnradio8" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio8">Tersedia</label>
        </div>

        <label for="hijau" class="form-label">HIJAU</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="hijau" id="btnradio9" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio9">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="hijau" id="btnradio10" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio10">Tersedia</label>
        </div>

        <label for="kuning" class="form-label">KUNING</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="kuning" id="btnradio11" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio11">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="kuning" id="btnradio12" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio12">Tersedia</label>
        </div>

        <label for="coklat" class="form-label">COKLAT</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="coklat" id="btnradio13" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio13">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="coklat" id="btnradio14" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio14">Tersedia</label>
        </div>
        
        <label for="abu" class="form-label">ABU</label>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="abu" id="btnradio15" autocomplete="off" value="Tidak Tersedia" checked>
            <label class="btn btn-outline-primary" for="btnradio15">Tidak Tersedia</label>

            <input type="radio" class="btn-check" name="abu" id="btnradio16" autocomplete="off" value="Tersedia">
            <label class="btn btn-outline-primary" for="btnradio16">Tersedia</label>
        </div>
    </div>
    </div>
    <div class="container">
    <?php
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>TIDAK TERSIMPAN</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>TERSIMPAN!</p>";
                    }
                    
                }
    ?>
    </div>
    </form>
</body>
</html>