<?php 

include_once 'includes/dbh.inc.php';


if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql        = "SELECT * FROM tbl_status WHERE sts_id = '$id';";
    $query      = mysqli_query($conn, $sql);
    $result     = mysqli_fetch_array($query);
                $date1      = $result["sts_nama"];
                $date1      = $result["sts_date1"];
                $bahan      = $result["sts_bahan"];
                $desain     = $result["sts_desain"];
                $ukuran     = $result["sts_ukuran"];
                $potong     = $result["sts_potong"];
                $sablon     = $result["sts_sablon"];
                $jahit      = $result["sts_jahit"];
                $finishing  = $result["sts_finish"];
                $packaging  = $result["sts_pack"];
                $date2      = $result["sts_date2"];
                $status     = $result["sts_status"];
}

if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "DELETE FROM tbl_status WHERE sts_id = '$id'";
    $query1         = mysqli_query($conn,$sql1);
    if($query1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-info-estimasi2.css">
</head>
<body>
<?php 
    
    include_once 'sidebar-index1.php';

    ?>
<input type="hidden" name="id" value="<?php echo $result1['sts_id']; ?>" />
    <div class="card">
            <div class="head">
                <h2>INFORMASI ESTIMASI</h2>
            </div>
            <div class="card-body">
                <div class="overflow-x:auto;">
                <table class="table table-striped table-bordered table-hover table-responsive-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <td scope="col">Nama</td>
                            <td scope="col">Tanggal Mulai</td>
                            <td scope="col">Tanggal Selesai</td>
                            <td scope="col">Keterangan</td>
                            <td scope="col">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $halaman    = 5;
                        $page       = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai      = ($page>1) ? ($page*$halaman) - $halaman : 0;

                        $hasil      = mysqli_query($conn, "SELECT * FROM tbl_status");
                        $total      = mysqli_num_rows($hasil);
                        $pages      = ceil($total/$halaman);

                        # $sql        = "SELECT * FROM tbl_pesanan JOIN tbl_status on tbl_pesanan.psn_id = tbl_status.sts_id ORDER BY tbl_pesanan.psn_id;";
                        $sql        = "SELECT * FROM tbl_status LIMIT $mulai, $halaman;";
                        $query      = mysqli_query($conn, $sql);
                        $nomor      = $mulai+1;
                        while ($result = mysqli_fetch_array($query)) {
                                $id         = $result['sts_id'];
                                echo "
                                <tr>
                                <th scope='row'>".$nomor++."</th>
                                <td scope='row'>".$result['sts_nama']."</td>
                                <td scope='row'>".$result['sts_date1']."</td>
                                <td scope='row'>".$result['sts_date2']."</td>
                                <td scope='row'>".$result['sts_status']."</td>
                                <td scope='row'>
                                <div class='btn-group' role='group'>
                                    <a href='edit-estimasi.php?op=edit&id=".$result['sts_id']."'><button class='btn btn-warning btn-sm'><i class='bx bx-edit'>Edit</i></button></a>
                                    <a href='info-estimasi2.php?op=delete&id=".$result['sts_id']."'><button class='btn btn-danger btn-sm'><i class='bx bx-minus-circle'>Delete</i></button></a>
                                </div>
                            </td>
                            </tr>
                                ";
                            }
                        ?>

                        
                    </tbody>
                    <tfoot>
                    <div>
                        Page : 
                        <?php 
                            for($i=1;$i<=$pages ; $i++){
                        ?>
                            <a href="info-estimasi2.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
                        <?php
                            }
                        ?>
                    </div>
                    </tfoot>
                </table>
                </div>
            </div>
            <div class="foot">
                <a href="input-estimasi.php" class=""><button class="btn btn-primary"><i class="bx bx-plus-circle">Input Estimasi</i></button></a>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>