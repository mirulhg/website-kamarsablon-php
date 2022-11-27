<?php 

include_once 'includes/dbh.inc.php';

$sql    = "SELECT * FROM tbl_produk ORDER BY prd_id DESC;";
$query  = mysqli_query($conn, $sql);
while ($result = mysqli_fetch_assoc($query)) {
    $id           = $result['prd_id'];
    
    $polos20s     = $result['prd_polos_s20'];
    $polos24s     = $result['prd_polos_s24'];
    $polos30s     = $result['prd_polos_s30'];
    $polos32s     = $result['prd_polos_s32'];
    $polos40s     = $result['prd_polos_s40'];
    
    $kemeja20s     = $result['prd_kemeja_s20'];
    $kemeja24s     = $result['prd_kemeja_s24'];
    $kemeja30s     = $result['prd_kemeja_s30'];
    $kemeja32s     = $result['prd_kemeja_s32'];
    $kemeja40s     = $result['prd_kemeja_s40'];
    
    $sweater20s     = $result['prd_sweater_s20'];
    $sweater24s     = $result['prd_sweater_s24'];
    $sweater30s     = $result['prd_sweater_s30'];
    $sweater32s     = $result['prd_sweater_s32'];
    $sweater40s     = $result['prd_sweater_s40'];

    
    $hitam      = $result['prd_hitam'];
    $putih      = $result['prd_putih'];
    $merah      = $result['prd_merah'];
    $biru       = $result['prd_biru'];
    $hijau      = $result['prd_hijau'];
    $kuning     = $result['prd_kuning'];
    $coklat     = $result['prd_coklat'];
    $abu        = $result['prd_abu'];
}

?>
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
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-home-admin.css">
    <title>Home</title>
</head>
<body>
    <?php 
    
    include_once 'sidebar-index1.php';
    
    ?>
    <section class="sec1">
        <div class="header">
            <h2>DASHBOARD</h2>
            <h3>Selamat Datang Admin</h3>
        </div>
        <div class="grid-sec">
            <div class="grid-info">
                <h4>INFO PEMESAN</h4>
                    <table class="container table table-stripped table-hover table-responsive table-bordered col-m-2">
                        <thead class="table-dark">
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Nama Pemesan</th>
                                <th scope='col'>Alamat</th>
                                <th scope='col'>Email</th>
                                <th scope='col'>Jumlah</th>
                                <th scope='col'>Tanggal Memesan</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <?php

                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                            $halaman = 10;
                            
                            $page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai   =($page>1) ? ($page*$halaman) - $halaman : 0;
                
                            $hasil  = mysqli_query($conn, "SELECT * FROM tbl_pesanan");
                            $total   = mysqli_num_rows($hasil);
                            $pages   = ceil($total/$halaman);
            
                            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                            $sql = "SELECT * FROM tbl_pengguna INNER JOIN tbl_pesanan ON tbl_pesanan.psn_usersId = tbl_pengguna.usersId LIMIT $mulai, $halaman";
                            $result = mysqli_query($conn, $sql);
                            $nomor   = $mulai+1;
                            while ($result2 = mysqli_fetch_array($result))
                            {

                                $id     = $result2['psn_id'];
                                echo "<tr>";

                                echo "<th scope='row'>".$nomor++."</th>";
                                echo "<td scope='row'>".$result2['usersName']."</td>";
                                echo "<td scope='row'>".$result2['usersAlamat']."</td>";
                                echo "<td scope='row'>".$result2['usersEmail']."</td>";
                                echo "<td scope='row'>".$result2['psn_jumlah']."</td>";
                                echo "<td scope='row'>".$result2['psn_tanggal']."</td>";

                                echo "</tr>";

                            }
                            ?>
                        </tbody>
                        <tfoot>
                            Page : 
                            <?php 
                            for($i=1;$i<=$pages ; $i++){
                            ?>
                                <a href="home-admin.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
                            <?php
                                }
                            ?>
                        </tfoot>
                    </table>
            </div>
        </div>
        </div>
        <div class="grid-sec">
        
    </section>
    <section class="sec2">
        <div class="grid">
            <div class="head">
                <h4>INFO PRODUK</h4>
            </div>
            <div class="card">
                <h4>Jenis Baju</h4>
                <div class="tampil">
                    <div class="tampil1">
                    <div class="label-group">    
                            <label for="">Combed 20s :</label>
                            <input type="text" class="border" value="<?php echo $polos20s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 24s :</label>
                            <input type="text" class="border" value="<?php echo $polos24s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 30s :</label>
                            <input type="text" class="border" value="<?php echo $polos30s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 32s :</label>
                            <input type="text" class="border" value="<?php echo $polos32s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 40s :</label>
                            <input type="text" class="border" value="<?php echo $polos40s ?>" disabled>
                        </div>
                    </div>
                    <div class="tampil1">
                        <h5>Kemeja</h5>
                        <div class="label-group">    
                            <label for="">Combed 20s :</label>
                            <input type="text" class="border" value="<?php echo $kemeja20s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 24s :</label>
                            <input type="text" class="border" value="<?php echo $kemeja24s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 30s :</label>
                            <input type="text" class="border" value="<?php echo $kemeja30s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 32s :</label>
                            <input type="text" class="border" value="<?php echo $kemeja32s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 40s :</label>
                            <input type="text" class="border" value="<?php echo $kemeja40s ?>" disabled>
                        </div>
                    </div>
                    <div class="tampil1">
                        <h5>Sweater</h5>
                        <div class="label-group">    
                            <label for="">Combed 20s :</label>
                            <input type="text" class="border" value="<?php echo $sweater20s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 24s :</label>
                            <input type="text" class="border" value="<?php echo $sweater24s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 30s :</label>
                            <input type="text" class="border" value="<?php echo $sweater30s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 32s :</label>
                            <input type="text" class="border" value="<?php echo $sweater32s ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Combed 40s :</label>
                            <input type="text" class="border" value="<?php echo $sweater40s ?>" disabled>
                        </div>
                    </div>
                    <div class="tampil1">
                        <h5>Warna</h5>
                        <div class="label-group">    
                            <label for="">Putih :</label>
                            <input type="text" class="border" value="<?php echo $hitam ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Hitam :</label>
                            <input type="text" class="border" value="<?php echo $putih ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Merah :</label>
                            <input type="text" class="border" value="<?php echo $merah ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Biru :</label>
                            <input type="text" class="border" value="<?php echo $biru ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Hijau :</label>
                            <input type="text" class="border" value="<?php echo $hijau ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Kuning :</label>
                            <input type="text" class="border" value="<?php echo $kuning ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Coklat :</label>
                            <input type="text" class="border" value="<?php echo $coklat ?>" disabled>
                        </div>
                        <div class="label-group">
                            <label for="">Abu :</label>
                            <input type="text" class="border" value="<?php echo $abu ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>