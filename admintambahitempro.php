<?php //masukkan item ke dalam pangkalan data

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



$laptop = $_SESSION['laptop'];
$ram = $_SESSION['ram'];
$rom = $_SESSION['rom'];
$warna = $_SESSION['warna'];
$namagambaritem = $_SESSION['namagambaritem'];
$idjenama = $_SESSION['idjenama'];

//gabung nama fail & folder
$awalangambar = "gambar/"; //pembolehubah nama fail yang nak disimpan 
$namainput = $namagambaritem; //pembolehubah nama gambar yang dimasukkan berdasarkan input 
$awalangambar .= $namainput; // string function menggabungkan pembolehubah nama file dan pembolehubah nama gambar 
$gambaritem = $awalangambar .".jpg"; //menggabungkan pembolehubah folder & file dengan perkataan .jpg 

//buat sambungan ke pangkalan data & masukkan data item
mysqli_query($conntodb,"INSERT INTO tbl_laptop (laptop, ram, rom, warna, gambar, idjenama) VALUES ('$laptop', '$ram', '$rom', '$warna', '$gambaritem', '$idjenama')");

mysqli_close($conntodb);//tutup sambungan pangkalan data
?>
<script language="javascript">
		alert("Item telah berjaya ditambah ke dalam sistem");
    	window.location.href = "adminitem.php";
</script>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
</body>
</html>