<?php 

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

session_start();

if (!isset($_SESSION['useruid'])) {
    header("Location : ../index.php");
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

if ($op == 'edit') {
    $id   = $_SESSION['userid'];
    $sql  = "SELECT * FROM tbl_pengguna WHERE usersId = '$id';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-sidebar-index.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Responsive Sidebar Menu</title>
</head>
<body>
        <div class="sidebar">
            <div class="logo-details">
                <i class="bx bxs-t-shirt icon"></i>
                <div class="logo_name">Kamar Sablon</div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
            <div class="samping">
                <li>
                    <a href="home-user.php">
                        <i class="bx bx-grid-alt"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="info-produk-user.php">
                        <i class="bx bx-food-menu"></i>
                        <span class="links_name">Informasi Produk</span>
                    </a>
                    <span class="tooltip">Produk</span>
                </li>
                <li>
                    <a href="pesan-user.php">
                        <i class="bx bx-cart-alt"></i>
                        <span class="links_name">Pesan</span>
                    </a>
                    <span class="tooltip">Pesan</span>
                </li>
                <li>
                    <a href="info-estimasi-user.php">
                        <i class="bx bx-timer"></i>
                        <span class="links_name">Informasi Estimasi</span>
                    </a>
                    <span class="tooltip">Estimasi</span>
                </li>
                <li class="profile">
                    <a href="includes/logout.inc.php">
                    <div class="profile_details">
                        <div class="name_job">
                            <div class="name"><?php echo $_SESSION['useruid']; ?></div>
                            <div class="job">Log Out</div>
                        </div>
                    </div>
                    <i class="bx bx-log-out" id="log_out" href=""></i>
                    </a>
                </li>
            </div>
        </div>
        <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");
            let searcBtn = document.querySelector(".bx-search");

            closeBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("open");
                menuBtnChange(); // calling the function(optional)
            });

            searchBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("open");
                menuBtnChange(); // callling the function(optional)
            });

            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
                if(sidebar.classList.contains("open")){
                    closeBtn.classList.replace("bx-menu","bx-menu-alt-right"); // replacing the icons class
                }else {
                    closeBtn.classList.replace("bx-menu-alt-right","bx-menu"); // replacing the icons class
                }
            }
        </script>
</body>
</html>