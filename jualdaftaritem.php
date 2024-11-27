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



$iditem = $_GET['recordID'];



$itemsql = mysqli_query($conntodb,"SELECT * FROM tbl_laptop WHERE idlaptop = '$iditem'");
$row = mysqli_fetch_array($itemsql);

$penggunasql = mysqli_query($conntodb,"SELECT kedai FROM tbl_pengguna WHERE idpengguna = '$id'");
$row1 = mysqli_fetch_array($penggunasql);

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
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Daftar Laptop</h3></center>
		<hr>
		<br><br>

		<form action="jualdaftaritempro.php" method="post" name="form1" id="form1" enctype="multipart/form-data">
			<table align="center">
			  <tr>
				<td><div align="center"><strong>Gambar</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><img style="border-radius: 18px" src="<?php echo $row['gambar']; ?>" height="110" width="120">&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Laptop</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><?php echo $row['laptop']; ?>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Stok</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="stok" style="border-radius: 18px" />&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center"><strong>Harga</strong></div></td>
				<td><div align="center"><strong>:</strong></div></td>
				<td><div align="center"><input type="text" name="harga" style="border-radius: 18px" />&nbsp; </div></td>
			  </tr>
			  
			  <input type="hidden" name="id" value="<?php echo $id; ?>">
			  <input type="hidden" name="iditem" value="<?php echo $row['idlaptop']; ?>"> 
			</table>
			
			<br>
			<center><button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Daftar &nbsp;</div></label></button></center>
		</form>
	</body>
</html>