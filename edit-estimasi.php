<?php

include_once 'includes/dbh.inc.php';


$id = $_GET['id'];

$sql    = "SELECT * FROM tbl_status WHERE sts_id = '$id';";
$query  = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query); 

    $nama       = $result['sts_nama'];
    $date1      = $result['sts_date1'];
    $bahan      = $result['sts_bahan'];
    $desain     = $result['sts_desain'];
    $ukuran     = $result['sts_ukuran'];
    $potong     = $result['sts_potong'];
    $sablon     = $result['sts_sablon'];
    $jahit      = $result['sts_jahit'];
    $finishing  = $result['sts_finish'];
    $packaging  = $result['sts_pack'];
    $date2      = $result['sts_date2'];
    $status     = $result['sts_status'];

if (mysqli_num_rows($query) < 1) {
    die ("data tidak ditemukan");
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
<link rel="stylesheet" type="text/css" href="css/style-info-estimasi.css">
    <?php 
    
    include_once 'sidebar-index1.php';

    ?>
</head>
<body>
<input type="hidden" name="id1" value="<?php echo $result1['sts_id']; ?>" />

<section class="estimasi">
    <form action="includes/edit-estimasi.inc.php" method="POST">
<div class="card">
    <div class="card-header">
        <header class="h" aria-hidden="true">
            ESTIMASI WAKTU PEMBUATAN KAOS
        </header>
        <label for="">Pemesan : </label>
        <input type="text" name="nama" value="<?php echo $nama;  ?>" disabled />
    </div>
        <div class="card-body form-group container table-responsive">
            <table class="table align-middle table-border table-responsive table-hover table-striped container-md">
                <thead>
                    <tr>
                        <th scope="col" style="font-size:70%">Tanggal Pembuatan</th>
                        <th scope="col" style="font-size:70%">Pemilihan Bahan</th>
                        <th scope="col" style="font-size:70%">Pembuatan Desain</th>
                        <th scope="col" style="font-size:70%">Pemilihan Ukuran</th>
                        <th scope="col" style="font-size:70%">Pemotongan</th>
                        <th scope="col" style="font-size:70%">Penyablonan</th>
                        <th scope="col" style="font-size:70%">Penjahitan</th>
                        <th scope="col" style="font-size:70%">Finishing</th>
                        <th scope="col" style="font-size:70%">Packaging</th>
                        <th scope="col" style="font-size:70%">Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col" style="font-size:70%">
                            <input type="date" name="date1" value="<?php echo $date1 ?>">
                        </th>
                        <th scope="col" style="font-size:70%">
                        <?php $bahan = $bahan; ?>
                                        <select name="bahan" id="">
                                        <option <?php echo ($bahan == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($bahan == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($bahan == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $desain = $desain; ?>
                                        <select name="desain" id="">
                                        <option <?php echo ($desain == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($desain == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($desain == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $ukuran = $ukuran; ?>
                                        <select name="ukuran" id="">
                                        <option <?php echo ($ukuran == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($ukuran == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($ukuran == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $potong = $potong; ?>
                                        <select name="potong" id="">
                                        <option <?php echo ($potong == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($potong == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($potong == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $sablon = $sablon; ?>
                                        <select name="sablon" id="">
                                        <option <?php echo ($sablon == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($sablon == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($sablon == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $jahit = $jahit; ?>
                                        <select name="jahit" id="">
                                        <option <?php echo ($sablon == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($sablon == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($sablon == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $finishing = $finishing; ?>
                                        <select name="finishing" id="">
                                        <option <?php echo ($finishing == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($finishing == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($finishing == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                        <?php $packaging = $packaging; ?>
                                        <select name="packaging">
                                        <option <?php echo ($packaging == 'Belum Dikerjakan') ? "selected" : "" ?>>Belum Dikerjakan</option>
                                        <option <?php echo ($packaging == 'Dalam Proses Pengerjaan') ? "selected" : "" ?>>Dalam Proses Pengerjaan</option>
                                        <option <?php echo ($packaging == 'Done') ? "selected" : "" ?>>Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                            <input type="date" name="date2" value="<?php echo $date2 ?>">
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="card-body container-sm flex-box">
                <label for="">Status Pesanan : </label>
                <select name="status" id="">
                <?php $status = $status; ?>
                    <option <?php echo ($status == 'Sudah Bisa Di Ambil') ? "selected" : "" ?>>Sudah Bisa Di Ambil</option>
                    <option <?php echo ($status == 'Belum Bisa Di Ambil') ? "selected" : "" ?>>Belum Bisa Di Ambil</option>
                </select>
            </div>
        </div>
        <div class="card-footer container-sm">
            <div class="btn-group" role="group">
            <a class=""><button type="submit" class="btn btn-warning" name="simpan" >SIMPAN</button></a>
            </div>
        </div>
        </form>
        <div class="container">
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>ISI SEMUA DATA!</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p>SUDAH DI ESTIMASI</p>";
                        }
                        
                    }
            ?>
        </div>
        </div>
    </section>
</body>
</html>