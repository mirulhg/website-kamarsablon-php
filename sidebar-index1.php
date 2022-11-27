<?php 

include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';

session_start();

if (!isset($_SESSION['aduid'])) {
    header("Location : ../index.php");
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
                    <a href="home-admin.php">
                        <i class="bx bx-grid-alt"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="daftar-pesan.php">
                        <i class="bx bxs-id-card"></i>
                        <span class="links_name">Daftar Pemesan</span>
                    </a>
                    <span class="tooltip">Pemesan</span>
                </li>
                <li>
                    <a href="daftar-pengguna.php">
                        <i class="bx bx-notepad"></i>
                        <span class="links_name">Daftar Pengguna</span>
                    </a>
                    <span class="tooltip">Pengguna</span>
                </li>
                <li>
                    <a href="info-produk2.php">
                        <i class="bx bx-food-menu"></i>
                        <span class="links_name">Informasi Produk</span>
                    </a>
                    <span class="tooltip">Produk</span>
                </li>
                <li>
                    <a href="invoice-list.php">
                        <i class="bx bx-mail-send"></i>
                        <span class="links_name">Buat Invoice</span>
                    </a>
                    <span class="tooltip">Invoice</span>
                </li>
                <li>
                    <a href="pesan.php">
                        <i class="bx bx-cart-alt"></i>
                        <span class="links_name">Pesan</span>
                    </a>
                    <span class="tooltip">Pesan</span>
                </li>
                <li>
                    <a href="info-estimasi2.php">
                        <i class="bx bx-timer"></i>
                        <span class="links_name">Informasi Estimasi</span>
                    </a>
                    <span class="tooltip">Estimasi</span>
                </li>
                <li class="profile">
                    <a href="includes/logout.inc.php">
                        <div class="profile_details">
                            <div class="name_job">
                                <div class="name"><?php echo $_SESSION['aduid']; ?></div>
                                <div class="job">Log Out</div>
                            </div>
                        </div>
                        <i class="bx bx-log-out" id="log_out"></i>
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