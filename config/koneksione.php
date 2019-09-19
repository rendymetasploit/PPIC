<?php
date_default_timezone_set('Asia/Jakarta');
$datetime=date ('Y-m-d h:i:s');
$date=date ('Y-m-d');
$time=date ('h:i:s A');
$serverName="192.168.0.60\SQLEXPRESS";
$uid = "admin";
$pwd = "dragon";
$connectionInfo = array( "UID"=>$uid, "PWD"=>$pwd, "Database"=>"DRAGON", "CharacterSet"=>"UTF-8");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if($conn){
//echo "Koneksi Berhasil";
}else{
echo "koneksi gagal";
}
?>