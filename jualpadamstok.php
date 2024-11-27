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

$idstok = ($_GET['recordID']); //terima dari BUTTON

//sambung ke db & cari data
$padamstoksql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.laptop, tbl_laptop.gambar FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop WHERE idstok = '$idstok'");
//ambil 1 baris data yg sama
$row = mysqli_fetch_array($padamstoksql)

?>



<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="Stylesheet" href="deco.css">
		<title>Laptop Batu Pahat</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<?php include 'linkjual.php';?>
		<center><img src="logo.gif" hight="140" width="240"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Padam Stok</h3></center>
		<hr>
		<br><br><br>

		<form action="jualpadamstokpro.php" method="post">
			<table align="center">
			  <tr>
				<td><div align="center"><strong>Laptop</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><?php echo $row['laptop']; ?>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Gambar</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><img src="<?php echo $row['gambar']; ?>" height="110" width="120"/>&nbsp; </div></td>
			  </tr>
			  
			  <input type="hidden" name="idstok" value="<?php echo $row['idstok']; ?>">    
			</table>
			
			<br>
			  <center><button class="padam" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Padam &nbsp;</div></label></button></center>
		</form>

		<?php mysqli_close($conntodb); ?>
	</body>
</html>
