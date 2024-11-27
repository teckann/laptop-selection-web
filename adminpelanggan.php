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
$senaraisql = mysqli_query($conntodb,"SELECT * FROM tbl_pengguna WHERE jenis = 'beli'");

?>

<html>
	<head>
		<title>Laptop Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<?php include 'linkadmin.php';?>
		<center><img src="logo.gif" hight="140" width="240"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Pelanggan</h3></center>
		<hr>
		<br>
		
		<center>
			<div class="w3-row">
				<div class="w3-half w3-container w3-pale-red w3-padding-24 w3-margin-bottom">
					<!--Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan --> 
				<?php include('pembesar.php'); ?>
				</div>
			</div>

			<form action='' method='POST'>
				Nama Penjual: &nbsp;
				<input type='text' name='nama' style="border-radius: 18px">
				&nbsp;
				<input class="search" type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cari &nbsp;' style="border-radius: 18px">
			</form>
		</center>
		<br>

		<center><table class="table" border="1" width="90%" id="pembesar">
			<tr align="center">
			  <th>No Kad Pengenalan</th>
			  <th>Nama</th>
			  <th>No Telefon</th>
			  <th>Emel</th>
			  <th>Katalaluan</th>
			</tr>
			
			<?php
				# syarat tambahan yang akan dimasukkan dalam arahan(query) senarai pembeli
				$tambahan="where jenis='beli'";
				if(!empty($_POST['nama']))
				{
					$tambahan= "WHERE nama like '%".$_POST['nama']."%' AND jenis='beli'";
				}

				# arahan query untuk mencari senarai nama pembeli
				$papar="SELECT * FROM tbl_pengguna $tambahan ";

				# laksanakan arahan mencari data pembeli
				$senaraipilihan = mysqli_query($conntodb,$papar);

				# Mengambil data  yang ditemui 
				  while($m = mysqli_fetch_array($senaraipilihan))
				  {
					# memaparkan senarai nama dalam jadual
					echo "<tr>
					<td>".$m['idpengguna']."</td>
					<td>".$m['nama']."</td>
					<td>".$m['tel']."</td>
					<td>".$m['emel']."</td>
					<td>".$m['katalaluan']."</td>
				";
				  }
			?>
		</table></center>

		<?php mysqli_close($conntodb); ?>
	</body>
</html>