<?php

include_once 'includes/dbh.inc.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

if ($op == 'edit') {
    $id   = $_GET['id'];
    $sql  = "SELECT * FROM tbl_produk WHERE prd_id = '$id1';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
            $s20  = $row["prd_20s"];
            $s24  = $row["prd_24s"];
            $s30  = $row["prd_30s"];
            $s32  = $row["prd_32s"];
            $s40  = $row["prd_40s"];     
            
            $polo       = $row["prd_polo"];
            $oblong     = $row["prd_oblong"];
            $pendek     = $row["prd_pendek"];
            $panjang    = $row["prd_panjang"];

            $hitam  = $row["prd_hitam"];
            $putih  = $row["prd_putih"];
            $merah  = $row["prd_merah"];
            $biru   = $row["prd_biru"];
            $hijau  = $row["prd_hijau"];
            $kuning = $row["prd_kuning"];
            $coklat = $row["prd_coklat"];
            $abu    = $row["prd_abu"];

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
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-produk.css">
</head>
<body>
    <?php

    include_once 'sidebar-index1.php';
    
    ?>
    <form action="includes/info-produk.inc.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $result['prd_id']; ?>" />
    <div class="card">
    <div class="card-header">
        <h3>INFORMASI BARANG YANG TERSEDIA</h3>
        <div class="btn-group">
        <a href="input-produk.php"><button type="button" class="btn btn-primary">Input</button></a>
        <a href="edit-produk.php?op=edit&id1"><button type="button" class="btn btn-warning">Edit</button></a>
        <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
        </div>
    </div>
    <div class="card-body">
        <div class="kotak table">
            <table class="table table-border table-stripped">
                <h6>JENIS BAJU</h6>
                <thead>
                    <th scope="col">Kaos Kerah Polo</th>
                    <th scope="col">Kaos Oblong</th>
                    <th scope="col">Kemeja Pendek</th>
                    <th scope="col">Kemeja Panjang</th>
                </thead>
                <?php

                require_once 'includes/dbh.inc.php';
                require_once 'includes/functions.inc.php';

                $sql    = "SELECT * FROM tbl_produk ORDER BY prd_id DESC;";
                $query  = mysqli_query($conn, $sql);
                while ($result = mysqli_fetch_assoc($query)) {
                    $id      = $result['prd_id'];

                    $s20     = $result['prd_s20'];
                    $s24     = $result['prd_s24'];
                    $s30     = $result['prd_s30'];
                    $s32     = $result['prd_s32'];
                    $s40     = $result['prd_s40'];

                    $polo       = $result['prd_polo'];
                    $oblong     = $result['prd_oblong'];
                    $pendek     = $result['prd_pendek'];
                    $panjang    = $result['prd_panjang'];
                    
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
                <tbody>
                    <td scope="row"><?php echo $polo ?></td>
                    <td scope="row"><?php echo $oblong ?></td>
                    <td scope="row"><?php echo $pendek ?></td>
                    <td scope="row"><?php echo $panjang ?></td>
                </tbody>
            </table>
        </div>
        <div class="kotak table">
            <table class="table table-border table-stripped">
                <h6>KETEBALAN BAJU</h6>
                <thead>
                    <th scope="col">20s</th>
                    <th scope="col">24s</th>
                    <th scope="col">30s</th>
                    <th scope="col">32s</th>
                    <th scope="col">40s</th>
                </thead>
                <tbody>
                    <td scope="row"><?php echo $s20 ?></td>
                    <td scope="row"><?php echo $s24 ?></td>
                    <td scope="row"><?php echo $s30 ?></td>
                    <td scope="row"><?php echo $s32 ?></td>
                    <td scope="row"><?php echo $s40 ?></td>
                </tbody>
            </table>
        </div>
        <div class="kotak table">
            <table class="table table-border table-stripped">
                <h6>WARNA</h6>
                <thead>
                    <th scope="col">HITAM</th>
                    <th scope="col">PUTIH</th>
                    <th scope="col">MERAH</th>
                    <th scope="col">BIRU</th>
                    <th scope="col">HIJAU</th>
                    <th scope="col">KUNING</th>
                    <th scope="col">COKLAT</th>
                    <th scope="col">ABU</th>
                </thead>
                <tbody>
                    <td scope="row"><?php echo $hitam  ?></td>
                    <td scope="row"><?php echo $putih  ?></td>
                    <td scope="row"><?php echo $merah  ?></td>
                    <td scope="row"><?php echo $biru   ?></td>
                    <td scope="row"><?php echo $hijau  ?></td>
                    <td scope="row"><?php echo $kuning ?></td>
                    <td scope="row"><?php echo $coklat ?></td>
                    <td scope="row"><?php echo $abu    ?></td>
                </tbody>
            </table>
        </div>
    </div>
    </form>
</div>
</body>
</html>