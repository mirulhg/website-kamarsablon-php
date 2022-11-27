<?php 

include_once 'includes/dbh.inc.php';

if (!isset($_GET['id'])) {
    header('Location: info-produk2.php');
}

$id     = $_GET['id'];

$sql    = "SELECT * FROM tbl_produk WHERE prd_id=$id;";
$query  = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan");
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Input Data Produk</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-input-produk2.css">
</head>
</head>
<body>
    <?php 
    
    include_once 'sidebar-index1.php';

    ?>
    <form action="includes/edit-produk.inc.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $result['prd_id']; ?>" />
    <div class="head">
        <h3 class="h">Input Data Produk</h3>
        <div class="button-group">
            <button class="btn btn-primary button" name="simpan"><i class="bx bx-save">Simpan</i></button>
        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <h5>Kaos Polos</h5>
                <div class="label-group">
                    <label for="">20s</label>
                    <?php $kaos20s = $result['prd_polos_s20']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos20s" id="" value="Tersedia" <?php echo ($kaos20s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos20s" id="" value="Tidak Tersedia" <?php echo ($kaos20s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">24s</label>
                    <?php $kaos24s = $result['prd_polos_s24']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos24s" id="" value="Tersedia" <?php echo ($kaos24s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos24s" id="" value="Tidak Tersedia" <?php echo ($kaos24s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">30s</label>
                    <?php $kaos30s = $result['prd_polos_s30']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos30s" id="" value="Tersedia" <?php echo ($kaos30s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos30s" id="" value="Tidak Tersedia" <?php echo ($kaos30s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">32s</label>
                    <?php $kaos32s = $result['prd_polos_s32']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos32s" id="" value="Tersedia" <?php echo ($kaos32s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos32s" id="" value="Tidak Tersedia" <?php echo ($kaos32s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">40s</label>
                    <?php $kaos40s = $result['prd_polos_s40']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos40s" id="" value="Tersedia" <?php echo ($kaos40s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kaos40s" id="" value="Tidak Tersedia" <?php echo ($kaos40s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5>Kemeja</h5>
                <div class="label-group">
                    <div class="check">
                    <label for="">20s</label>
                    <?php $kemeja20s = $result['prd_kemeja_s20']; ?>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kemeja20s" id="" value="Tersedia" <?php echo ($kemeja20s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                            </label>
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="kemeja20s" id="" value="Tidak Tersedia" <?php echo ($kemeja20s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                            </label>
                        </div>
                    </div>
                    <label for="">24s</label>
                    <?php $kemeja24s = $result['prd_kemeja_s24']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja24s" id="" value="Tersedia" <?php echo ($kemeja24s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja24s" id="" value="Tidak Tersedia" <?php echo ($kemeja24s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">30s</label>
                    <?php $kemeja30s = $result['prd_kemeja_s30']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja30s" id="" value="Tersedia" <?php echo ($kemeja30s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja30s" id="" value="Tidak Tersedia" <?php echo ($kemeja30s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">32s</label>
                    <?php $kemeja32s = $result['prd_kemeja_s32']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja32s" id="" value="Tersedia" <?php echo ($kemeja32s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja32s" id="" value="Tidak Tersedia" <?php echo ($kemeja32s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">40s</label>
                    <?php $kemeja40s = $result['prd_kemeja_s40']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja40s" id="" value="Tersedia" <?php echo ($kemeja40s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kemeja40s" id="" value="Tidak Tersedia" <?php echo ($kemeja40s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5>Sweater</h5>
                <div class="label-group">
                    <label for="">20s</label>
                    <?php $sweater20s = $result['prd_sweater_s20']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater20s" id="" value="Tersedia" <?php echo ($sweater20s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater20s" id="" value="Tidak Tersedia" <?php echo ($sweater20s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">24s</label>
                    <?php $sweater24s = $result['prd_sweater_s24']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater24s" id="" value="Tersedia" <?php echo ($sweater24s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater24s" id="" value="Tidak Tersedia" <?php echo ($sweater24s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">30s</label>
                    <?php $sweater30s = $result['prd_sweater_s30']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater30s" id="" value="Tersedia" <?php echo ($sweater30s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater30s" id="" value="Tidak Tersedia" <?php echo ($sweater30s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">32s</label>
                    <?php $sweater32s = $result['prd_sweater_s32']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater32s" id="" value="Tersedia" <?php echo ($sweater32s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater32s" id="" value="Tidak Tersedia" <?php echo ($sweater32s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">40s</label>
                    <?php $sweater40s = $result['prd_sweater_s40']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater40s" id="" value="Tersedia" <?php echo ($sweater40s == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sweater40s" id="" value="Tidak Tersedia" <?php echo ($sweater40s == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5>Warna</h5>
                <div class="label-group">
                    <label for="">Hitam</label>
                    <?php $hitam = $result['prd_hitam']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="hitam" id="" value="Tersedia" <?php echo ($hitam == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="hitam" id="" value="Tidak Tersedia" <?php echo ($hitam == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Putih</label>
                    <?php $putih = $result['prd_putih']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="putih" id="" value="Tersedia" <?php echo ($putih == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="putih" id="" value="Tidak Tersedia" <?php echo ($putih == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Merah</label>
                    <?php $merah = $result['prd_merah']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="merah" id="" value="Tersedia" <?php echo ($merah == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="merah" id="" value="Tidak Tersedia" <?php echo ($merah == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Biru</label>
                    <?php $biru = $result['prd_biru']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="biru" id="" value="Tersedia" <?php echo ($biru == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="biru" id="" value="Tidak Tersedia" <?php echo ($biru == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Hijau</label>
                    <?php $hijau = $result['prd_hijau']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="hijau" id="" value="Tersedia" <?php echo ($hijau == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="hijau" id="" value="Tidak Tersedia" <?php echo ($hijau == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Kuning</label>
                    <?php $kuning = $result['prd_kuning']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kuning" id="" value="Tersedia" <?php echo ($kuning == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="kuning" id="" value="Tidak Tersedia" <?php echo ($kuning == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Coklat</label>
                    <?php $coklat = $result['prd_coklat']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="coklat" id="" value="Tersedia" <?php echo ($coklat == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="coklat" id="" value="Tidak Tersedia" <?php echo ($coklat == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                    <label for="">Abu</label>
                    <?php $abu = $result['prd_abu']; ?>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="abu" id="" value="Tersedia" <?php echo ($abu == 'Tersedia') ? "checked" : "" ?> autocomplete="off">Tersedia
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="abu" id="" value="Tidak Tersedia" <?php echo ($abu == 'Tidak Tersedia') ? "checked" : "" ?> autocomplete="off" checked>Tidak Tersedia
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>