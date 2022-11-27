
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
    

    <link rel="stylesheet" type="text/css" href="css/style-login.css">
    <title>login</title>
</head>
<body>

<div class="container">
    <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex">
                <img src="img/cloth-2.jpg" alt="">
            </div>
                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Login Ke Akun Kamar Sablon
                    </h4>
                    <form class="form-box px-3" action="includes/login.inc.php" method="post">
                        <div class="form-input">
                            <span><i class="bi bi-envelope"></i></span>
                            <input type="text" name="uid" placeholder="Emaill / Username" tabindex="10" required>
                        </div>
                        <div class="form-input">
                            <span><i class="bi bi-key"></i></span>
                            <input type="password" name="pwd" placholder="Password" tabindex="10" required>
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                                <label class="custom-control-label" for="cb1">Ingat Saya</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-block text-uppercase">
                                Login
                            </button>
                        </div>
                        <hr class="my-4">

                        <div class="text-center mb-2">
                            Tidak Punya Akun?
                            <a href="signup.php" class="register-link">
                                Daftar Disini
                            </a>
                        </div>
                        <div class="text-center mb-2">
                            Kembali ke Landing Page
                            <a href="index.php" class="register-link">
                                Landing  Page
                            </a>
                        </div>
                        <div class="container">
                            <?php
                                if (isset($_GET["error"])) {
                                    if ($_GET["error"] == "emptyinput") {
                                        echo "<p>Fill in all fields!</p>";
                                    }
                                    else if ($_GET["error"] == "wronglogin") {
                                        echo "<p>Incorrect login information!</p>";
                                    }
                                }
                            ?>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>