<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["submit"])) {
    
    $adusername   = $_POST["adusername"];
    $adpwd        = $_POST["adpwd"];
    $adpwdRepeat  = $_POST["adpwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // memberi pesan error
    if (emptyInputAdmin($adusername, $adpwd) !== false) {
        header ("location: ../daftar-admin.php?error=emptyinput");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    // memberi pesan error 1 per satu pada kolom inputan register   
    if (invalidAdmin($adusername) !== false) {
        header ("location: ../daftar-admin.php?error=invalidadmin");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    if (adpwdMatch($adpwd, $adpwdRepeat) !== false) {
        header ("location: ../daftar-admin.php?error=passworddontmatch");
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    /** if (invalidcheck($check) !== false) {
        header ("location: ../signup.php?error=invalidcheck");
        //
        exit();
    }
    */
    // ketika user tidak melakukan kesalahan pada pengisian data, maka berhasil registrasi
    createAdmin($conn, $adusername, $adpwd);

} else {
    header("location: ../index.php");
}