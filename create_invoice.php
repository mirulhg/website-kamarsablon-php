<?php 

require_once 'includes/dbh.inc.php';

$sql    = "SELECT * FROM tbl_pesanan WHERE psn_id";
$query  = mysqli_query($conn, $sql);
$hasil = mysqli_fetch_assoc($query);
            $pesanid     = $hasil['psn_id'];
            $tanggal     = $hasil['psn_tanggal'];
            $baju        = $hasil['psn_baju'];
            $jenis       = $hasil['psn_jenis'];
            $ukuran      = $hasil['psn_ukuran'];
            $warna       = $hasil['psn_warna'];


$sql    = "SELECT * FROM tbl_pengguna INNER JOIN tbl_pesanan ON tbl_pesanan.psn_usersId = tbl_pengguna.usersId";
$query  = mysqli_query($conn, $sql);
$hasilprd = mysqli_fetch_assoc($query);
            $id_prd         = $hasilprd['usersId'];
            $usersNama      = $hasilprd['usersName'];
            $alamat         = $hasilprd['usersAlamat'];
            $pesanid        = $hasilprd['psn_id'];
            $tanggal        = $hasilprd['psn_tanggal'];
            $baju           = $hasilprd['psn_baju'];
            $jenis          = $hasilprd['psn_jenis'];
            $ukuran         = $hasilprd['psn_ukuran'];
            $warna          = $hasilprd['psn_warna'];
            $jumlah         = $hasilprd['psn_jumlah'];

$date    = date('d-m-Y');
// $uniqid = rand(0, 99);

$getTanggal  = preg_replace("/[^0-9]/", "", $date);
$invoice_id = $pesanid.$getTanggal;

$dan          = " + ";
$getInfoPesan = $baju.$dan.$jenis.$dan.$ukuran.$dan."Warna ".$warna;

$kuantitas = $jumlah*12;


?>
<!doctype html>
<html lang="en">
<head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style-invoice.css">
</head>
<body>
<?php 
    
    include_once 'sidebar-index1.php';
    
    ?>
    <div class="container content-invoice">
        <form action="includes/create-invoice.inc.php" id="invoice-form" method="post" class="invoice-form" role="form" novalidate=""> 
            <div class="load-animate animated fadeInUp">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <h2 class="title">Invoice Kamar Sablon</h2>	
                    </div>		    		
                </div>
                <input id="currency" type="hidden" value="$">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <h3>From,</h3>
                        <label for="">Kamar Sablon</label>
                    </div>      		
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
                        <h3>To,</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" id="companyName" placeholder="Nama Perusahaan / Individual" value="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="alamat" id="address" placeholder="Alamat" value=""></textarea>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-bordered table-hover" id="invoiceItem">	
                            <tr>
                                <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                                <th width="15%">Invoice Id</th>
                                <th width="38%">Nama Item</th>
                                <th width="15%">Quantity</th>
                                <th width="15%">Price</th>								
                                <th width="15%">Total</th>
                            </tr>							
                            <tr>
                                <td><input class="itemRow" type="checkbox"></td>
                                <td><input type="text" name="productCode" id="productCode_1" class="form-control" autocomplete="off" value="<?php echo $invoice_id ?>"></td>
                                <td><input type="text" name="productName" id="productName_1" class="form-control" autocomplete="off" value=""></td>			
                                <td><input type="number" name="quantity" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                                <td><input type="number" name="price" id="price_1" class="form-control price" autocomplete="off"></td>
                                <td><input type="number" name="total" id="total_1" class="form-control total" autocomplete="off"></td>
                            </tr>						
                        </table>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                        <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
                    </div> -->
                </div>
                <div class="row">	
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h3>Notes: </h3>
                        <div class="form-group">
                            <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <input data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">						
                        </div>
                        
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <span class="form-inline">
                            <div class="form-group">
                                <label>Subtotal: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon currency">Rp</div>
                                    <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tax Rate: &nbsp;</label>
                                <div class="input-group">
                                    <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tax Amount: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon currency">Rp</div>
                                    <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
                                </div>
                            </div>							
                            <div class="form-group">
                                <label>Total: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon currency">Rp</div>
                                    <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Amount Paid: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon currency">Rp</div>
                                    <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Amount Due: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon currency">Rp</div>
                                    <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="clearfix"></div>		      	
            </div>
        </form>			
    </div>
    <!-- Optional JavaScript -->
	<script src="js/invoice.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>