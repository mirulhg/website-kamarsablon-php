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
<!doctype html>
<html lang="en">
<head>
    <title>Home User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-home-user.css">
</head>
<body>
    <?php 
    
    include_once 'sidebar-index-user.php';
    
    ?>
    <div class="head">
        <h3 class="dashboard">DASHBOARD</h3>
    </div>
    <section class="sesi-2">
        <div class="container">
            <div class="label-group">
                <h5 class="judul">Siap Menerima Pembuatan Kaos</h5>
                <h6 class="judul">Dengan desain yang ditentukan oleh konsumen</h6>
                <div class="grid">
                    <div class="grid-1 stacked featured">
                            <img src="img/user-pin-regular-204.png" alt="" class="icons">
                        <div class="content">
                            <h6 class="card__title">Berpengalaman Sejak 2014</h6>
                            <p class="card__p">Manajemen berpengalaman dan memiliki legalitas perusahaan resmi, kami siap melayani kebutuhan konsumen.</p>
                        </div>
                    </div>
                    <div class="grid-1 stacked">
                            <img src="img/timer-regular-204.png" alt="" class="icons">
                        <div class="content">
                            <h6 class="card__title">Produksi tepat waktu</h6>
                            <p class="card__p">Selalu memastikan agar semua pesanan dapat diselesaikan sesuai jangka waktu yang telah disepakati.</p>
                        </div>
                    </div>
                    <div class="grid-1 stacked">
                            <img src="img/notepad-regular-204.png" alt="" class="icons">
                        <div class="content">
                            <h6 class="card__title">Pemesanan bisa melalui online</h6>
                            <p class="card__p">Konsumen boleh memesan tanpa harus datang ke toko langsung dengan mendaftar dan login terlebih dahulu untuk melakukan pemesanan.</p>
                        </div>
                    </div>
                    <div class="grid-1 stacked">
                            <img src="img/alarm-regular-204.png" alt="" class="icons">
                        <div class="content">
                            <h6 class="card__title">Fitur Estimasi</h6>
                            <p class="card__p">Website kami mempunyai fitur estimasi, yaitu konsumen bisa tracking proses pengerjaan kaos yang dipesan. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sesi-4">
        <div class="container">
            <h3>Informasi Produk</h3>
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
            <div class="form-group">
                <h3>Daftar Harga</h3>
                <div class="mading-harga">
                    <div class="grid-satu">
                        <h5>Kaos Polos</h5>
                        <div class="group-label">
                            <label for="">Combed 20s : Rp.68.000</label>
                            <label for="">Combed 30s : Rp.62.000</label>
                            <label for="">Combed 32s : Rp.62.000</label>
                            <label for="">Combed 40s : Rp.55.000</label>
                        </div>
                    </div>
                    <div class="grid-dua">
                        <h5>Kemeja</h5>
                        <div class="group-label">
                            <label for="">Combed 20s : Rp.72.000</label>
                            <label for="">Combed 30s : Rp.68.000</label>
                            <label for="">Combed 32s : Rp.68.000</label>
                            <label for="">Combed 40s : Rp.62.000</label>
                        </div>
                    </div>
                    <div class="grid-tiga">
                        <h5>Jaket</h5>
                        <div class="group-label">
                            <label for="">Combed 20s : Rp.84.000</label>
                            <label for="">Combed 30s : Rp.80.000</label>
                            <label for="">Combed 32s : Rp.80.000</label>
                            <label for="">Combed 40s : Rp.78.000</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>