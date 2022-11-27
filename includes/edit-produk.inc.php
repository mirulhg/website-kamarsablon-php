<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include_once 'dbh.inc.php';

if (isset($_POST["simpan"])) {

    $id           = $_POST['id'];

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

    $sql    = "UPDATE tbl_produk SET prd_polos_s20='$polos20s', prd_polos_s24='$polos24s', prd_polos_s30='$polos30s', prd_polos_s32='$polos32s', prd_polos_s40='$polos40s', prd_kemeja_s20='$kemeja20s', prd_kemeja_s24='$kemeja24s', prd_kemeja_s30='$kemeja30s', prd_kemeja_s32='$kemeja32s', prd_kemeja_s40='$kemeja40s', prd_sweater_s20='$sweater20s', prd_sweater_s24='$sweater24s', prd_sweater_s30='$sweater30s', prd_sweater_s32='$sweater32s', prd_sweater_s40='$sweater40s', prd_hitam='$hitam',prd_putih='$putih', prd_merah='$merah', prd_biru='$biru', prd_hijau='$hijau', prd_kuning='$kuning', prd_coklat='$coklat', prd_abu='$abu' WHERE prd_id='$id';";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../info-produk2.php');
    } else {
        die ('gagal menyimpan perubahan');
    }

} else {
    die('Akses ditolak');
}