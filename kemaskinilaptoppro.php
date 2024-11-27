<?php

include('webdb.php');

session_start(); //login berjalan
$ic = $_SESSION['ic']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login

$idlaptop = $_POST['idlaptop'];//terima dari BORANG
$laptop = $_POST['laptop'];//terima dari BORANG
$ram = $_POST['ram'];//terima dari BORANG
$rom = $_POST['rom'];//terima dari BORANG
$warna = $_POST['warna'];//terima dari BORANG
$harga = $_POST['harga'];//terima dari BORANG



//kemaskini keputusan berdasarkan ic & laluan
mysqli_query($conntodb,"UPDATE tbl_laptop SET laptop = '$laptop', ram = '$ram', rom = '$rom', warna = '$warna', harga = '$harga' WHERE idlaptop = '$idlaptop'");

mysqli_close($conntodb);//tutup sambungan ke db
?>

<script language="javascript">
		alert("Laptop ini telah dikemaskini");
    	window.location.href = "senarailaptop.php"; 
</script>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="Stylesheet" href="deco.css">
		<title>Laptop Batu Pahat</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
	</body>
</html>
