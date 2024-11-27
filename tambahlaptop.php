<?php //form masukkan item baru ke dalam pangkalan data
	include('webdb.php');//masukkan rujukan pangkalan data

	//terima data 
	session_start(); //login berjalan
	$ic = $_SESSION['ic']; //guna data yang diambil ketika login
	$nama = $_SESSION['nama']; //guna data yang diambil ketika login
?>


<html>
	<head>
		<title>Kedai Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<center><img src="logo.gif" hight="230" width="330"/>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Tambah Laptop</h3></center>
		<hr>
		<br><br><br>

		<!--form jenis send file-->
		<form action="tambahlaptopgambarpro.php" method="post" enctype="multipart/form-data">
		<!--table dalam td-->
		
			<table align="center">
				  <tr>
					<td><div align="center">Laptop</div></td>
					<td><div align="center">:</div></td>
					<td><div align="center"><input type="text" name="laptop" placeholder="Nama produk" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center" class="teksdata">Ram</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><input type="text" name="ram" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center" class="teksdata">Rom</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><input type="text" name="rom" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center" class="teksdata">Jenama</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><select name="idjenama">
					<option selected disable value="">Jenama laptop</option>
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
					<td><div align="center" class="teksdata">Warna</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><input type="text" name="warna" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center" class="teksdata">Harga</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><input type="text" name="harga" placeholder="00.00" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td><div align="center" class="teksdata">Gambar</div></td>
					<td><div align="center" class="teksdata">:</div></td>
					<td><div align="center"><input type="text" id="namagambarlaptop" name="namagambarlaptop" placeholder="Nama fail gambar" required="required" style="border-radius: 18px"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td></td><td></td><td><div align="center"><input type="file" id="imejitem" name="imejitem" class="buttonbaru"/>&nbsp; </div></td>
				  </tr>
				  
				  <tr>
					<td colspan="3">
					 <hr/><!--garisan melintang-->
				  </tr>
			</table>
			
			<br>
			<button class="simpan" type="submit" name="button" id="button" style="border-radius: 18px"><label><div>Simpan &nbsp;</div></label></button>
		</form>

	</body>
</html>