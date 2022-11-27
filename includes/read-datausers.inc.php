<?php

include_once 'dbh.inc.php';

$sql = "SELECT * FROM tbl_pesanan (psn_nama, psn_baju, psn_warna, psn_jenis, psn_ukuran, psn_desain, psn_posisi, psn_jumlah, psn_tanggal) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCehck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['psn_nama'] . "<br>";
    }
}