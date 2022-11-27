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
    <div class="card">
        <div class="container card-header">
<header>
        <h3>ORDER KAOS SABLON</h3>
    </header>
    </div>
    <div class="container card-body">
<section class="pesan">
    <form action="includes/edit-pesan.inc.php" method="POST">
        <fieldset>

        <input type="hidden" name="id" value="<?php echo $result['psn_id']; ?>" />
        
        <div class="input-group mb-2">
            <label class="input-group-text" for="name">Nama Pemesan: </label>
            <input type="text" name="name" class="baju" placeholder="" value="<?php echo $result['psn_nama'] ?>" disabled />
            <label for="name">Pribadi / Komunitas / Perusahaan</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="baju">Jenis Pakaian: </label>
            <?php $baju = $result['psn_baju']; ?>
            <select name="baju" class="baju">
                <option <?php echo ($baju == 'Kaos Kerah Polo') ? "selected" : "" ?>>Kaos Kerah Polo</option>
                <option <?php echo ($baju == 'Kaos Oblong') ? "selected" : "" ?>>Kaos Oblong</option>
                <option <?php echo ($baju == 'Kemeja Pendek') ? "selected" : "" ?>>Kemeja Pendek</option>
                <option <?php echo ($baju == 'Kemeja Panjang') ? "selected" : "" ?>>Kemeja Panjang</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="warna" >Warna Pakaian: </label>
            <?php $warna = $result['psn_warna']; ?>
            <label><input type="radio" name="warna" value="hitam" <?php echo ($warna == 'hitam') ? "checked" : "" ?>> Hitam</label>
            <label><input type="radio" name="warna" value="putih" <?php echo ($warna == 'putih') ? "checked" : "" ?>> Putih</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jenis" value="jenis">Jenis Pakaian: </label>
            <?php $jenis = $result['psn_jenis']; ?>
            <select name="jenis">
                <option <?php echo ($jenis == '20s') ? "selected" : "" ?>>20s</option>
                <option <?php echo ($jenis == '24s') ? "selected" : "" ?>>24s</option>
                <option <?php echo ($jenis == '30s') ? "selected" : "" ?>>30s</option>
                <option <?php echo ($jenis == '32s') ? "selected" : "" ?>>32s</option>
                <option <?php echo ($jenis == '40s') ? "selected" : "" ?>>40s</option>
            </select>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="ukuran" value="ukuran">Ukuran: </label>
            <?php $ukuran = $result['psn_ukuran']; ?>
            <label><input type="radio" name="ukuran" value="s" <?php echo ($ukuran == 's') ? "checked" : "" ?>> S</label>
            <label><input type="radio" name="ukuran" value="m" <?php echo ($ukuran == 'm') ? "checked" : "" ?>> M</label>
            <label><input type="radio" name="ukuran" value="l" <?php echo ($ukuran == 'l') ? "checked" : "" ?>> L</label>
            <label><input type="radio" name="ukuran" value="xl" <?php echo ($ukuran == 'xl') ? "checked" : "" ?>> XL</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="desain">Desain Gambar </label>
            <input type="text" name="desain" value ="<?php echo $result['psn_desain'] ?>" placeholder="" />
            <label for="desain">Ukuran file minimal 1mb dengan jenis file .png </label>
        </div>
            <form action="includes/upload.inc.php" method="POST" enctype="multipart/for-data">
                    <input type="file" name="file">
                    <button type="upload" name="submit">upload</button>
            </form>
        <div class="input-group mb-2">
            <label class="input-group mb-2" for="posisi">Posisi Desain: </label>
            <?php $posisi = $result['psn_posisi']; ?>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'depanatas') ? "checked" : "" ?> value="depanatas"> Depan Atas</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'depankiriatas') ? "checked" : "" ?> value="depankiriatas"> Depan Kiri Bawah</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'depankananaatas') ? "checked" : "" ?> value="depankananaatas"> Depan Kanan Atas</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'depantengah') ? "checked" : "" ?> value="depantengah"> Depan Tengah</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'depanbawah') ? "checked" : "" ?> value="depanbawah"> Depan Bawah</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'belakangatas') ? "checked" : "" ?> value="belakangatas"> Belakang Atas</label>
            <label><input type="radio" name="posisi" <?php echo ($posisi == 'belakangtengah') ? "checked" : "" ?> value="belakangtengah"> Belakang Tengah</label>
        </div>
        <div class="input-group mb-2">
            <label class="input-group-text" for="jumlah">Jumlah :</label>
            <input type="text" name="jumlah" value="<?php echo $result['psn_jumlah'] ?>" placeholder="perlusin" />
            <label for="jumlah">1 Lusin sama dengan 12 pics</label>
        <div class="input-group mb-2">
            <label class="input-group-text" for="tanggal">Tanggal Anda Memesan :</label>
            <input type="date" id="tanggal" value="tanggal" name="tanggal" />
        </div>
        <div class="form-group">
            <input type="submit" value="pesan" name="simpan" />
        </div>
        <td></td>
        </fieldset>
    </form>
    </div>
    </div>
    <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>PESANAN SUDAH DIEDIT</p>";
                    }
                    
                }
            ?>
</section>
</body>
</html>