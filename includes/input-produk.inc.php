<?php

include_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["simpan3"])) {
    
    $s20  = $_POST["20s"];
    $s24  = $_POST["24s"];
    $s30  = $_POST["30s"];
    $s32  = $_POST["32s"];
    $s40  = $_POST["40s"];

    $polo       = $_POST["polo"];
    $oblong     = $_POST["oblong"];
    $pendek     = $_POST["pendek"];
    $panjang    = $_POST["panjang"];

    $hitam  = $_POST["hitam"];
    $putih  = $_POST["putih"];
    $merah  = $_POST["merah"];
    $biru   = $_POST["biru"];
    $hijau  = $_POST["hijau"];
    $kuning = $_POST["kuning"];
    $coklat = $_POST["coklat"];
    $abu    = $_POST["abu"];

    if (emptyInputProduk($s20, $s24, $s30, $s32, $s40, $polo, $oblong, $pendek, $panjang, $hitam, $putih, $merah, $biru, $hijau, $kuning, $coklat, $abu) !== false) {
        header ("location: ../info-produk.php?error=emptyinput");

        exit();
    } createProduk($conn, $s20, $s24, $s30, $s32, $s40, $polo, $oblong, $pendek, $panjang, $hitam, $putih, $merah, $biru, $hijau, $kuning, $coklat, $abu);

}
else {
    header("location: ../info-produk.php");
}