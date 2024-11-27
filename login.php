<html>

<head>
	<title>Laptop Batu Pahat</title>
	<link rel="stylesheet" href="deco.css">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
</head>

<body>
<?php include 'linkindex.php';?>
<br />
	<center><img src="logo.gif" hight="140" width="240"/></center>
	<hr>
	<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Log Masuk</h3></center>
	<hr>
	<br><br><br>

	<center><form method="POST" action="loginpro.php" width="300" align="center">
		<table width="400" align="center">
			<tr>
			  <td><strong>No Kad Pengenalan</strong></td>
			  <td><strong>:</strong></td>
			  <td><input type="text" name="id" style="border-radius: 18px"/></td>
			</tr>
			
			<tr>
			  <td><strong>Kata laluan</strong></td>
			  <td><strong>:</strong></td>
			  <td><input type="password" name="katalaluan" style="border-radius: 18px"/></td>
			</tr>
		</table>
		<br>
		<button class="login" name="button" style="border-radius: 10px" >&nbsp; &nbsp; &nbsp; &nbsp; Log Masuk &nbsp;</button>
		&nbsp; &nbsp; &nbsp; <br><br><br>
		<a href="tambahjual.php"><button class="daftar" type="button" style="border-radius: 18px; padding: 5px 3px 5px 3px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Daftar Kedai Baharu &nbsp;</button></a>
		&nbsp; &nbsp;
        <a href="tambahbeli.php"><button class="daftar" type="button" style="border-radius: 18px; padding: 5px 3px 5px 3px">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Daftar Pelanggan Baharu &nbsp;</button></a>
		
	</form></center>
</body>
</html>