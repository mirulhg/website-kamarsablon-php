<?php 

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (isset($_POST['invoice_btn'])) {
    
    $id             = $_POST["id"];
    $nama           = $_POST["nama"];
    $alamat         = $_POST["alamat"];
    $itemId         = $_POST['productCode'];
    $itemName       = $_POST['productName'];
    $quantity       = $_POST['quantity'];
    $price          = $_POST['price'];
    $total          = $_POST['total'];
    $subTotal       = $_POST["subTotal"];
    $taxAmount      = $_POST["taxAmount"];
    $totalRate      = $_POST["totalRate"];
    $taxRate        = $_POST["taxRate"];
    $totalAftertax  = $_POST["totalAftertax"];
    $amountPaid     = $_POST["amountPaid"];
    $amountDue      = $_POST["amountDue"];
    $note           = $_POST["notes"];

    $sql    = "INSERT INTO tbl_invoice (inv_nama, inv_alamat, inv_itemId, inv_produk, inv_quantity, inv_price, inv_total, inv_subTotal, inv_taxAmount, inv_totalRate, inv_taxRate, inv_totalAftertax, inv_amountPaid, inv_amountDue, inv_note)
                VALUES ('$nama', '$alamat', '$itemId','$itemName', '$quantity', '$price', '$total', '$subTotal', '$taxAmount', '$totalRate', '$taxRate', '$totalAftertax', '$amountPaid', '$amountDue', '$note');";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../invoice-list.php');
    } else {
        die ('gagal menyimpan perubahan');
    }

} else {
    die ('Akses dilarang');
}