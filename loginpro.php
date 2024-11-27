<?php
include('webdb.php'); //guna file sambung ke db

$id = $_POST['id']; //terima dari input
$katalaluan = $_POST['katalaluan']; //terima dari input

//sambung ke db & cari di jadual staf ada tak ic & katalaluan
$loginsql = mysqli_query($conntodb,"SELECT * FROM tbl_pengguna WHERE idpengguna = '$id' AND BINARY katalaluan = BINARY '$katalaluan'");

//if ic & katalaluan itu dijumpai
if(mysqli_num_rows($loginsql) == 1)
{
//mulakan sesi login
session_start();
//ambil row tersebut & jadikan tatasusunan
$row = mysqli_fetch_array($loginsql);
//jadikan info2 dalam row itu sebagai pembolehubah sesi
$_SESSION['id'] = $row['idpengguna'];
$_SESSION['nama'] = $row['nama'];
$_SESSION['jenis'] = $row['jenis'];

mysqli_close($conntodb); //tutup sambungan ke db
?>

<script language="javascript">
    	top.location.href = "loginREDIRECT.php"; //pergi ke page ini
</script>

<?php

}
else //jika ic & katalaluan itu tak dijumpai
{

?>

<script language="javascript">
    	alert("Masukkan no kad pengenalan dan katalaluan yang betul atau daftar pengguna baru");
    	top.location.href = "login.php"; //pergi ke page ini
</script>

<?php

}

?>
