<?php

include('webdb.php');//guna file sambung ke db

session_start(); //login berjalan
$id = $_SESSION['id']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login
$jenis = $_SESSION['jenis']; //guna data yang diambil ketika login

if(!isset($_SESSION['id']))
{
header("Location: index.php"); 
} 

//buat sambungan ke db & ambil data2
$senaraijenamasql = mysqli_query($conntodb,"SELECT * FROM tbl_jenama");

?>

<html>
	<head>
		<title>Laptop Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
		<style>
			tr:hover {
				background-color: #C0C0C0;
				color: black;
			}
		</style>
	</head>


	<body>
		<?php include 'linkadmin.php';?>
	<br />

	<center><img src="logo.gif" hight="140" width="240"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Jenama</h3></center>
	<hr>
	<br>
	
	<center>
		<div class="w3-row">
			<div class="w3-half w3-container w3-pale-red w3-padding-24 w3-margin-bottom">
				<!--Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan --> 
			<?php include('pembesar.php'); ?>
			</div>
		</div>
	<br>
		<form action='' method='POST'>
			Jenama : &nbsp;
			<input type='text' name='jenama' style="border-radius: 18px">
			&nbsp;
			<input class="search" type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cari &nbsp;' style="border-radius: 18px">
		</form>
	</center>
	<br>
	<center><table class="table" border="1" width="90%" id="pembesar">
			<tr align="center">
			  <th>Id Jenama</th>
			  <th>Jenama</th>
			  <th class="arahan">Arahan</th>
			</tr>
			
			<?php
				# syarat tambahan yang akan dimasukkan dalam arahan(query) senarai pembeli
				$tambahan="";
				if(!empty($_POST['jenama']))
				{
					$tambahan= "WHERE jenama like '%".$_POST['jenama']."%'";
				}

				# arahan query untuk mencari senarai nama pembeli
				$papar="SELECT * FROM tbl_jenama $tambahan ";

				# laksanakan arahan mencari data pembeli
				$senaraipilihsql = mysqli_query($conntodb,$papar);

				# Mengambil data  yang ditemui 
				  while($m = mysqli_fetch_array($senaraipilihsql))
				  {
					# memaparkan senarai nama dalam jadual
					echo "<tr>
					<td>".$m['idjenama']."</td>
					<td>".$m['jenama']."</td>
				";
					# memaparkan navigasi untuk hapus data pembeli
					 echo"<td width='17%'>

				   <a href='adminpadamjenamapro.php?idjenama=".$m['idjenama']."'
					onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\">
					<button class='padam' style='border-radius: 18px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Padam &nbsp;</button></a>

				   </td>
				   </tr>";
				 }
			?>
		</table></center>
		<br><br>
	<?php mysqli_close($conntodb); ?>
	</body>
</html>