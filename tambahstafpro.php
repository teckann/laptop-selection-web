<?php
	include('webdb.php');

	session_start();
	$ic = $_SESSION['ic'];
	$nama = $_SESSION['nama'];

	$idstaf = $_POST['idstaf'];
	$namastaf = $_POST['namastaf'];
	$notel = $_POST['notel'];
	$kedai = $_POST['kedai'];
	$katalaluan = $_POST['katalaluan'];


	//masukkan data peserta baru
	mysqli_query($conntodb,"INSERT INTO tbl_staf (idstaf, namastaf, telstaf, kedai, katalaluan) VALUES ('$idstaf', '$namastaf', '$notel', '$kedai', '$katalaluan')");

	mysqli_close($conntodb);
?>

<script language="javascript">
		alert("Staf Kedai di Batu Pahat telah ditambah");
    	window.location.href = "staf.php";
</script>


<html>

<head>
<title>KASUT Batu Pahat/title>
</head>

<body>
<p>&nbsp;</p>

</body>
</html>