<?php
    session_start();
    include_once 'includes/dbh.inc.php';
    include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMAR SABLON</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>    
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills nav-justified-center">
        <div class="container-fluid">
            <a href="index.php"><img src="img/logo-white.png" alt="Blogs logo"></a>
            <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <a class ="nav-item nav-link " data-bs-toggle='pill' id="pills-home-tab" type="button" aria-current="page" href="index.php" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                <a class ="nav-item nav-link " data-bs-toggle='pill' id="pills-profile-tab" type="button" href="discover.php" role="tab" aria-controls="pills-profile" aria-selected="false">About Us</a>
                <a class ="nav-item nav-link " data-bs-toggle='pill' id="pills-about-tab" type="button" href="blog.php" role="tab" aria-controls="pills-about" aria-selected="false">Find Blogs</a>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<a class ='nav-item nav-link ' data-bs-toggle='pill' id='pills-profile-tab' role='tab' aria-controls='pills-profile' href='profile.php' aria-selected='false'>Profile page</a>";
                        echo "<a class ='nav-item nav-link ' data-bs-toggle='pill' id='pills-logout-tab' role='tab' aria-controls='pills-logout' href='includes/logout.inc.php' aria-selected='false'>Log out</a>";
                        echo "<a class ='nav-item nav-link ' data-bs-toggle='pill' id='pills-order-tab' role='tab' aria-controls='pills-logout' href='pesan.php' aria-selected='false'>ORDER</a>";
                    }
                    else {
                        echo "<a class ='nav-item nav-link ' data-bs-toggle='pill' id='pills-sign-tab' role='tab' aria-controls='pills-sign' href='signup.php' aria-selected='false'>Sign up</a>";
                        echo "<a class ='nav-item nav-link ' data-bs-toggle='pill' id='pills-login-tab' role='tab' aria-controls='pills-login' href='login.php' aria-selected='false'>Log in</a>";
                    }
                ?>
                </div>
            </div>
    </nav>
</body>
</html>