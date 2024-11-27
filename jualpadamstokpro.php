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

$idstok = $_POST['idstok'];//terima dari BORANG


//delete
mysqli_query($conntodb,"DELETE FROM tbl_stok WHERE idstok = '$idstok'");

mysqli_close($conntodb);
?>
<script language="javascript">
		alert("Stok telah dipadam");
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
