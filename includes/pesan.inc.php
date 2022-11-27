<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["submit"])) {
    
    $name       = $_POST["name"];
    $baju       = $_POST["baju"];
    $warna      = $_POST["warna"];
    $jenis      = $_POST["jenis"];
    $ukuran     = $_POST["ukuran"];
    $desain     = $_POST["desain"];
    $posisi     = $_POST["posisi"];
    $jumlah     = $_POST["jumlah"];
    $tanggal    = $_POST["tanggal"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputPesan($name, $baju, $warna, $jenis, $ukuran, $desain, $posisi, $jumlah, $tanggal) !== false) {
        header ("location: ../pesan.php?error=emptyinput");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    } createPesan($conn, $name, $baju, $warna, $jenis, $ukuran, $desain, $posisi, $jumlah, $tanggal);
}
else {
    header("location: ../home-user.php");
}