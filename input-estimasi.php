<?php 

include_once 'includes/dbh.inc.php';


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
</head>
<body>
<?php 

include_once 'sidebar-index1.php';

?>
<input type="hidden" name="id" value="<?php echo $result['psn_id']; ?>" />
<section class="estimasi">
    <form action="includes/input-estimasi.inc.php" method="POST">
    <div class="card">
        <div class="card-header container-sm">
            <h3 class="h" aria-hidden="true">
                ESTIMASI WAKTU PEMBUATAN KAOS
            </h3>
            <label for="">Pemesan : </label>
            <input type="text" name="nama">
            <select name="" id="">
                <?php

                $sql    = "SELECT * FROM tbl_pesanan ORDER BY psn_id DESC;";
                $query = mysqli_query($conn, $sql);
                while ($result = mysqli_fetch_array($query)) {
                    $id1         = $result['psn_id'];
                echo "<option name='' value=''>".$result['psn_nama']."</option>";
                    
                }
                ?>        
                </select>
    </div>
        <div class="card-body form-group container table-responsive">
            <table class="table align-middle table-border table-responsive table-hover table-striped container-md">
                <thead>
                    <tr>
                        <th scope="col" style="font-size:80%">Tanggal Pembuatan</th>
                        <th scope="col" style="font-size:80%">Pemilihan Bahan</th>
                        <th scope="col" style="font-size:80%">Pembuatan Desain</th>
                        <th scope="col" style="font-size:80%">Pemilihan Ukuran</th>
                        <th scope="col" style="font-size:80%">Pemotongan</th>
                        <th scope="col" style="font-size:80%">Penyablonan</th>
                        <th scope="col" style="font-size:80%">Penjahitan</th>
                        <th scope="col" style="font-size:80%">Finishing</th>
                        <th scope="col" style="font-size:80%">Packaging</th>
                        <th scope="col" style="font-size:80%">Tanggal Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col" style="font-size:70%">
                            <input type="date" name="date1" value="">
                        </th>
                        <th scope="col" style="font-size:70%">
                                        <select name="bahan" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="desain" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="ukuran" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="potong" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="sablon" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="jahit" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="finishing" id="">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                                        <select name="packaging">
                                        <option >Belum Dikerjakan</option>
                                        <option >Dalam Proses Pengerjaan</option>
                                        <option >Done</option>
                        </select></th>
                        <th scope="col" style="font-size:70%">
                            <input type="date" name="date2" value="">
                        </th>
                    </tr>
                </tbody>
            </table>
            <div class="card-body container-sm flex-box">
                <label for="">Status Pesanan : </label>
                <select name="status" id="">
                <?php $status = $result1['sts_status']; ?>
                    <option >Sudah Bisa Di Ambil</option>
                    <option >Belum Bisa Di Ambil</option>
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
    </section>
</div>
</body>
</html>