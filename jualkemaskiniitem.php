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

$iditem = $_GET['recordID']; //terima dari BUTTON

//sambung ke db & cari data
$kemaskiniitemsql = mysqli_query($conntodb,"SELECT * FROM tbl_laptop WHERE idlaptop = '$iditem'");
//ambil 1 baris data yang sama
$row = mysqli_fetch_array($kemaskiniitemsql)

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
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Kemaskini Laptop</h3></center>
		<hr>
		<br><br>

		<form action="jualkemaskiniitempro.php" method="post">
			<table align="center">
			  <tr>
				<td><div align="center"><strong>Gambar</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><img src="<?php echo $row['gambar']; ?>" style="border-radius: 18px" height="110" width="120"/>&nbsp; </div></td>
			  </tr>
			  <tr>
				<td><div align="center"><strong>Laptop</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input style="border-radius: 18px" type="text" name="item" value="<?php echo $row['laptop']; ?>"/>&nbsp; </div></td>
			  </tr>
			  <tr>
				<td><div align="center"><strong>Warna</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input style="border-radius: 18px"type="text" name="warna" value="<?php echo $row['warna']; ?>"/>&nbsp; </div></td>
			  </tr>
			 
			  <input type="hidden" name="iditem" value="<?php echo $row['idlaptop']; ?>">  
			</table>
			
			<br>
			<center><button class="kemaskini" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kemaskini &nbsp;</div></label></button></center>
		</form>

		<?php mysqli_close($conntodb); ?>
	</body>
</html>
