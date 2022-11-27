<?php

include_once 'includes/dbh.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-daftar-pengguna.css">
</head>
<body>
    <?php 
    
    include_once 'sidebar-index1.php';

    ?>
    <div class="card">
        <div class="head card-header">
            <h3>Daftar Pemesan</h3>
        </div>
        <div class="card-body">
            <table class="container table table-stripped table-hover table-responsive table-bordered mydatatable grid container">
                <thead class="table-dark">
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>User</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>WA</th>
                        <th scope='col'>Alamat</th>
                        <th scope='col'>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php
                    
                    $halaman    = 5;
                    $page       = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai      = ($page>1) ? ($page*$halaman) - $halaman : 0;

                    $hasil      = mysqli_query($conn, "SELECT * FROM tbl_pengguna");
                    $total      = mysqli_num_rows($hasil);
                    $pages      = ceil($total/$halaman);
                    
                    $sql    = "SELECT * FROM tbl_pengguna LIMIT $mulai, $halaman";
                    $query  = mysqli_query($conn, $sql);
                    $nomor  = $mulai+1;
                    while ($result = mysqli_fetch_array($query)) {
                        $id     = $result['usersId'];

                        echo "<tr>";

                        echo "<td scope='row'>".$nomor++."</td>";
                        echo "<th scope='row'>".$result['usersName']."</th>";
                        echo "<td scope='row'>".$result['usersUid']."</td>";
                        echo "<td scope='row'>".$result['usersEmail']."</td>";
                        echo "<td scope='row'>".$result['usersWa']."</td>";
                        echo "<td scope='row'>".$result['usersAlamat']."</td>";
                        echo "<td scope='row'>";
                        echo     "<a href='daftar-pengguna.php?op=delete&id=".$result['usersId']."'><button class='btn btn-danger' name='delete'><i class='bx bx-minus-circle'>Delete</i></button></a>";
                        echo "</td>";

                        "</tr>";

                    }
                    
                    ?>
                </tbody>
                <tfoot>
                <div>
                    Page :
                    <?php 
                    for($i=1;$i<=$pages ; $i++){
                    ?>
                    <a href="daftar-pengguna.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
                    <?php
                    }
                    ?>
                </div>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>