<?php //form masukkan item baru ke dalam pangkalan data

include('webdb.php');//masukkan rujukan pangkalan data

//terima data 
session_start(); //login berjalan
$id = $_SESSION['id']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login
$jenis = $_SESSION['jenis']; //guna data yang diambil ketika login

if(!isset($_SESSION['id']))
{
header("Location: index.php"); 
} 


?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="Stylesheet" href="deco.css">
		<title>Laptop Batu Pahat</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<?php include 'linkjual.php';?>
		<center><img src="logo.gif" hight="140" width="240"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Tambah Laptop</h3></center>
		<hr>
		<br>

		<!--form jenis send file-->
		<form action="jualtambahitemgambarpro.php" method="post" enctype="multipart/form-data">
			<!--table dalam td-->
			<table align="center">
			  
			  <tr>
				<td><div align="center">Laptop</div></td>
				<td><div align="center">:</div></td>
				<td><div align="center"><input type="text" name="laptop" placeholder="Laptop" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center">Ram</div></td>
				<td><div align="center">:</div></td>
				<td><div align="center"><input type="text" name="ram" placeholder="Ram" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr>
				<td><div align="center">Rom</div></td>
				<td><div align="center">:</div></td>
				<td><div align="center"><input type="text" name="rom" placeholder="Rom" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
				 
			   <tr>
				<td><div align="center">Warna</div></td>
				<td><div align="center">:</div></td>
				<td><div align="center"><input type="text" name="warna" placeholder="Warna" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>

			 <tr>
				<td><div align="center" class="teksdata">Jenama</div></td>
				<td><div align="center" class="teksdata">:</div></td>
				<td><div align="center"><select name="idjenama">
				<option selected disable value="">Jenama</option>
				<?php
					$pilihjenamasql = mysqli_query($conntodb,"SELECT * FROM tbl_jenama GROUP BY jenama");
					while ($data = mysqli_fetch_array($pilihjenamasql))
					{
					echo "<option value='".$data['idjenama']."'>".$data['jenama']."</option>";
					}
				?>
				</select>&nbsp; </div></td>
			  </tr>
			   
			  <tr>
				<td><div align="center" class="teksdata">Gambar *.jpg</div></td>
				<td><div align="center" class="teksdata">:</div></td>
				<td><div align="center"><input type="text" id="namagambaritem" name="namagambaritem" placeholder="Nama fail gambar" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
			  </tr>
			  <tr>
				<td></td><td></td><td><div align="center"><input type="file" id="imejitem" name="imejitem" class="buttonbaru"/>&nbsp; </div></td>
			  </tr>
			  
			  <tr></tr>
			  
			  <tr>
				<td colspan="3">
				<hr/><!--garisan melintang-->
			  </tr>
			</table>
			
			<center><button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Simpam &nbsp;</div></label></button></center>
		</form>
	</body>
</html>