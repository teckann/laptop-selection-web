<?php

include('webdb.php'); //guna file sambung ke db

session_start(); //login berjalan
$id = $_SESSION['id']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login
$jenis = $_SESSION['jenis']; //guna data yang diambil ketika login

if(!isset($_SESSION['id']))
{
header("Location: index.php"); 
} 



if ($jenis == "jual") // jika peniaga
{ 
?>

<script language="javascript">
	alert("Selamat datang "+ "<?php echo $nama ?>");
	top.location.href = "jualindex.php";
</script>

<?php 
} 
else if ($jenis == "beli") //jika jenispengguna == 1
{ 
?>

<script language="javascript">
	alert("Selamat datang "+ "<?php echo $nama ?>");
	top.location.href = "pelangganindex.php";
</script>

<?php 
}
else
{  
?>

<script language="javascript">
	alert("Selamat bertugas");
	top.location.href = "adminindex.php";
</script>

<?php 

} 

?>