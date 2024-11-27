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
$senaraisql = mysqli_query($conntodb,"SELECT * FROM tbl_pengguna WHERE idpengguna = '$id'");

?>

<html>
	<head>
		<title>Laptop Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<?php include 'linkpelanggan.php';?>
		<center><img src="logo.gif" hight="140" width="240"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Profil</h3></center>
		<hr>
		<br>
		
		<center>
			<div class="w3-row">
				<div class="w3-half w3-container w3-pale-red w3-padding-24 w3-margin-bottom">
					<!--Memanggil fail butang-saiz bagi membolehkan pengguna mengubah saiz tulisan --> 
				<?php include('pembesar.php'); ?>
				</div>
			</div>
		</center>
		<br><br>

		<table class="table" border="1" width="90%" align="center" id="pembesar">
		  <tr>
			<th>No Kad Pengenalan</th>
			<th>Nama</th>
			<th>No Telefon</th>
			<th>Emel</th>
			<th>Katalaluan</th>
		  </tr>
		  
		  <?php while ($row = mysqli_fetch_array($senaraisql)) { ?>
			<tr class="data" align="center">
			  <td><?php echo $row['idpengguna']; ?>&nbsp;</td>
			  <td><?php echo $row['nama']; ?>&nbsp;</td>
			  <td><?php echo $row['tel']; ?>&nbsp;</td>
			  <td><?php echo $row['emel']; ?>&nbsp;</td>
			  <td><?php echo $row['katalaluan']; ?>&nbsp;</td>

			</tr>
			<?php } ; ?>
		</table>

		<?php mysqli_close($conntodb); ?>
	</body>
</html>