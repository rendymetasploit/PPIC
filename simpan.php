<?php
include "config/koneksitwo.php";
include "config/koneksithree.php";

$TransactionNo = $_POST['TransactionNo'];
$WorkOrderNo = $_POST['WorkOrderNo'];
$TransactionDate = $_POST['TransactionDate'];
$DivisionID = $_POST['DivisionID'];
$PartID = $_POST['PartID'];
$QtyPassed = $_POST['QtyPassed'];
$WarehouseID     = $_POST['WarehouseID'];
$QtyReject = $_POST['QtyReject'];
$WarehouseIDR = $_POST['WarehouseIDR'];
$CreatedBy = $_POST['DivisionID'];
$EntryTime = $_POST['EntryTime'];
$Information = $_POST['Information'];

//Table Direct Production Detail

$TransactionNo_bom = $_POST['TransactionNo_bom'];
$PartID_bom = $_POST['PartID_bom'];
$WarehouseID_bom = $_POST['WarehouseID_bom'];
$QtyActual_bom = $_POST['QtyActual_bom'];
$Information_bom = $_POST['Information_bom'];

$query1 = "INSERT INTO pr VALUES
		  ('',	
		   '".$TransactionNo."',
		   '".$TransactionDate."',
		   '".$DivisionID."',
		   'D-PROD')";
		   mysqli_query($con, $query1);

$tsql1 = "Insert into DirectProductionHeader (WorkOrderNo, TransactionNo, TransactionDate, DivisionID, PartID, QtyPassed, WarehouseID, QtyReject, WarehouseIDR, CreatedBy, EntryTime, Information) values
											 ('$WorkOrderNo',
											  '$TransactionNo',
											  '$TransactionDate',
											  '$DivisionID',
											  '$PartID',
											  '$QtyPassed',
											  '$WarehouseID',
											  '$QtyReject',
											  '$WarehouseIDR',
											  '$CreatedBy',
											  '$EntryTime',
											  '$Information')";
												//echo $tsql1."</br>";
$stmt = sqlsrv_query( $conn, $tsql1);

foreach($PartID_bom as $key=>$item){
$tsql2 = "Insert into DirectProductionDetail (TransactionNo, PartID, WarehouseID, QtyActual, Information) values
											 ('$TransactionNo_bom',
											  '$item',
											  '$WarehouseID_bom[$key]',
											  '$QtyActual_bom[$key]',
											  '$Information_bom[$key]')";
											//echo $tsql2."</br>";
$stmt = sqlsrv_query( $conn, $tsql2);
}
if( $stmt === false ) {
echo "Error in executing query.</br>";
die( print_r( sqlsrv_errors(), true));
}

echo "<script>alert('Data berhasil disimpan, Lanjut STORE PROCEDURE');window.location = 'stprocalter?TransactionNo=$TransactionNo';</script>";
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);

?>