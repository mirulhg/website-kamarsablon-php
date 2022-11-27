<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style-pesan.css">
</head>
<body>
    <?php 

    include_once 'sidebar-index1.php';

    ?>
<div class="container card card-header">
<header>
        <h3>ORDER KAOS SABLON</h3>
    </header>
</div>
<input type="hidden" name="<?php echo $result['usersId']; ?>">
<div class="container card card-body">
<section class="pesan">
    <form action="includes/pesan.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        <div class="input-group mb-2 ">
            <label class="input-group-text" for="name" >Nama Pemesan : </label>
            <input type="text" name="name" class="baju" placeholder="" required />
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="baju">Jenis Pakaian: </label>
            <select name="baju" class="baju"  required>
                <option class="kolom" >Kaos Polos</option>
                <option class="kolom" >Kemeja</option>
                <option class="kolom" >Sweater</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="warna" required>Warna Pakaian: </label>
            <label><input type="radio" name="warna" value="Hitam"> Hitam</label>
            <label><input type="radio" name="warna" value="Putih"> Putih</label>
            <label><input type="radio" name="warna" value="Merah"> Merah</label>
            <label><input type="radio" name="warna" value="Biru"> Biru</label>
            <label><input type="radio" name="warna" value="Hijau"> Hijau</label>
            <label><input type="radio" name="warna" value="Kuning"> Kuning</label>
            <label><input type="radio" name="warna" value="Coklat"> Coklat</label>
            <label><input type="radio" name="warna" value="Abu"> Abu</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jenis">Jenis Pakaian: </label>
            <select name="jenis" class="baju" required>
                <option>20s</option>
                <option>24s</option>
                <option>30s</option>
                <option>32s</option>
                <option>40s</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="ukuran" required>Ukuran: </label>
            <label><input type="radio" name="ukuran" value="S"> S </label>
            <label><input type="radio" name="ukuran" value="M"> M </label>
            <label><input type="radio" name="ukuran" value="L"> L </label>
            <label><input type="radio" name="ukuran" value="XL"> XL </label>
        </div>
        <div class="input-group mb-2">
                <input class="up mb-2" type="file" name="desain">
                <label class="input-group-text" for="desain">Ukuran file minimal 1mb dengan jenis file .png </label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" placeholder="perlusin" required />
            <label class="input-group-text" for="jumlah">Lusin</label>
            </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="tanggal">Tanggal Anda Memesan :</label>
            <input type="date" id=tanggal name="tanggal" required />
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" >Pesan</button>
        </div>
        </fieldset>
    </form>
    </div>
<div class="container">
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<script>alert('Fill in all fields!')</script>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<script>alert('PESANAN SUDAH DISUBMIT')</script>";
                    }
                    
                }
            ?>
</div>
</section>
</body>
</html>