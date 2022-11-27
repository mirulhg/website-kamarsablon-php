<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

require_once 'includes/dbh.inc.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

$id = $_GET['id'];

$sql       = "SELECT * FROM tbl_status WHERE sts_id = '$id';";
$query     = mysqli_query($conn, $sql);
$result    = mysqli_fetch_assoc($query);

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
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-info-estimasi.css">
</head>
<body>
<?php 

include_once 'sidebar-index-user.php';

?>

<input type="hidden" name="id" value="<?php echo $result['sts_id']; ?>" />
<div class="card">
    <div class="card-header">
        <header class="h" aria-hidden="true">
            ESTIMASI WAKTU PEMBUATAN KAOS
        </header>
        <label for="">Pemesan : </label>
        <input type="text" name="name" value="<?php echo $nama ?>" disabled />
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
                            <input type="date" name="date1" value="<?php echo $date1 ?>" disabled />
                        </th>
                            <th scope="col" style="font-size:70%">
                            <input type="text" name="bahan" value="<?php echo $bahan ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                        <input type="text" name="desain" value="<?php echo $desain ?>" disabled />
                        </th>
                        <th scope="col" style="font-size:70%">
                            <input type="text" name="ukuran" value="<?php echo $ukuran ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                            <input type="text" name="potong" value="<?php echo $potong ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                            <input type="text" name="sablon" value="<?php echo $sablon ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                        <input type="text" name="jahit" value="<?php echo $jahit ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                        <input type="text" name="finishing" value="<?php echo $finishing ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                        <input type="text" name="packaging" value="<?php echo $packaging ?>" disabled />
                            </th>
                        <th scope="col" style="font-size:70%">
                            <input type="date" name="date2" value="<?php echo $date2 ?>" disabled />
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="card-body container-sm flex-box">
                <label for="">Status Pesanan : </label>
                    <input type="text" name="status" value="<?php echo $status ?>" disabled />
                </select>
            </div>
        </div>
        <div class="container">
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p>Fill in all fields!</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p>SUDAH DI ESTIMASI</p>";
                        }
                        
                    }
            ?>
            </div>
</div>
</body>
</html>