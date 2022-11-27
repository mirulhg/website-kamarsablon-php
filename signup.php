<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style-signup.css">
    <title>Sign-up</title>
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-header container">
            <h2>Sign Up</h2>
        </div>
        <div class="signup-form container card-body">
        <form class="needs-validation " action="includes/signup.inc.php" method="post" novalidate>
            <div class="form-input">
                <input type="text" class="form-control" id="inputuser" name="username" placeholder="Username" required>
                <div class="invalid-feedback">
                    username wajib di isi untuk login!
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control" id="inputemail" name="email" placeholder="Email" required>
                <div class="invalid-feedback">
                    Gunakan email yang benar untuk login!
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control" id="inputnama" name="name" placeholder="Full name..." required>
                <div class="invalid-feedback">
                    Nama wajib di isi!
                </div>
            </div>
            <div class="form-input">
                <input type="text" class="form-control" id="inputwa" name="wa" placeholder="Nomor WA" required>
                <div class="invalid-feedback">
                    WA wajib di isi!
                </div>
            </div>
            <div class="form-input">
                <textarea type="text" class="form-control" id="inputalamat" name="alamat" placeholder="Alamat" required></textarea>
                <div class="invalid-feedback">
                    Alamat wajib di isi
                </div>
            </div>
            <div class="form-input">
                <input type="password" class="form-control" id="inputpass" name="pwd" placeholder="Password" required>
                <div class="invalid-feedback">
                    Password harus sesuai!
                </div>
            </div>
            <div class="form-input">
                <input type="password" class="form-control" id="inputpassconfrim" name="pwdRepeat" placeholder="Repeat Password" required>
                <div class="invalid-feedback">
                    Password harus sesuai dengan confirm password!
                </div>
            </div>
            <div class="col-12 pt-4">
                <div class="form-check">
                    <input class="form-check-input" name="check" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label"  for="invalidCheck">
                        Konfirmasi Daftar
                    </label>
                    <div class="invalid-feedback">
                        Centang Dulu Sebelum Submit.
                    </div>
                </div>
            </div>
            <div class="form-button">
                <button class="btn btn-primary" type="submit" name="submit">Sign Up </button>
            </div>
        </form>
        </div>
        <div class="container card-footer invalid-feedback">
            <label for=""></label>
            <?php
                 if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<div>ISI SEMUA DATA!</div>";
                    }
                    else if ($_GET["error"] == "invaliduid") {
                        echo "<p>Choose a proper username!</p>";
                    }
                    else if ($_GET["error"] == "invalidemail") {
                        echo "<p>Gunakan Email Yang Sesusai!</p>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<p>Password Tidak Sama!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<p>Terjadi Kesalahan, Coba Input Kembali!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken") {
                        echo "<p>Username Sudah Ada!</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>Anda Berhasil Daftar!</p>";
                    }
                    
                }
            ?>
        </div>
        </div>
        </div>
</body>
</html>