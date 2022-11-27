<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

        // memberi pesan error
        if (emptyInputLogin($username, $pwd) !== false) {
            echo "<script>alert('Silahkan Isi Semua Data!');
                    document.location.href='../login.php';
                </script>";
            // exit untuk memberhentikan script jika terjadi error
            exit();
        }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../home-user.php");
    exit();
}