<?php

include('webdb.php');

session_start(); //login berjalan
$ic = $_SESSION['ic']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login

$idlaptop = $_POST['idlaptop'];//terima dari BORANG


//delete peserta berdasarkan ic
mysqli_query($conntodb,"DELETE FROM tbl_laptop WHERE idlaptop = '$idlaptop'");

mysqli_close($conntodb);
?>
<script language="javascript">
		alert("Laptop telah dipadam");
    	window.location.href = "senarailaptop.php"; 
</script>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>KASUT IPOH</title>
	</head>

	<body>
	</body>
</html>
