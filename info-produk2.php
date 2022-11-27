<?php

    require_once 'includes/dbh.inc.php';
    require_once 'includes/functions.inc.php';

    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    }else {
        $op = "";
    }

    if ($op == 'edit') {
        $id   = $_GET['id'];
        $sql  = "SELECT * FROM tbl_produk WHERE prd_id = '$id';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

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
<!doctype html>
<html lang="en">
<head>
    <title>Info Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style-info-produk.css">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php 
    
    include_once 'sidebar-index1.php';

    ?>
<input type="hidden" name="id" value="<?php echo $result['prd_id']; ?>" />
    <div class="container">
        <div class="head">
            <h3>Informasi Produk</h3>
            <div class="button-group" role="group">
                <a href="edit-produk2.php?op=edit&id=<?php echo $id; ?>"><button type="button" class="btn btn-warning" name="edit"><i class="bx bx-edit">Edit</i></button></a>
            </div>
        </div>
        <div class="grid">
            <div class="card">
                <h4>Jenis Baju</h4>
                <div class="tampil">
                    <div class="tampil1">
                        <h5>Kaos Polos</h5>
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
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>