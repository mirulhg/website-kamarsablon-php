<?php
/** membuat koneksi ke database */
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "dbsablon";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}