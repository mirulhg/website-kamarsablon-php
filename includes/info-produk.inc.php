<?php

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$sql    = "SELECT * FROM tbl_produk ORDER BY prd_id DESC;";
$query  = mysqli_query($conn, $sql);
while ($result = mysqli_fetch_assoc($query)) {
    $id      = $result['prd_id'];

    $polos20s     = $result['prd_polos_s20'];
    $polos24s     = $result['prd_polos_s24'];
    $polos30s     = $result['prd_polos_s30'];
    $polos32s     = $result['prd_polos_s32'];
    $polos40s     = $result['prd_polos_s40'];
    
    $kemeja20s     = $result['prd_kemeja_s20'];
    $kemeja24s     = $result['prd_kemeja_s24'];
    $kemeja30s     = $result['prd_kemeja_s30'];
    $kemeja32s     = $result['prd_kemeja_s32'];
    $kemeja40s     = $result['prd_kemeja_s40'];
    
    $sweater20s     = $result['prd_sweater_s20'];
    $sweater24s     = $result['prd_sweater_s24'];
    $sweater30s     = $result['prd_sweater_s30'];
    $sweater32s     = $result['prd_sweater_s32'];
    $sweater40s     = $result['prd_sweater_s40'];

    
    $hitam      = $result['prd_hitam'];
    $putih      = $result['prd_putih'];
    $merah      = $result['prd_merah'];
    $biru       = $result['prd_biru'];
    $hijau      = $result['prd_hijau'];
    $kuning     = $result['prd_kuning'];
    $coklat     = $result['prd_coklat'];
    $abu        = $result['prd_abu'];
}