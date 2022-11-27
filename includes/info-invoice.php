<?php

include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';

$id = $_GET['id'];

$sql    = "SELECT FROM tbl_invoice WHERE inv_id=$id";
$query  = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
}
