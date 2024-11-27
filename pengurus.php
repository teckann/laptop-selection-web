<?php
	include('webdb.php');
	
	$senaraipengurussql = mysqli_query($conntodb,"SELECT * FROM tbl_pengurus");
?>

<html>
<head>
	<link rel="Stylesheet" href="deco.css">
	<title>PENGURUS</title>
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Senarai Pengurus</h3></center>
	<hr>
	<br><br>

	<center><table border="1" width="1250">
	
		<tr align="center">
			<th>No.Kad Pengurus</th>
			<th>Nama</th>
			<th>No Telefon</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($senaraipengurussql)){ ?>
	
		<tr class="data" align="center">
			<td><?php echo $row['idpengurus']; ?></td>
			<td><?php echo $row['namapengurus']; ?></td>
			<td><?php echo $row['telpengurus']; ?></td>
		</tr>
		<?php }; ?>

	</table></center>
	<?php mysqli_close($conntodb); ?>
</body>

</html>