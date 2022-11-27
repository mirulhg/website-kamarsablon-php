<?php 
include_once 'dbh.inc.php';


if (isset($_GET['file_id'])) {
    $id  = $_GET['file_id'];


    $sql        = "SELECT * FROM tbl_pesanan WHERE psn_id=$id";
    $result     = mysqli_query($conn, $sql);

    $file       = mysqli_fetch_assoc($result);
    $filepath   = 'uploads/' . $file['psn_desain'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Dsiposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['psn_desain']));
        readfile('uploads/' . $file['psn_desain']);

        exit;
    }
}