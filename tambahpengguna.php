<?php
	include('webdb.php'); //guna file sambung ke db

	session_start(); //login berjalan
	$ic = $_SESSION['ic']; //guna data yang diambil ketika login
	$nama = $_SESSION['nama']; //guna data yang diambil ketika login
?>


<html>

	<head>
		<title>Kedai Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<center><img src="logo.gif" hight="230" width="330"/>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Tambah Pengguna</h3></center>
		<hr>
		<br><br><br><br><br><br>

	<form action="tambahpenggunapro.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
		<table align="center">
			  <tr>
				<td><div align="center"><strong>Nama</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="namapengguna" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			   <tr>
				<td><div align="center"><strong>No kad pengenalan</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="idpengguna" placeholder="Tanpa ( - )" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
				<tr>
				<td><div align="center"><strong>No Telefon</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="telpengguna" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Emel</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="emel" required="require" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Kata laluan</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="katalaluan" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
		</table>
	
		<br><br>
		<button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>Simpan &nbsp;</div></label></button>
	</form></center>
	</body>
</html>
