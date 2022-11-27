<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["simpan"])) {
    
    $id         = $_POST["id"];
    $nama       = $_POST["nama"];
    $date1      = $_POST["date1"];
    $bahan      = $_POST["bahan"];
    $desain     = $_POST["desain"];
    $ukuran     = $_POST["ukuran"];
    $potong     = $_POST["potong"];
    $sablon     = $_POST["sablon"];
    $jahit      = $_POST["jahit"];
    $finishing  = $_POST["finishing"];
    $packaging  = $_POST["packaging"];
    $date2      = $_POST["date2"];
    $status     = $_POST["status"];

    $sql1   ="UPDATE tbl_status SET sts_nama='$nama', sts_date1='$date1', sts_bahan='$bahan', sts_desain='$desain', sts_ukuran='$ukuran', sts_potong='$potong', sts_sablon='$sablon', sts_jahit='$jahit', sts_finish='$finishing', sts_pack='$packaging', sts_date2='$date2', sts_status='$status' WHERE sts_id='$id';";
    $query1 = mysqli_query($conn, $sql1);

    if ($query1) {
        header('Location: ../info-estimasi2.php');
    } else {
        die ('gagal menyimpan perubahan');
    }

} else {
    die ('Akses dilarang');
}