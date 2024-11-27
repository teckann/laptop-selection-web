<?php

	include('webdb.php');//guna file sambung ke db

	session_start(); 
	$ic = $_SESSION['ic'];
	$nama = $_SESSION['nama'];

	//buat sambungan ke db & ambil data2 dari jadual peserta
	$senaraipekerjasql = mysqli_query($conntodb,"SELECT * FROM tbl_staf");

?>

<html>

<head>
	<title>Laptop Batu Pahat</title>
	<link rel="stylesheet" href="deco.css">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Staf Kedai</h3></center>
	<hr>
	<br>

	<table border="1" width="1000" align="center">
		 <tr align="center">
		    <th>ID Staf</th>
			<th>Nama</th>
			<th>Telefon</th>
			<th>Kedai</th>
		 </tr>	
	  
		<?php while ($row = mysqli_fetch_array($senaraipekerjasql)) { ?>
			<tr class="data" align="center">
			  <td><?php echo $row['idstaf']; ?>&nbsp;</td>
			  <td><?php echo $row['namastaf']; ?>&nbsp;</td>
			  <td><?php echo $row['telstaf']; ?>&nbsp;</td>
			  <td><?php echo $row['kedai']; ?>&nbsp;</td>
			</tr>
		<?php } ; ?>
	</table>

	<?php mysqli_close($conntodb); ?>
</body>
</html>