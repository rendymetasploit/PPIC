<?php 
require_once('koneksithree.php');
session_start();
if($_SESSION['level']!="admin"){
     header('location:logout.php');//jika bukan admin jangan lanjut
}
else {
if($_SESSION['kode_user']==0 AND $_SESSION['level']!="admin"){
  header('location:logout.php');
}
else{
if (empty($_SESSION['kode_user']) AND empty($_SESSION['id']) AND empty($_SESSION['nama']) AND empty($_SESSION['kode'])  AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<link href=css/style.css rel=stylesheet type=text/css>";
  echo "<div class='error msg'>Untuk mengakses halaman ini anda harus login.</div>";
}
    else{

	
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
require_once('koneksithree.php');
    function getRomawi($bln){
        switch ($bln){
        case 1: 
            return "I";
        break;
        case 2:
            return "II";
        break;
        case 3:
            return "III";
        break;
        case 4:
            return "IV";
        break;
        case 5:
            return "V";
        break;
        case 6:
            return "VI";
        break;
        case 7:
            return "VII";
        break;
        case 8:
            return "VIII";
        break;
        case 9:
            return "IX";
        break;
        case 10:
            return "X";
        break;
        case 11:
            return "XI";
        break;
        case 12:
            return "XII";
        break;
        }
    }

    $bulan    = date('n');
    $tahun     = date ('Y');
    $div    	= $_SESSION['kode'];
	$romawi    = getRomawi($bulan);
    $nomor = "/PWO-PROD/".$div."/".$romawi."/".$tahun;
    
    // membaca kode / nilai tertinggi dari penomoran yang ada didatabase berdasarkan tanggal
    //$query = "SELECT max(no_pr) as maxKode FROM pr WHERE month(tgl_pr)='$bulan' AND kode='$div' AND sp='PR-PARTS'";
    $query = "SELECT max(no_pr) as maxKode FROM pr WHERE kode='$div' AND sp='PWO-PROD'";
    //echo $query;exit;
	$hasil = mysqli_query($con, $query);
    $data  = mysqli_fetch_array($hasil);
    $no= $data['maxKode'];
    $noUrut= $no + 1;
    
    //membuat Nomor Surat Otomatis dengan awalan depan 0 misalnya , 01,02 
    //jika ingin 003 ,tinggal ganti %03
    $kode =  sprintf("%07s", $noUrut);
    $nomorbaru = $kode.$nomor;
    //echo  $nomorbaru;
}}}	
?>