<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["submit"])) {
    
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

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if (emptyInputEstimasi($date1, $bahan, $desain, $ukuran, $potong, $sablon, $jahit, $finishing, $packaging,  $date2, $status) !== false) {
        header ("location: ../estimasi.php?error=emptyinput");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    } createEstimasi($conn, $date1, $bahan, $desain, $ukuran, $potong, $sablon, $jahit, $finishing, $packaging, $date2, $status);
} else {
    header("location: ../info-estimasi.php");
}
