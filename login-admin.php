<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style-login.css"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
</head>
<body>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                    <div class="card-body">
                        <h3 class="title text-center mt-4">Login Admin</h3>
                        <form class="form-box px-3" action="includes/login-admin.inc.php" method="post">
                            <div class="form-input">
                                <span><i class="bi bi-envelope"></i></span>
                                <input class="input" type="text" name="aduid" placeholder="Username" required>
                            </div>
                            <div class="form-input">
                                <span><i class="bi bi-key"></i></span>    
                                <input class="input" type="password" name="adpwd" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" name="submit">Login </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--
        <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<script>alert('Fill in all fields!')</script>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<script>alert('Incorrect login information!')</script>";
                    }
                }

            ?>
            -->
</body>
</html>