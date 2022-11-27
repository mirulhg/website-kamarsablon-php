<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_POST["submit"])) {
    
    $name       = $_POST["name"];
    $email      = $_POST["email"];
    $username   = $_POST["username"];
    $wa         = $_POST["wa"];
    $alamat     = $_POST["alamat"];
    $pwd        = $_POST["pwd"];
    $pwdRepeat  = $_POST["pwdRepeat"];



    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // memberi pesan error
    if (emptyInputSignup($name, $email, $username, $wa, $alamat, $pwd, $pwdRepeat) !== false) {
        
        echo "<script>alert('Isi Semua Data!!!');
                document.location.href='../signup.php';
        </script>";
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    // memberi pesan error 1 per satu pada kolom inputan register   
    if (invalidUid($username) !== false) {
        echo "<script>alert('Gunakan Username Lain!!!');
                document.location.href='../signup.php';
        </script>";
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    if (invalidEmail($email) !== false) {
        echo "<script>alert('Yang Di Isi Bukan Email!!!');
                document.location.href='../signup.php';
        </script>";
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        echo "<script>alert('Pastikan Password Dengan Konfirmasi Password!!!');
                document.location.href='../signup.php';
        </script>";
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    /** if (invalidcheck($check) !== false) {
        header ("location: ../signup.php?error=invalidcheck");
        //
        exit();
    }
    */
    if (uidExists($conn, $username, $email) !== false) {
        echo "<script>alert('Username / Email sudah ada!!!');
                document.location.href='../signup.php';
        </script>";
        // exit untuk memberhentikan script jika terjadi error
        exit();
    }
    // ketika user tidak melakukan kesalahan pada pengisian data, maka berhasil registrasi
    createUser($conn, $name, $email, $username, $wa, $alamat, $pwd);

} else {
    header("location: ../index.php");
}