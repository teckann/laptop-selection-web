<?php

include('webdb.php'); //guna file sambung ke db

?>


<html>
	<head>
		<title>Kedai Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<?php include 'linkindex.php';?>
		<center><img src="logo.gif" hight="140" width="240"/>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Tambah Pelanggan</h3></center>
		<hr>
		<br><br>

		<form action="tambahbelipro.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
			<table align="center">
			  <tr>
				<td><div><strong>Nama</strong></div></td>
				<td><div><strong>:</strong></div></td>
				<td><div><input type="text" name="nama" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div><strong>No kad pengenalan</strong></div></td>
				<td><div><strong>:</strong></div></td>
				<td><div><input type="text" name="ic" placeholder="Tanpa ( - )" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div><strong>No telefon</strong></div></td>
				<td><div><strong>:</strong></div></td>
				<td><div><input type="text" name="tel" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			 
			  <tr>
				<td><div><strong>Emel</strong></div></td>
				<td><div><strong>:</strong></div></td>
				<td><div><input type="text" name="emel" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div><strong>Kata laluan</strong></div></td>
				<td><div><strong>:</strong></div></td>
				<td><div><input type="text" name="katalaluan" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			</table>
			
			<br>
			<center><button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Simpan &nbsp;</div></label></button></center>
		</form>
	</body>
</html>
