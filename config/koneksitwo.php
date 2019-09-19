<?php
date_default_timezone_set('Asia/Jakarta');
$datetime=date ('Y-m-d h:i:s');
$date=date ('Y-m-d');
$time=date ('h:i:s A');

$serverName="192.168.0.60\SQLEXPRESS";
$connectionInfo = array( "Database"=>"DPI", "UID"=>"admin", "PWD"=>"dragon");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    // echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>