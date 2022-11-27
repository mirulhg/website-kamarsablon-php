<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require_once 'dbh.inc.php';

if (isset($_POST["simpan"])) {
    
    $polos20s     = $_POST['kaos20s'];
    $polos24s     = $_POST['kaos24s'];
    $polos30s     = $_POST['kaos30s'];
    $polos32s     = $_POST['kaos32s'];
    $polos40s     = $_POST['kaos40s'];
    
    $kemeja20s     = $_POST['kemeja20s'];
    $kemeja24s     = $_POST['kemeja24s'];
    $kemeja30s     = $_POST['kemeja30s'];
    $kemeja32s     = $_POST['kemeja32s'];
    $kemeja40s     = $_POST['kemeja40s'];
    
    $sweater20s     = $_POST['sweater20s'];
    $sweater24s     = $_POST['sweater24s'];
    $sweater30s     = $_POST['sweater30s'];
    $sweater32s     = $_POST['sweater32s'];
    $sweater40s     = $_POST['sweater40s'];

    $hitam      = $_POST['hitam'];
    $putih      = $_POST['putih'];
    $merah      = $_POST['merah'];
    $biru       = $_POST['biru'];
    $hijau      = $_POST['hijau'];
    $kuning     = $_POST['kuning'];
    $coklat     = $_POST['coklat'];
    $abu        = $_POST['abu'];

    $sql    = "INSERT INTO tbl_produk (
                prd_polos_s20, prd_polos_s24, prd_polos_s30, prd_polos_s32, prd_polos_s40, prd_kemeja_s20, prd_kemeja_s24, prd_kemeja_s30, prd_kemeja_s32, prd_kemeja_s40, prd_sweater_s20, prd_sweater_s24, prd_sweater_s30, prd_sweater_s32, prd_sweater_s40, prd_hitam, prd_putih, prd_merah, prd_biru, prd_hijau, prd_kuning, prd_coklat, prd_abu)
                VALUES('$polos20s', '$polos24s', '$polos30s', '$polos32s', '$polos40s', '$kemeja20s', '$kemeja24s', '$kemeja30s', '$kemeja32s', '$kemeja40s', '$sweater20s', '$sweater24s', '$sweater30s', '$sweater32s', '$sweater40s', '$hitam', '$putih', '$merah', '$biru', '$hijau', '$kuning', '$coklat', '$abu');";
    $query  = mysqli_query($conn, $sql);
    
    if ($query) {
        header("location: ../info-produk2.php");
    } else {
        die ('gagal menginsert data');
    }
} else {
    die("Akses dilarang");
}    