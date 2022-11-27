<?php

include_once 'includes/dbh.inc.php';

// $nomor ="";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

if($op == 'delete'){
  $id         = $_GET['id'];
  $sql1       = "DELETE FROM tbl_pesanan WHERE psn_id = '$id'";
  $query1         = mysqli_query($conn,$sql1);
  if($query1){
      $sukses = "Berhasil hapus data";
  }else{
      $error  = "Gagal melakukan delete data";
  }
}

if ($op == 'edit') {
  $id   = $_GET['id'];
  $sql  = "SELECT * FROM tbl_pesanan WHERE psn_id = '$id';";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
            $name = $row['psn_nama'];
            $baju = $row['psn_baju'];
            $warna = $row['psn_warna'];
            $jenis = $row['psn_jenis'];
            $ukuran = $row['psn_ukuran'];
            $desain = $row['psn_desain'];
            $posisi = $row['psn_posisi'];
            $jumlah = $row['psn_jumlah'];
            $tanggal = $row['psn_tanggal'];
}


if (isset($_GET['file_id'])) {
  
  $id=$_GET['file_id'];

    $sql        = "SELECT * FROM tbl_pesanan WHERE psn_id=$id";
    $result     = mysqli_query($conn, $sql);

    $file       = mysqli_fetch_assoc($result);
    $filepath   = 'uploads/' . $file['psn_desain'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['psn_desain']));
        readfile('uploads/' . $file['psn_desain']);

        exit;
    }

  // $sql = "SELECT * FROM tbl_pesanan WHERE psn_id=$id "; // 1
  // $result = $conn->query($sql);
  // while($row = $result->fetch_assoc())
  // { 
  //     $nama   = $row['psn_nama'];
  //     $desain = $row['psn_desain'];


  // }
  
  // header("Content-type: image/png");
  // header('Content-Disposition: attachment; filename="Desain-Pesanan-'.$nama.'.png"');
  // header("Content-Transfer-Encoding: binary"); 
  // header('Expires: 0');
  // header('Pragma: no-cache');
  // header("Content-Length: ".strlen($desain));
  
  // echo $desain;
  // exit();
}

// if ($op == 'download') {
//   $id   = $_GET['id'];

//   $sql    = "SELECT * FROM tbl_pesanan WHERE psn_id=$id";
//   $query  = mysqli_query($conn, $sql);
//   $result  = mysqli_fetch_assoc($query);

//   // $stat = $conn->prepare("SELECT * FROM  tbl_pesanan WHERE id=?");
//   // $stat->bindParam(1, $id);
//   // $stat->execute();
//   // $data = $stat->fetch();

//   $file = 'uploads/'. $result['psn_desain'];

//   if(file_exists($file)) {
//       header('Content-Description: File Transfer');
//       header('Content-Type: application/octet-stream');
//       header('Content-Disposition: attachment; filename='.basename($file));
//       // header('Content-Transfer-Encoding: binary');
//       header('Expires: 0');
//       header('Cache-Control: must-revalidate');
//       header('Pragma: public');
//       header('Content-Length: '.filesize('uploads/' . $result['psn_desain']));
//       readfile($file);

//       exit;
//   } else{
//       $_SESSION['pesan']="Gambar - $filename - tidak ditemukan";
//       header("Location : ../daftar-pesan.php");
//   }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="css/style-daftar-pesan.css">
  <title>DAFTAR PESAN</title>  
</head>
  <body>
    <?php 
    
    include_once 'sidebar-index1.php';

    ?>
    <section>
      <input type="hidden" name="<?php echo $result2['usersId']; ?>">
      <div class="card">
        <div class="card-header">
          <h3>INFORMASI DAFTAR PESANAN</h5>
        </div>
      <div class="card-body mb-5 mt-3">
        <div class="overflow-x:auto;">         
        <table class="container table table-stripped table-hover table-responsive table-bordered example grid container" style="width: 100%" >
        <caption>List Pemesan</caption>
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Jenis Pakaian</th>
              <th scope="col">Warna Pakaian</th>
              <th scope="col">Ketebalan Pakaian</th>
              <th scope="col">Ukuran</th>
              <th scope="col">Desain Gambar</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Tanggal Memesan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody class="table-light">
      
            <?php

            // $batas          = 5;
            // $halaman        = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
            // $halaman_awal   = ($halaman>1) ? ($halaman * batas) - $batas : 0;

            // $previous       = $halaman - 1;
            // $next           = $halaman + 1;

            // $data           = mysqli_query($conn, "SELECT * FROM tbl_pesanan");
            // $jumlah_data    = mysqli_num_rows($data);
            // $total_halaman  = ceil($jumlah_data / $batas);

            // $data_pesanan   = mysqli_query($conn, "SELECT * FROM tbl_pesanan limit $halaman_awal, $batas");
            // $nomor          = $halaman_awal+1;

            $halaman = 5;
            $page    = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai   =($page>1) ? ($page*$halaman) - $halaman : 0;

            $hasil  = mysqli_query($conn, "SELECT * FROM tbl_pesanan");
            $total   = mysqli_num_rows($hasil);
            $pages   = ceil($total/$halaman);
            
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                $sql = "SELECT * FROM tbl_pengguna INNER JOIN tbl_pesanan ON tbl_pesanan.psn_usersId = tbl_pengguna.usersId LIMIT $mulai, $halaman";

                // $sql    = "SELECT * FROM tbl_pengguna LIMIT $mulai, $halaman";
                $result = mysqli_query($conn, $sql);
                $nomor   = $mulai+1;
                while ($result2 = mysqli_fetch_array($result)) {
                  $id       = $result2['psn_id'];
                  echo "<tr>";
                  
                  echo "<th scope='row'>".$nomor++."</th>";
                  echo "<td scope='row'>".$result2['usersName']."</td>";
                  echo "<td scope='row'>".$result2['psn_baju']."</td>";
                  echo "<td scope='row'>".$result2['psn_warna']."</td>";
                  echo "<td scope='row'>".$result2['psn_jenis']."</td>";
                  echo "<td scope='row'>".$result2['psn_ukuran']."</td>";
                  echo "<td scope='row'>".$result2['psn_desain']."</td>";
                  echo "<td scope='row'>".$result2['psn_jumlah']."</td>";
                  echo "<td scope='row'>".$result2['psn_tanggal']."</td>";
                  
                  echo "<td>";
                  echo "<div class='btn-group' role='group'>";
                  echo "<a href='edit-pesan.php?op=edit&id=".$result2['psn_id']."'><button type='button' name='edit' class='btn btn-warning btn-sm'><i class='bx bx-edit'>Edit</i></button><a/>";
                  echo "<a href='daftar-pesan.php?op=delete&id=".$result2['psn_id']."' onclick='return confrim('Konfirmasi Hapus Data?')'><button type='button' class='btn btn-danger btn-sm'><i class='bx bx-minus-circle'>Delete</i></button></a>";
                  echo "<a href='daftar-pesan.php?file_id=".$result2['psn_id']."' ><button type='button' name='download' class='btn btn-info btn-sm'><i class='bx bx-download'>Download</i></button></a>";
                  echo "</div>";
                  echo "</td>";
        
                  echo "</tr>";
                  
                }

                ?>
          
          
          </tbody>
          <tfoot>
          <div>
            Page : 
            <?php 
              for($i=1;$i<=$pages ; $i++){
            ?>
              <a href="daftar-pesan.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
            <?php
            }
            ?>
          </div>
          </tfoot>
        </table>
        </div>
      </div>
</div>
</section>
<script type="text/javascript" src="jquery.dataTables.js"></script>
<script type="text/javascript" src="dataTables.scrollingPagination.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('.example').dataTable( {
          "pagingType": "simple_incremental_bootstrap"
      } );
  } );
</script>
<script src="https://cdn.datatables.net/plug-ins/1.11.4/pagination/simple_incremental_bootstrap.js"></>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

</body>
</html>