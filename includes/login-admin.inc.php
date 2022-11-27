<?php

if (isset($_POST["submit"])) {
    
    $adusername = $_POST["aduid"];
    $adpwd = $_POST["adpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    
        // memberi pesan error
        if (emptyInputAdmin($adusername, $adpwd) !== false) {
            echo "<script>alert('Login Gagal!')
                        document.location.href='../login-admin.php';
                    </script>";
            // exit untuk memberhentikan script jika terjadi error
            exit();
        }

    loginAdmin($conn, $adusername, $adpwd);
}
else {
    header("location: ../home-admin.php");
    exit();
}