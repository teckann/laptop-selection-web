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

$harga = $_POST['harga'];//terima dari BORANG
$stok = $_POST['stok'];//terima dari BORANG
$idstok = $_POST['idstok'];//terima dari BORANG



//kemaskini
mysqli_query($conntodb,"UPDATE tbl_stok SET jumlah = '$stok', harga = '$harga' WHERE idstok = '$idstok'");

mysqli_close($conntodb);//tutup sambungan ke db
?>

<script language="javascript">
		alert("Stok ini telah dikemaskini");
    	window.location.href = "jualstok.php"; 
</script>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
</body>
</html>
