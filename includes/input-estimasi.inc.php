<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST["simpan"])) {

    $id1        = $_POST["id1"];
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


    $sql1   ="INSERT INTO tbl_status (sts_nama, sts_date1, sts_bahan, sts_desain, sts_ukuran, sts_potong, sts_sablon, sts_jahit, sts_finish, sts_pack, sts_date2, sts_status)
            VALUES ('$nama', '$date1', '$bahan', '$desain', '$ukuran', '$potong', '$sablon', '$jahit', '$finishing', '$packaging', '$date2', '$status')";
    $query1 = mysqli_query($conn, $sql1);

    if ($query1) {
        header('Location: ../info-estimasi2.php');
    } else {
        die ('gagal menyimpan perubahan');
    }

} else {
    die ('Akses dilarang');
}