<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_POST["submit"])) {

    $name       = $_POST["name"];
    $baju       = $_POST["baju"];
    $warna      = $_POST["warna"];
    $jenis      = $_POST["jenis"];
    $ukuran     = $_POST["ukuran"];
    // $desain     = $_POST["desain"];
    $jumlah     = $_POST["jumlah"];
    $tanggal    = $_POST["tanggal"];

    $desain = upload();
    if (!$desain) {
        return false;
    }

    $sql    = "INSERT INTO tbl_pesanan (psn_nama, psn_baju, psn_warna, psn_jenis, psn_ukuran, psn_desain, psn_jumlah, psn_tanggal)
                VALUES ('$name', '$baju', '$warna', '$jenis', '$ukuran', '$desain', '$jumlah', '$tanggal');";
    $query  = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
                alert('Berhasil Menambahkan Pesan Silahkan Cek Email untuk menerima invoice dari Kamar Sablon');
                document.location.href = '../home-admin.php';
        </script>";
    } else {
        die ('gagal menyimpan perubahan');
    }

} else {
    die('Akses dilarang');
}