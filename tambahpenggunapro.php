<?php
	include('webdb.php');

	session_start(); 
	$ic = $_SESSION['ic'];
	$nama = $_SESSION['nama'];
	
	$idpengguna = $_POST['idpengguna'];
	$namapengguna = $_POST['namapengguna'];
	$telpengguna = $_POST['telpengguna'];
	$emel = $_POST['emel'];
	$katalaluan = $_POST['katalaluan'];
	


	//masukkan data peserta baru
	mysqli_query($conntodb,"INSERT INTO tbl_pengguna (idpengguna, namapengguna, telpengguna, emel, katalaluan) VALUES ('$idpengguna', '$namapengguna', '$telpengguna', '$emel', '$katalaluan')");

	mysqli_close($conntodb);
?>

<script language="javascript">
		alert("Pengguna telah ditambah");
    	window.location.href = "login.php";
</script>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laptop Batu Pahat</title>
</head>

<body>
<p>&nbsp;</p>



</body>
</html>
