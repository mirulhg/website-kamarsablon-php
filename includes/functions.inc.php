<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//membuat function jika true-false pada pemberi pesan error yang ada pada signup.includse.php
function emptyInputSignup($name, $email, $username, $wa, $alamat, $pwd, $pwdRepeat) {
    $result;
    // tanda "||" mendifinisikan or (atau) 
    // jika ada kesalahan pada pengisian register maka true (kembali pada penginputan ulang)
    if (empty($name) || empty($email) || empty($username) || empty($wa) || empty($alamat) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    // preg_match adalah parameter mencari kesamaan pada nilai, 
    //yang berarti jika ada kesamaan username maka username tidak bisa digunakan karena user lain sudah memiliknya
    // pada dalam bracket "[]" adalah mendeklarasikan semua nilai yang didalam nya dicari kesamaan nya, jika ada berarti tidak bisa digunakan
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    // memberi nilai inputan pada email bahwa yang diisi benar sebuah email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

// membuat function untuk menyamakan password (konfrim ulang password)
function pwdMatch($pwd, $pwdRepeat) {
    $result;
    // jika passowrd tidak sama dengan konfrim password
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

// membuat function bahwa user name atau email sudah ada
function uidExists($conn, $username, $email) {
    // memanggil data username pada database di table users
    // tanda petik koma pertam untuk menutup sql sedangkan yang kedua untuk functionnya
    $sql = "SELECT * FROM tbl_pengguna WHERE usersUid = ? OR usersEmail = ?;";
    // mensubmit kan data dengan menggunakan stmt yaitu statement
    // menggunakan stmt ini untuk mencegah data tidak dihancurkan oleh peretas, tujuan tersebut agar peretas bisa masuk melalui error tersebut
    $stmt = mysqli_stmt_init($conn);
    // ketika pengisian data gagal
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>alert('Coba Username Lain')
                    document.location.href='../signup.php';
                </script>";
        
        exit();
    }
    // jika pengisian data tidak gagal
    // maka data di bind
    // karena mempunyai 2 string maka ada variabel ss, jika cuma 1 brti s nya hanya 1 
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    // menjalankan statement
    mysqli_stmt_execute($stmt);

    // grab data atau mengambil data pada database
    $resultData = mysqli_stmt_get_result($stmt);

    // jika ada sebuah data yang diambil pada statement jika ada maka true, jika tidak maka false
    // function dibawah untuk mengarahkan user ke tampilan login jika user berhasil daftar dengan data yang benar
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    // menutup function stmt
    mysqli_stmt_close($stmt);
}

//membuat data users
function createUser($conn, $name, $email, $username, $wa, $alamat, $pwd) {
    // $sql = "INSERT INTO tbl_pengguna (usersName, usersEmail, usersUid, usersWa, usersAlamat, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
    // $query  = mysqli_query($conn, $sql);

    // // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // if ($query) {
    //     echo "<script>alert('Pendaftaran Berhasil Silahkan Login!);
    //             document.location.href='../index.php';
    //     </script>";
    //     exit();
    // } else {
    //     die ('Pendaftaran Gagal');
    // }
    
    $sql = "INSERT INTO tbl_pengguna (usersName, usersEmail, usersUid, usersWa, usersAlamat, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "<script>alert('Terjadi Kesalahan! STMT Error')
                    document.location.href='../login.php';
                </script>";
        exit();
    }

    // mengengkripsi password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //bind data sebelum masuk ke database
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $username, $wa, $alamat, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script>alert('Pendaftaran Berhasil Silahkan Login!')
                document.location.href='../index.php';
            </script>";
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result;
    // tanda "||" mendifinisikan or (atau) 
    // jika ada kesalahan pada pengisian register maka true (kembali pada penginputan ulang)
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

function adminExists($conn, $adusername) {
    // memanggil data username pada database di table users
    // tanda petik koma pertam untuk menutup sql sedangkan yang kedua untuk functionnya
    $sql = "SELECT * FROM tbl_admin WHERE admin_nama = ?;";
    // mensubmit kan data dengan menggunakan stmt yaitu statement
    // menggunakan stmt ini untuk mencegah data tidak dihancurkan oleh peretas, tujuan tersebut agar peretas bisa masuk melalui error tersebut
    $stmt = mysqli_stmt_init($conn);
    // ketika pengisian data gagal
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../login-admin.php?error=stmtfailed");
        exit();
    }
    // jika pengisian data tidak gagal
    // maka data di bind
    // karena mempunyai 2 string maka ada variabel ss, jika cuma 1 brti s nya hanya 1 
    mysqli_stmt_bind_param($stmt, "s", $adusername);
    // menjalankan statement
    mysqli_stmt_execute($stmt);

    // grab data atau mengambil data pada database
    $resultData = mysqli_stmt_get_result($stmt);

    // jika ada sebuah data yang diambil pada statement jika ada maka true, jika tidak maka false
    // function dibawah untuk mengarahkan user ke tampilan login jika user berhasil daftar dengan data yang benar
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    // menutup function stmt
    mysqli_stmt_close($stmt);
}

// membuat email dan username bisa dipakai untuk login
function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        echo "<script>alert('Login Gagal!')
                document.location.href='../login.php';
            </script>";
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        echo "<script>alert('Login Gagal!')
                document.location.hfref='../login.php';
            </script>";
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        echo "<script>alert('BERHASIL LOGIN!')
                document.location.href='../home-user.php';
            </script>";
        exit();
    }
}

function loginAdmin($conn, $adusername, $adpwd) {
    $adminExists = adminExists($conn, $adusername);

    if ($adminExists === false) {
        "<script>alert('Login Gagal!')
                document.location.href='../login-admin.php';
            </script>";
        exit();
    }

    $adpwdHashed = $adminExists["admin_password"];
    $checkPwd = password_verify($adpwd, $adpwdHashed);

    if ($checkPwd === false) {
        echo "<script>alert('Login Gagal!')
                    document.location.href='../login-admin.php';
                </script>";
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["admid"] = $adminExists["admin_id"];
        $_SESSION["aduid"] = $adminExists["admin_nama"];
        echo "<script>alert('BERHASIL LOGIN!')
                    document.location.href='../home-admin.php';
                </script>";
        exit();
    }
}

function emptyInputAdmin($adusername, $adpwd) {
    $result;
    // tanda "||" mendifinisikan or (atau) 
    // jika ada kesalahan pada pengisian register maka true (kembali pada penginputan ulang)
    if (empty($adusername) || empty($adpwd)) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

function createAdmin($conn, $adusername, $adpwd) {
    $sql = "INSERT INTO tbl_admin (admin_nama, admin_password) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        "<script>alert('Terjadi Kesalahan!')
                document.location.href='../daftar-admin.php';
            </script>";
        exit();
    }

    // mengengkripsi password
    $hashedPwd = password_hash($adpwd, PASSWORD_DEFAULT);

    //bind data sebelum masuk ke database
    mysqli_stmt_bind_param($stmt, "ss", $adusername, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../daftar-admin.php?error=none");
    exit();
}

function adpwdMatch($adpwd, $adpwdRepeat) {
    $result;
    // jika passowrd tidak sama dengan konfrim password
    if ($adpwd !== $adpwdRepeat) {
        $result = true;
    }
    // ketika tempat inputan tidak ada yang kosong (empty full)
    else {
        $result = false;
    }
    return $result;
}

function invalidAdmin($adusername) {
    $result;
    // preg_match adalah parameter mencari kesamaan pada nilai, 
    //yang berarti jika ada kesamaan username maka username tidak bisa digunakan karena user lain sudah memiliknya
    // pada dalam bracket "[]" adalah mendeklarasikan semua nilai yang didalam nya dicari kesamaan nya, jika ada berarti tidak bisa digunakan
    if (!preg_match("/^[a-zA-Z0-9]*$/", $adusername)) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function upload() {

    $namaFile   = $_FILES['desain']['name'];
    $ukuranFile = $_FILES['desain']['size'];
    $error      = $_FILES['desain']['error'];
    $tmpName    = $_FILES['desain']['tmp_name'];

    // cek error
    if ($error === 4) {
        echo "<script>alert('Pilih Gambar!');
                document.location.href = '../pesan.php';
            </script>";
        return false;
    }

    // cek file upload
    $ekstensiDesainValid = ['png'];
    $ekstensiDesain = explode('.', $namaFile);
    $ekstensiDesain = strtolower(end($ekstensiDesain));
    if (!in_array($ekstensiDesain, $ekstensiDesainValid)) {
        echo "<script>alert('Yang Di Upload Bukan Gambar jenis png, gambar harus tipe file png!');
                    document.location.href = '../pesan.php';
                </script>";
        return false;
    }

    // cek ukuran
    if ($ukuranFile < 100000) {
        echo "<script>alert('Ukuran File Terlalu Kecil, Pastikan File lebih dari 1mb!');
                document.location.href = '../pesan.php';
                </script>";
        return false;
    }
    
    // ganti nama agar tidak sama
    $namaFileNew = uniqid();
    $namaFileNew .= '-user-desain';
    $namaFileNew .= '.';
    $namaFileNew .= $ekstensiDesain;

    // jika berhasil di upload
    move_uploaded_file($tmpName, '../uploads/' . $namaFileNew);

    return $namaFileNew;
}

function uploadUser() {

    $namaFile   = $_FILES['desain']['name'];
    $ukuranFile = $_FILES['desain']['size'];
    $error      = $_FILES['desain']['error'];
    $tmpName    = $_FILES['desain']['tmp_name'];

    // cek error
    if ($error === 4) {
        echo "<script>alert('Pilih Gambar!');
                document.location.href = '../pesan-user.php';
            </script>";
        return false;
    }

    // cek file upload
    $ekstensiDesainValid = ['png'];
    $ekstensiDesain = explode('.', $namaFile);
    $ekstensiDesain = strtolower(end($ekstensiDesain));
    if (!in_array($ekstensiDesain, $ekstensiDesainValid)) {
        echo "<script>alert('Yang Di Upload Bukan Gambar Jenis Png, Pastikan Gambar Dengan Tipe PNG!!');
                    document.location.href = '../pesan-user.php';
                </script>";
        return false;
    }

    // cek ukuran
    if ($ukuranFile < 100000) {
        echo "<script>alert('Ukuran File Terlalu Kecil, Pastikan File lebih dari 1mb!');
                document.location.href = '../pesan-user.php';
                </script>";
        return false;
    }
    
    // ganti nama agar tidak sama
    $namaFileNew = uniqid();
    $namaFileNew .= '-user-desain';
    $namaFileNew .= '.';
    $namaFileNew .= $ekstensiDesain;

    // jika berhasil di upload
    move_uploaded_file($tmpName, '../uploads/' . $namaFileNew);

    return $namaFileNew;
}


