<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include_once 'includes/dbh.inc.php';

if (!isset($_GET['id'])) {
    header('Location: daftar-pesan.php');

}

$id = $_GET['id'];

$sql = "SELECT * FROM tbl_pesanan WHERE psn_id=$id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
}


?>

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
    
    include 'sidebar-index1.php';
    
    ?>
<div class="container card card-header">
    <header>
        <h3>ORDER KAOS SABLON</h3>
    </header>
</div>
<div class="container card card-body">
    <section class="pesan">
        <form action="includes/edit-pesan.inc.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $result['psn_id']; ?>" />
        <input type="hidden" name="desain-lama" value="<?php echo $result['psn_desain']; ?>" />
        <div class="input-group mb-2 ">
            <label class="input-group-text" for="name">Nama Pemesan : </label>
            <input type="text" name="name" class="baju" placeholder=" " value="<?php echo $result['psn_nama'] ?>" />
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="baju">Jenis Pakaian: </label>
            <?php $baju = $result['psn_baju']; ?>
            <select name="baju" class="baju">
                <option class="kolom" <?php echo ($baju == 'Kaos Polos') ? "selected" : "" ?>>Kaos Polos</option>
                <option class="kolom" <?php echo ($baju == 'Kemeja') ? "selected" : "" ?>>Kemeja </option>
                <option class="kolom" <?php echo ($baju == 'Sweater') ? "selected" : "" ?>>Sweater</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="warna">Warna Pakaian: </label>
            <?php $warna = $result['psn_warna']; ?>
            <label><input type="radio" name="warna" value="Hitam" <?php echo ($warna == 'Hitam') ? "checked" : "" ?>> Hitam</label>
            <label><input type="radio" name="warna" value="Putih" <?php echo ($warna == 'Putih') ? "checked" : "" ?>> Putih</label>
            <label><input type="radio" name="warna" value="Merah" <?php echo ($warna == 'Merah') ? "checked" : "" ?>> Merah</label>
            <label><input type="radio" name="warna" value="Biru" <?php echo ($warna == 'Biru') ? "checked" : "" ?>> Biru</label>
            <label><input type="radio" name="warna" value="Hijau" <?php echo ($warna == 'Hijau') ? "checked" : "" ?>> Hijau</label>
            <label><input type="radio" name="warna" value="Kuning" <?php echo ($warna == 'Kuning') ? "checked" : "" ?>> Kuning</label>
            <label><input type="radio" name="warna" value="Coklat" <?php echo ($warna == 'Coklat') ? "checked" : "" ?>> Coklat</label>
            <label><input type="radio" name="warna" value="Abu" <?php echo ($warna == 'Abu') ? "checked" : "" ?>> Abu</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jenis">Jenis Pakaian: </label>
            <?php $jenis = $result['psn_jenis']; ?>
            <select name="jenis" class="baju">
                <option <?php echo ($jenis == '20s') ? "selected" : "" ?>>20s</option>
                <option <?php echo ($jenis == '24s') ? "selected" : "" ?>>24s</option>
                <option <?php echo ($jenis == '30s') ? "selected" : "" ?>>30s</option>
                <option <?php echo ($jenis == '32s') ? "selected" : "" ?>>32s</option>
                <option <?php echo ($jenis == '40s') ? "selected" : "" ?>>40s</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="ukuran">Ukuran: </label>
            <?php $ukuran = $result['psn_ukuran']; ?>
            <label><input type="radio" name="ukuran" value="S" <?php echo ($ukuran == 'S') ? "checked" : "" ?>> S</label>
            <label><input type="radio" name="ukuran" value="M" <?php echo ($ukuran == 'M') ? "checked" : "" ?>> M</label>
            <label><input type="radio" name="ukuran" value="L" <?php echo ($ukuran == 'L') ? "checked" : "" ?>> L</label>
            <label><input type="radio" name="ukuran" value="XL" <?php echo ($ukuran == 'XL') ? "checked" : "" ?>> XL</label>
        </div>
        <div class="input-group mb-2">
            
                <input class="up mb-2" type="file" name="desain" value="<?php echo $result['psn_desain']; ?>" >
                <label class="input-group-text" for="desain">Ukuran file minimal 1mb dengan jenis file .png </label>
                <img    src="uploads/<?php echo $result['psn_desain']; ?>" class="show-gambar">
        
                
            </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" value="<?php echo $result['psn_jumlah'] ?>" placeholder="perlusin" />
            <label class="input-group-text" for="jumlah">Lusin</label>
            </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="tanggal">Tanggal Anda Memesan :</label>
            <input type="date" id="tanggal" value="<?php echo $result['psn_tanggal']; ?>" name="tanggal" />
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
                        echo "<script>alert('ISI SEMUA DATA!');</script>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<script>alert('PESANAN SUDAH DISUBMIT');</script>";
                    }
                    
                }
            ?>
</div>
</section>
</body>
</html>