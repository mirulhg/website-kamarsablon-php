<?php
include_once 'includes/dbh.inc.php';
require_once 'dompdf/autoload.inc.php';

$output = '';
$count = 1;   

$id = $_GET['id'];

$sql  	= "SELECT * FROM tbl_invoice WHERE inv_id = $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query); 
	$output .= '<table width="100%" border="1" cellpadding="5" cellspacing="0">
		<tr>
		<td colspan="2" align="center" style="font-size:18px"><b>Invoice Kamar Sablon</b></td>
		</tr>
		<tr>
		<td colspan="2">
		<table width="100%" cellpadding="6">
		<tr>
		<td width="65%">
		To,<br />
		<b>RECEIVER (BILL TO)</b><br />
		Nama : '.$result['inv_nama'].' <br /> 
		Alamat : '.$result['inv_alamat'].'<br />
		</td>
		<td width="35%">         
		Invoice No. : '.$result['inv_itemId'].' <br />
		<br />
		</td>
		</tr>
		</table>
		<br />
		<table width="100%" border="1" cellpadding="3" cellspacing="0">
		<tr>
		<th align="left">Sr No.</th>
	
		<th align="left">Item Name</th>
		<th align="left">Quantity</th>
		<th align="left">Price</th>
		<th colspan="2" align="left">Actual Amt.</th> 
		</tr>';
			$output .= '
			<tr>
			<td align="left">'.$count++.'</td>
			<td align="left">'.$result['inv_produk'].'</td>
			<td align="left">'.$result['inv_quantity'].'</td>
			<td align="left">'.$result['inv_price'].'</td>
			<td colspan="2" align="left">'.$result['inv_totalAftertax'].'</td>   
			</tr>';
			$output .= '
				<tr>
				<td align="right" colspan="5"><b>Sub Total</b></td>
				<td align="left"><b>'.$result['inv_subTotal'].'</b></td>
				</tr>
				<tr>
				<td align="right" colspan="5"><b>Tax Rate :</b></td>
				<td align="left">'.$result['inv_taxRate'].'</td>
				</tr>
				<tr>
				<td align="right" colspan="5">Tax Amount: </td>
				<td align="left">'.$result['inv_taxAmount'].'</td>
				</tr>
				<tr>
				<td align="right" colspan="5">Total: </td>
				<td align="left">'.$result['inv_total'].'</td>
				</tr>
				<tr>
				<td align="right" colspan="5">Amount Paid:</td>
				<td align="left">'.$result['inv_amountPaid'].'</td>
				</tr>
				<tr>
				<td align="right" colspan="5"><b>Amount Due:</b></td>
				<td align="left">'.$result['inv_amountDue'].'</td>
				</tr>
				<tr>
				<th colspan="6"><b>NOTES</b></th></br>
				</tr>
				<tr>
				<td colspan="6"><p>'.$result['inv_note'].'</p></td>
				</tr>';
			$output .= '
				</table>
				</td>
				</tr>
				</table>';
// create pdf of invoice	
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml(html_entity_decode($output));
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream("invoice", array("Attachment" => 0));
?>   
