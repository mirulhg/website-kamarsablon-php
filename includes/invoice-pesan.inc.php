<?php
mysqli_report(MYSQLI_REPORT_ERROR) | (MYSQLI_REPORT_STRICT):

if (isset($_POST["submit"])) {
    $date       = $_POST["date"];
    $bayar      = $_POST["bayar"];
    $produk     = $_POST["produk"];
    $quantity   = $_POST["quantity"];
    $price      = $_POST["price"];
    $subtotal   = $_POST["subtotal"];
    $total      = $_POST["total"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputInv($date, $bayar, $produk, $quantity, $price, $subtotal, $total) !== false) {
        header ("location: ../invoice-pesan.php?error=emptyinput");
        exit();
    } createInvoice($conn, $date, $bayar, $produk, $quantity, $price, $subtotal, $total);
}
else {
    header("location: ../home-admin.php");
}