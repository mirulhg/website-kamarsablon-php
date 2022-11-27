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
        <form class="needs-validation " action="includes/daftar-admin.inc.php" method="post" novalidate>
            <div class="form-input">
                <input type="text" class="form-control" id="inputuser" name="adusername" placeholder="Username" required>
                <div class="invalid-feedback">
                    username wajib di isi untuk login!
                </div>
            </div>
            <div class="form-input">
                <input type="password" class="form-control" id="inputpass" name="adpwd" placeholder="Password" required>
                <div class="invalid-feedback">
                    Password harus sesuai!
                </div>
            </div>
            <div class="form-input">
                <input type="password" class="form-control" id="inputpassconfrim" name="adpwdRepeat" placeholder="Repeat Password" required>
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
                        echo "<script>alert('Isi semua data!')</script>";
                    }
                    else if ($_GET["error"] == "stmtfailed") {
                        echo "<script>alert('Terjadi Kesalahan, Ketik Ulang')</script>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch") {
                        echo "<script>alert('Password tidak sama')</script>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<script>alert('Berhasil Daftar!')</script>";
                    }
                    
                }
            ?>
        </div>
        </div>
        </div>
</body>
</html>