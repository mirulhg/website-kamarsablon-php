<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once 'dbh.inc.php';
require_once 'functions.inc.php';



if (isset($_POST["submit"])) {

    $id         = $_POST["id"];
    $baju       = $_POST["baju"];
    $warna      = $_POST["warna"];
    $jenis      = $_POST["jenis"];
    $ukuran     = $_POST["ukuran"];
    // $desain     = $_POST["desain"];
    $jumlah     = $_POST["jumlah"];
    $tanggal    = $_POST["tanggal"];
    $desainLama = $_POST["desain-lama"];

    // check user pilih gambar atau tidak
    if ($_FILES['desain']['error'] === 4) {
        $desain = $desainLama;
    } else {
        $desain = upload();
    }

    $sql = "UPDATE tbl_pengguna SET psn_baju='$baju', psn_warna='$warna', psn_jenis='$jenis', psn_ukuran='$ukuran', psn_desain='$desain', psn_jumlah='$jumlah', psn_tanggal='$tanggal' WHERE psn_id='$id';";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Berhasil Update Data Pesanan');
            document.location.href='../daftar-pesan.php';
            </script>";
    } else {
        die ('gagal menyimpan perubahan');
    }
    
    
    
} else {
    die('Akses dilarang');
}




    /**     if (emptyEditPesan($name, $baju, $warna, $jenis, $ukuran, $desain, $posisi, $jumlah, $tanggal) !== false) {
    header ("location: ../pesan.php?error=emptyinput");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    } editPesan($conn, $name, $baju, $warna, $jenis, $ukuran, $desain, $posisi, $jumlah, $tanggal);
}
else {
    header("location: ../home-user.php");
*/
