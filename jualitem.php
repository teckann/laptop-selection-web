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
	
	$stoksql = mysqli_query($conntodb,"SELECT * FROM tbl_laptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama WHERE idlaptop NOT IN (SELECT idlaptop FROM tbl_stok WHERE idpengguna = '$id')");
	                                                        /* gabung dua table (tbl_stok & tbl_laptop & tbl_jenama)*/



?>

<html>
<head>
	<link rel="Stylesheet" href="deco.css">
	<title>Laptop Batu Pahat</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
<?php include 'linkjual.php';?>
<br />
	<center><img src="logo.gif" hight="140" width="240"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Laptop</h3></center>
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

	
	<center><table class="table" border="1" width="90%" id="pembesar">
	
		<tr align="center">
			<th>Gambar</th>
			<th>Maklumat</th>
		</tr>

		<?php while ($row = mysqli_fetch_array($stoksql)){ ?>
		<tr class="data" align="center">
			<td width='60%'><img src="<?php echo $row['gambar']; ?>" width="200px"/></td>
			<td>
				<h2><b><?php echo $row['jenama']; ?><br> <!-- ikut nama tbl_jenama --></b></h2>
				<b>Laptop :</b>		<?php echo $row['laptop']; ?><br>
				<b>Ram :</b>		<?php echo $row['ram']; ?><br>
				<b>Rom :</b>		<?php echo $row['rom']; ?><br>
				<b>Warna :</b> 		<?php echo $row['warna']; ?><br>
				<br>
				<a href="jualdaftaritem.php?recordID=<?php echo $row['idlaptop'];?>"><button class="simpan" type="button" style="border-radius: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Daftar &nbsp;</button></a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href ="jualkemaskiniitem.php?recordID=<?php echo $row ['idlaptop'];?>"><button class="kemaskini" type="button" style="border-radius: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kemaskini &nbsp;</button></a>
			</td>
		</tr>
		<?php }; ?>

	</table></center>
	
	<?php mysqli_close($conntodb); ?>
</body>

</html>

