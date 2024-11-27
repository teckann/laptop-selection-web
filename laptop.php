<?php
	include('webdb.php');
	
	$senarailaptopsql = mysqli_query($conntodb,"SELECT * FROM tbl_laptop INNER JOIN tbl_jenama ON tbl_jenama.idjenama = tbl_laptop.idjenama ORDER BY tbl_laptop.harga"); 
	                                                                         /* gabung dua table (tbl_laptop & tbl_jenama DESC)*/
?>

<html>
<head>
	<link rel="Stylesheet" href="deco.css">
	<title>SENARAI LAPTOP</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Senarai Laptop</h3></center>
	<hr>
	<br><br>
	
	<center><table border="1" width="1250">
	
		<tr align="center">
			<th>ID Laptop</th>
			<th>Nama Laptop</th>
			<th>Ram</th>
			<th>Rom</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Jenama</th> <!-- ikut nama tbl_jenama -->
		</tr>
		<?php while ($row = mysqli_fetch_array($senarailaptopsql)){ ?>
	
		<tr class="data" align="center">
			<td><?php echo $row['idlaptop']; ?></td>
			<td><?php echo $row['laptop']; ?></td>
			<td><?php echo $row['ram']; ?></td>
			<td><?php echo $row['rom']; ?></td>
			<td><?php echo $row['warna']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><img src="<?php echo $row['gambar']; ?>" height="110" width="120"/></td>
			<td><?php echo $row['jenama']; ?></td> <!-- ikut nama tbl_jenama -->
		</tr>
		<?php }; ?>

	</table></center>
	<?php mysqli_close($conntodb); ?>
</body>

</html>