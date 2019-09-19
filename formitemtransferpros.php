<?php
include "config/koneksitwo.php";
include "config/koneksithree.php";


$DivisionID = $_POST['DivisionID'];
$TransactionNo = $_POST['TransactionNo'];
$TransactionDate = $_POST['TransactionDate'];
$WarehouseIdFrom = $_POST['WarehouseIdFrom'];
$WarehouseIdto = $_POST['WarehouseIdto'];
$PartId = $_POST['PartId'];
$UnitId = $_POST['UnitId'];
$Prod = "D-PROD";

//$Conversion = $_POST['Conversion'];
$Notes = $_POST['Notes'];
$Qty = $_POST['Qty'];

$query1 = "INSERT INTO pr VALUES
		  ('',	
		   '".$TransactionNo."',
		   '".$TransactionDate."',
		   '".$DivisionID."',
		   'D-PROD')";
		   mysqli_query($con, $query1);
		   
$tsql1 = "Insert into DirectItemTransfer (TransactionNo, TransactionDate, WarehouseIdFrom, WarehouseIdto, UnitId, Notes, Qty) values
											 ('$TransactionNo',
											  '$TransactionDate',
											  '$WarehouseIdFrom',
											  '$WarehouseIdto',
											  '$UnitId',
											  '$Notes',
											  '$Qty')";
											//echo $tsql1."</br>"; exit;
$stmt = sqlsrv_query( $conn, $tsql1);

if( $stmt === false ) {
echo "Error in executing query.</br>";
die( print_r( sqlsrv_errors(), true));
}

echo "<script>alert('Data berhasil disimpan');window.location = 'formitemtransfer';</script>";
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);

?>