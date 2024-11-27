<?php
	include('webdb.php');

	session_start(); 
	$ic = $_SESSION['ic'];
	$nama = $_SESSION['nama'];
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
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Tambah Staf Kedai</h3></center>
	<hr>
	<br><br><br>

	<form action="tambahSTAFpro.php" method="post" name="form1" id="form1" enctype="multipart/form-data" align="center">
		<table align="center">
		  <tr>
			<td><div><strong>Nama</strong></div></td>
			<td><div><strong>:</strong></div></td>
			<td><div><input type="text" name="namastaf" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
		  </tr>
		  
		  <tr>
			<td><div><strong>No kad pengenalan</strong></div></td>
			<td><div><strong>:</strong></div></td>
			<td><div><input type="text" name="idstaf" placeholder="Tanpa ( - )" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
		  </tr>
		  
		  <tr>
			<td><div><strong>No telefon</strong></div></td>
			<td><div><strong>:</strong></div></td>
			<td><div><input type="text" name="notel" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
		  </tr>
		 
		  <tr>
			<td><div><strong>Kedai</strong></div></td>
			<td><div><strong>:</strong></div></td>
			<td><div><input type="text" name="kedai" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
		  </tr>
		  
		  <tr>
			<td><div><strong>Kata laluan</strong></div></td>
			<td><div><strong>:</strong></div></td>
			<td><div><input type="text" name="katalaluan" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
		  </tr> 
		</table>
		
		<br><br>
		<button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>Simpan &nbsp;</div></label></button>
	</form></center>

</body>
</html>