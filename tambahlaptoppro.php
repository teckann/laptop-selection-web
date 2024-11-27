<?php //masukkan item ke dalam pangkalan data
	include('webdb.php');//masukkan rujukan pangkalan data

	//terima data 
	session_start(); //login berjalan
	$ic = $_SESSION['ic']; //guna data yang diambil ketika login
	$nama = $_SESSION['nama']; //guna data yang diambil ketika login

	$laptop = $_SESSION['laptop'];
	$ram = $_SESSION['ram'];
	$rom = $_SESSION['rom'];
	$idjenama = $_SESSION['idjenama'];
	$warna = $_SESSION['warna'];
	$harga = $_SESSION['harga'];
	$namagambarlaptop = $_SESSION['namagambarlaptop'];

	//gabung nama fail & folder
	$awalangambar = "gambar/"; //pembolehubah nama fail yang nak disimpan 
	$namainput = $namagambaritem; //pembolehubah nama gambar yang dimasukkan berdasarkan input 
	$awalangambar .= $namainput; // string function menggabungkan pembolehubah nama file dan pembolehubah nama gambar 
	$gambaritem = $awalangambar .".jpg"; //menggabungkan pembolehubah folder & file dengan perkataan .jpg 

	//buat sambungan ke pangkalan data & masukkan data item
	mysqli_query($conntodb,"INSERT INTO tbl_laptop (laptop, ram, rom, warna, harga, gambar, idjenama) VALUES ('$laptop', '$ram', '$rom', '$warna', '$harga', '$gambar', '$idjenama')");

	mysqli_close($conntodb);//tutup sambungan pangkalan data
?>
<script language="javascript">
		alert("Produk telah berjaya dimasukkan ke dalam sistem");
    	window.location.href = "senaraikasut.php";
</script>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>
	<body>
	
	</body>
</html>