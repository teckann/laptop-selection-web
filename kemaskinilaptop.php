<?php
	include('webdb.php');

	session_start(); //login berjalan
	$ic = $_SESSION['ic']; //guna data yang diambil ketika login
	$nama = $_SESSION['nama']; //guna data yang diambil ketika login

	$idlaptop = $_GET['recordID']; //terima dari BUTTON

	//sambung ke db & cari data icpeserta dari jadual peserta
	$kemaskinilaptopsql = mysqli_query($conntodb,"SELECT idlaptop, laptop, ram, rom, warna, harga FROM tbl_laptop WHERE idlaptop = '$idlaptop'"); //
	//ambil 1 baris data yang sama dengan icpeserta
	$row = mysqli_fetch_array($kemaskinilaptopsql)
?>



<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="Stylesheet" href="deco.css">
		<title>Laptop Batu Pahat</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<center><img src="logo.gif" hight="230" width="330"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Kemaskini Laptop</h3></center>
		<hr>
		<br><br><br>

		<form action="kemaskinilaptoppro.php" method="post">
			<table align="center">
				  <tr>
					<td><div align="center"><strong>Laptop</strong></div></td>
					<td><div align="center"><strong>:</strong></div></td>
					<td><div align="center"><input type="text" name="laptop" style="border-radius: 18px" value="<?php echo $row['laptop']; ?>"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center"><strong>Ram</strong></div></td>
					<td><div align="center"><strong>:</strong></div></td>
					<td><div align="center"><input type="text" name="ram" style="border-radius: 18px" value="<?php echo $row['ram']; ?>"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center"><strong>Rom</strong></div></td>
					<td><div align="center"><strong>:</strong></div></td>
					<td><div align="center"><input type="text" name="rom" style="border-radius: 18px" value="<?php echo $row['rom']; ?>"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center"><strong>Warna</strong></div></td>
					<td><div align="center"><strong>:</strong></div></td>
					<td><div align="center"><input type="text" name="warna" style="border-radius: 18px" value="<?php echo $row['warna']; ?>"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center"><strong>Harga</strong></div></td>
					<td><div align="center"><strong>:</strong></div></td>
					<td><div align="center"><input type="text" name="harga" style="border-radius: 18px" value="<?php echo $row['harga']; ?>"/>&nbsp; </div></td>
				  </tr>
				 
				  <input type="hidden" name="idlaptop" value="<?php echo $row['idlaptop']; ?>">    
			</table>
			
			<br><br>
			<center><button class="kemaskini" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>Kemaskini &nbsp;</div></label></button></center>
		</form>

		<?php mysqli_close($conntodb); ?>
	</body>
</html>
