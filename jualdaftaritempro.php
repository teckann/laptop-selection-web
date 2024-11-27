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

$iditem = $_POST['iditem'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];


//masukkan data
mysqli_query($conntodb,"INSERT INTO tbl_stok (idlaptop, idpengguna, jumlah, harga) VALUES ('$iditem', '$id', '$stok', '$harga')");

mysqli_close($conntodb);
?>
<script language="javascript">
		alert("Item telah didaftarkan");
    	window.location.href = "jualindex.php";
</script>



<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<p>&nbsp;</p>

</body>
</html>