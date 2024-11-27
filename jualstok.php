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
	
	$stoksql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.idlaptop, tbl_laptop.laptop, tbl_laptop.ram, tbl_laptop.rom, tbl_laptop.warna, tbl_laptop.gambar, tbl_pengguna.idpengguna, tbl_pengguna.kedai, tbl_jenama.jenama FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama INNER JOIN tbl_pengguna ON tbl_pengguna.idpengguna = tbl_stok.idpengguna WHERE tbl_pengguna.idpengguna = '$id' ORDER BY tbl_stok.harga");
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
			<th>Maklumat</th> <!-- ikut nama tbl_jenama -->
		</tr>

		<?php while ($row = mysqli_fetch_array($stoksql)){ ?>
		<tr class="data" align="center">
			<td width='60%'><img src="<?php echo $row['gambar']; ?>" width="200px"/></td>
			<td>
				<h2><b><?php echo $row['jenama']; ?><br> <!-- ikut nama tbl_jenama --></b></h2>
				<b>Laptop :</b>		<?php echo $row['laptop']; ?><br>
				<b>Ram :</b>		<?php echo $row['ram']; ?><br>
				<b>Rom :</b>		<?php echo $row['rom']; ?><br>
				<b>Warna :</b>		<?php echo $row['warna']; ?><br>
				<b>Harga :</b>		<?php echo $row['harga']; ?><br>
				<b>Jumlah :</b>		<?php echo $row['jumlah']; ?><br>
				<b>Lokasi :</b>		<?php echo $row['kedai']; ?><br>
				<br>
				<a href="jualkemaskinistok.php?recordID=<?php echo $row['idstok'];?>"><button type="button" class="kemaskini" style="border-radius: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kemaskini &nbsp; </button></a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a href ="jualpadamstok.php?recordID=<?php echo $row ['idstok'];?>"><button type="button" class="padam" style="border-radius: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Padam &nbsp; </button></a>
			</td>
		</tr>
		<?php }; ?>

	</table></center>
	
	<?php mysqli_close($conntodb); ?>
</body>

</html>

