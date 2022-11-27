<?php

if (isset($_POST['simpan'])) {
    $file = $_FILES['desain'];

    $fileName = $_FILES['desain']['name'];
    $fileTmpName = $_FILES['desain']['tmp_name'];
    $fileSize = $_FILES['desain']['size'];
    $fileError = $_FILES['desain']['error'];
    $fileType = $_FILES['desain']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: pesan.php?uploadsuccess");
            } else {
                echo "File terlalu besar";
            }
        } else {
            echo "Error saat mengupload file!";
        }
    } else {
        echo "Tidak bisa mengupload gambar, file gambar harus png minimal 1mb!";
    }
}