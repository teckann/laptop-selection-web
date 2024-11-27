<?php
	include('webdb.php');
	
	$stoksql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.idlaptop, tbl_laptop.laptop, tbl_laptop.ram, tbl_laptop.rom, tbl_laptop.warna, tbl_laptop.gambar, tbl_pengguna.idpengguna, tbl_pengguna.kedai, tbl_jenama.jenama FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama INNER JOIN tbl_pengguna ON tbl_pengguna.idpengguna = tbl_stok.idpengguna ORDER BY tbl_stok.harga");
	                                                        /* gabung dua table (tbl_stok & tbl_laptop & tbl_jenama)*/



?>

<html>
<head>
	<link rel="Stylesheet" href="deco.css">
	<title>Laptop Batu Pahat</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
<?php include 'linkadmin.php';?>
<br />
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Laptop</h3></center>
	<hr>
	<br>
	
	<center><form action="" method="POST">
			Rom :
			<select name="rom" style="border-radius: 18px">
				<option selected disable value>Rom Laptop</option>
					<?php
						$romsql = mysqli_query($conntodb,"SELECT rom FROM tbl_laptop GROUP BY rom");
						while ($data = mysqli_fetch_array($romsql))
						{
						echo "<option value='".$data['rom']."'>".$data['rom']."</option>";
						}
					?>
			</select>
			
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <!-- untuk space -->
			
			Jenama :
			<select name="jenama" style="border-radius: 18px">
				<option selected disable value>Jenama Laptop</option>
					<?php
						$jenamasql = mysqli_query($conntodb,"SELECT jenama FROM tbl_jenama GROUP BY jenama");
						while ($data = mysqli_fetch_array($jenamasql))
						{
						echo "<option value='".$data['jenama']."'>".$data['jenama']."</option>";
						}
					?>
			</select>
			
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			
			<input class="search" type="submit" name="submit" value="Papar  " style="border-radius: 18px" />
            
            <input type="button" value="Print" onClick="window.print()">
		</form></center>
		<br>
		
		
		
		
		<?php
			if(!empty($_POST)){

			//tapis
			if(!empty($_POST['rom']) && !empty($_POST['jenama'])){
					$senaraipilihsql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.idlaptop, tbl_laptop.laptop, tbl_laptop.ram, tbl_laptop.rom, tbl_laptop.warna, tbl_laptop.gambar, tbl_pengguna.idpengguna, tbl_pengguna.kedai, tbl_jenama.jenama FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama INNER JOIN tbl_pengguna ON tbl_pengguna.idpengguna = tbl_stok.idpengguna WHERE tbl_laptop.rom = '$_POST[rom]' AND tbl_jenama.jenama = '$_POST[jenama]' ORDER BY tbl_stok.harga");
				}
			else if(!empty($_POST['rom']) || !empty($_POST['jenama'])){
					$senaraipilihsql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.idlaptop, tbl_laptop.laptop, tbl_laptop.ram, tbl_laptop.rom, tbl_laptop.warna, tbl_laptop.gambar, tbl_pengguna.idpengguna, tbl_pengguna.kedai, tbl_jenama.jenama FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama INNER JOIN tbl_pengguna ON tbl_pengguna.idpengguna = tbl_stok.idpengguna WHERE tbl_laptop.rom = '$_POST[rom]' OR tbl_jenama.jenama = '$_POST[jenama]' ORDER BY tbl_stok.harga");
				}
			else {
					$senaraipilihsql = mysqli_query($conntodb,"SELECT tbl_stok.idstok, tbl_stok.jumlah, tbl_stok.harga, tbl_laptop.idlaptop, tbl_laptop.laptop, tbl_laptop.ram, tbl_laptop.rom, tbl_laptop.warna, tbl_laptop.gambar, tbl_pengguna.idpengguna, tbl_pengguna.kedai, tbl_jenama.jenama FROM tbl_stok INNER JOIN tbl_laptop ON tbl_laptop.idlaptop = tbl_stok.idlaptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama INNER JOIN tbl_pengguna ON tbl_pengguna.idpengguna = tbl_stok.idpengguna ORDER BY tbl_stok.harga");
				}
		?>


		
	<center><table border="1" width="1250">
		
		<tr align="center">
			<th>Nama Laptop</th>
			<th>Jenama</th> <!-- ikut nama tbl_jenama -->
			<th>Ram</th>
			<th>Rom</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Jumlah</th>
			<th>Lokasi</th>
		</tr>
			<?php $i=1; while ($row = mysqli_fetch_array($senaraipilihsql)){ ?>
	
		<tr class="data" align="center">
			<td><?php echo $row['laptop']; ?></td>
			<td><?php echo $row['jenama']; ?></td> <!-- ikut nama tbl_jenama -->
			<td><?php echo $row['ram']; ?></td>
			<td><?php echo $row['rom']; ?></td>
			<td><?php echo $row['warna']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><img src="<?php echo $row['gambar']; ?>" height="110" width="120"/></td>
			<td><?php echo $row['jumlah']; ?></td>
			<td><?php echo $row['kedai']; ?></td>
		</tr>
		<?php $i++; }} else{ ?>

	</table></center>
	
	
	
	<center><table border="1" width="1250">
	
		<tr align="center">
			<th>Nama Laptop</th>
			<th>Jenama</th> <!-- ikut nama tbl_jenama -->
			<th>Ram</th>
			<th>Rom</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Jumlah</th>
			<th>Lokasi</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($stoksql)){ ?>
	
		<tr align="center">
			<td><?php echo $row['laptop']; ?></td>
			<td><?php echo $row['jenama']; ?></td> <!-- ikut nama tbl_jenama -->
			<td><?php echo $row['ram']; ?></td>
			<td><?php echo $row['rom']; ?></td>
			<td><?php echo $row['warna']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><img src="<?php echo $row['gambar']; ?>" height="110" width="120"/></td>
			<td><?php echo $row['jumlah']; ?></td>
			<td><?php echo $row['kedai']; ?></td>
		</tr>
		<?php }}; ?>

	</table></center>
	
	<?php mysqli_close($conntodb); ?>
</body>

</html>

