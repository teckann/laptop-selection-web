<?php

include('webdb.php');

session_start(); //login berjalan
$id = $_SESSION['id']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login
$jenis = $_SESSION['jenis']; //guna data yang diambil ketika login

if(!isset($_SESSION['id']))
{
header("Location: index.php"); 
} 

$item = $_POST['item'];//terima dari BORANG
$warna = $_POST['warna'];//terima dari BORANG
$iditem = $_POST['iditem'];//terima dari BORANG



//kemaskini
mysqli_query($conntodb,"UPDATE tbl_laptop SET laptop = '$item', warna = '$warna' WHERE idlaptop = '$iditem'");

mysqli_close($conntodb);//tutup sambungan ke db
?>

<script language="javascript">
		alert("Item ini telah dikemaskini");
    	window.location.href = "jualitem.php"; 
</script>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
</body>
</html>
