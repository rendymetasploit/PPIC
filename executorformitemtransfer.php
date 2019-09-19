<?php
include "config/koneksifor.php";

$Date1 = $_POST['Date1'];

$sql1 = "exec trans_directproductionhddragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql1);

$sql2 = "exec trans_directproductiondtdragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql2);

$sql3 = "exec trans_directproductionpartcostdragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql3);

$sql4 = "exec trans_directitemtransferhddragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql4);

$sql5 = "exec trans_directitemtransferdtdragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql5);

$sql6 = "exec trans_bukustockdragon @transactiondate = '$Date1'";
$stmt = sqlsrv_query( $conn, $sql6);

if( $stmt === false ) {
echo "Error in executing query.</br>";
die( print_r( sqlsrv_errors(), true));
}

echo "<script>alert('Data berhasil disimpan');window.location = 'manufac';</script>";
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);

?>