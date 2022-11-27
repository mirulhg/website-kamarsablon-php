<?php 

include_once 'includes/dbh.inc.php';

if (isset($_GET['op'])) {
    $op = $_GET['op'];
}else {
    $op = "";
}

if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "DELETE FROM tbl_invoice WHERE inv_id = '$id'";
    $query1         = mysqli_query($conn,$sql1);
    if($query1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}

if($op == 'print') {
    $id        = $_GET['id'];
    $sql       = "SELECT * FROM tbl_invoice WHERE inv_id = '$id';";
            $query  = mysqli_query($conn, $sql);
            $result  = mysqli_fetch_array($query);
                $nama           = $result["nama"];
                $alamat         = $result["alamat"];
                $itemId         = $result['productCode'];
                $itemName       = $result['productName'];
                $quantity       = $result['quantity'];
                $price          = $result['price'];
                $total          = $result['total'];
                $subTotal       = $result["subTotal"];
                $taxAmount      = $result["taxAmount"];
                $totalRate      = $result["totalRate"];
                $taxRate        = $result["taxRate"];
                $totalAftertax  = $result["totalAftertax"];
                $amountPaid     = $result["amountPaid"];
                $amountDue      = $result["amountDue"];
                $note           = $result["notes"];
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Invoice List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bonxicons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-invoice.css">
</head>
<body>
    <?php 
    
    include_once 'sidebar-index1.php';
    
    ?>
    <script src="js/invoice.js"></script>
	<div class="container">	
        <div class="head">
            <h2 class="title">Invoice System</h2>
        </div>
        <div class="card">
            <div class="card-head">
                <a href="create_invoice.php"><button class="btn btn-primary"><i class="bx bx-plus-circle">Input Invoice</i></button></a>
            </div>
            <div class="card-body">
                <table id="data-table" class="table table-condensed table-striped table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th>No.</th>
                        <th>Invoice No.</th>
                        <th>Customer Name</th>
                        <th>Invoice Total</th>
                        <th>Print</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php 

                        $halaman    = 5;
                        $page       = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai      = ($page>1) ? ($page*$halaman) - $halaman : 0;

                        $hasil      = mysqli_query($conn, "SELECT * FROM tbl_pesanan");
                        $total      = mysqli_num_rows($hasil);
                        $pages      = ceil($total/$halaman);
                        
                        $sql    = "SELECT * FROM tbl_invoice LIMIT $mulai, $halaman";
                        $query  = mysqli_query($conn, $sql);
                        $nomor  = $mulai+1;
                        while ($result  = mysqli_fetch_array($query)) {
                            $id     = $result['inv_id'];
                            
                            echo "
                            <tr>
                            <td scope='row'>".$nomor++."</td>
                            <td scope='row'>".$result['inv_itemId']."</td>
                            <td scope='row'>".$result['inv_nama']."</td>
                            <td scope='row'>".$result['inv_amountDue']."</td>
                            <td><a href='print_invoice.php?op=print&id=".$result['inv_id']."' title='Print Invoice'><span class='bx bx-printer'></span></a></td>
                            <td><a href='invoice-list.php?op=delete&id=".$result['inv_id']."' onclick='return confrim('Konfirmasi Hapus Data Invoice?')' class='deleteInvoice'  title='Delete Invoice'><span class='bx bxs-eraser'></span></a></td>
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
                        <a href="invoice-list.php?halaman=<?php echo $i; ?>" style="text-decoration:none">   <u><?php echo $i; ?></u></a>
                    <?php
                        }
                    ?>
                    </div>
                    </tfoot>
                </table>
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