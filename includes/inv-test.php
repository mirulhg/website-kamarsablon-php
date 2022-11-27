<?php

/* UNTUK MENGINSERT DATA INVOICE */
$invoice = mysqli_query("INSERT INTO tbl_invoice (customer_id, status, invoicedate, payment_method, total,  duedate) 
                        VALUES ('$client', '$status', '$date', '$method', '$duedate')") or die ("Failed to connect invoice query ". mysqli_error());

/* UNTUK MENGINSERT DATA ORDER */
$order = mysqli_query("INSERT INTO tbl_order (customer_id,  status, total, orderdate, ) 
                        VALUES ('$client', '$status', '$total', '$date')") or die ("Failed to connect order query ".mysqli_error());

/* UNTUK MELIHAT DATA INVOICE */
$invoice_query  = mysqli_query("SELECT * FROM tbl_invoice ORDER BY 'id' DESC LIMIT 1" .mysqli_error());
$invoice_result = mysqli_fetch_assoc($invoice_query);
$invoice_id     = $invoice_result['id'];

/* UNTUK MELIHAT DATA ORDERAN */
$order_query   = mysqli_query("SELECT * FROM tbl_order ORDER BY id DESC LIMIT 1" .mysqli_error());
$order_result  = mysqli_fetch_assoc($order_query);
$order_id      = $order_result['id'];

/* UNTUK MENGEDIT DATA */
$invoice       = mysqli_query("UPDATE tbl_invoice SET order_id = $order_id ORDER BY id DESC LIMIT 1") or die ("Failed to connect invoice query 1 " .mysqli_error());
$order         = mysqli_query("UPDATE tbl_order SET invoice_id = $invoice_id ORDER BY id DESC LIMIT 1") or die ("Failed to connect order query 1" .mysqli_error());