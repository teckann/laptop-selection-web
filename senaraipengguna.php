<?php
	include('webdb.php');
	
	$senaraipenggunasql = mysqli_query($conntodb,"SELECT * FROM tbl_pengguna");
?>

<html>
<head>
	<link rel="Stylesheet" href="deco.css">
	<title>Laptop Batu Pahat</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Senarai Pengguna</h3></center>
	<hr>
	<br><br>

	<center><table border="1" width="1250">
	
		<tr align="center">
			<th>No.Kad Pengurus</th>
			<th>Nama</th>
			<th>No Telefon</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($senaraipenggunasql)){ ?>
	
		<tr class="data" align="center">
			<td><?php echo $row['idpengguna']; ?></td>
			<td><?php echo $row['namapengguna']; ?></td>
			<td><?php echo $row['telpengguna']; ?></td>
		</tr>
		<?php }; ?>

	</table></center>
	<?php mysqli_close($conntodb); ?>
</body>

</html>