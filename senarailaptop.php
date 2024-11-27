<?php
	include('webdb.php');//guna file sambung ke db

	session_start(); 
	$ic = $_SESSION['ic'];
	$nama = $_SESSION['nama'];

	//buat sambungan ke db & ambil data2 dari jadual peserta
	$senarailaptopsql = mysqli_query($conntodb,"SELECT * FROM tbl_laptop");
?>

<html>

<head>
	<title>Laptop Batu Pahat</title>
	<link rel="stylesheet" href="deco.css">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
	<center><img src="logo.gif" hight="230" width="330"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Senarai Laptop</h3></center>
	<hr>
	<br>

	<table border="1" width="1250" align="center">
		 <tr align="center">
		    <th>ID Laptop</th>
			<th>Laptop</th>
			<th>Ram</th>
			<th>Rom</th>
			<th>Warna</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>Kemaskini</th>
			<th>Padam</th>
		 </tr>	
	  
		<?php while ($row = mysqli_fetch_array($senarailaptopsql)) { ?>
			<tr class="data" align="center">
			  <td><?php echo $row['idlaptop']; ?>&nbsp;</td>
			  <td><?php echo $row['laptop']; ?>&nbsp;</td>
			  <td><?php echo $row['ram']; ?>&nbsp;</td>
			  <td><?php echo $row['rom']; ?>&nbsp;</td>
			  <td><?php echo $row['warna']; ?>&nbsp;</td>
			  <td><?php echo $row['harga']; ?>&nbsp;</td>
			  <td><img src="<?php echo $row['gambar']; ?>" height="110" width="120"/></td>
			  
			  <td><div align="center"><a href="kemaskinilaptop.php?recordID=<?php echo $row['idlaptop'];?>"><button class="kemaskini" type= "button" style="border-radius: 18px">Kemaskini &nbsp;</button></a>&nbsp; </div></td>
			  <td><div align="center"><a href="padamlaptop.php?recordID=<?php echo $row['idlaptop'];?>"><button class="padam" type= "button" style="border-radius: 18px">Padam &nbsp;</button></a>&nbsp; </div></td>
			</tr>
		<?php } ; ?>
	</table>

	<?php mysqli_close($conntodb); ?>
</body>
</html>