<?php

include('webdb.php');

$nama= $_POST['nama'];
$ic = $_POST['ic'];
$tel = $_POST['tel'];
$kedai = $_POST['kedai'];
$katalaluan = $_POST['katalaluan'];


$scanic = mysqli_query($conntodb,"SELECT * FROM tbl_pengguna WHERE idpengguna = '$ic' AND BINARY katalaluan = BINARY '$katalaluan' LIMIT 1");
$checknoic = mysqli_num_rows($scanic);

$panjangic = strlen ($_POST ["ic"]);  
  
if ( ($panjangic != 12) || ($checknoic == 1)) {


?>
<script language="javascript">
		alert("Masukkan nombor kad pengenalan dengan betul");
    	window.location.href = "tambahjual.php";
</script> 
<?php

} else {  


//masukkan data peserta baru
mysqli_query($conntodb,"INSERT INTO tbl_pengguna (idpengguna, nama, tel, kedai, katalaluan, jenis) VALUES ('$ic', '$nama', '$tel', '$kedai', '$katalaluan', 'jual')");

mysqli_close($conntodb);
?>
<script language="javascript">
		alert("Penjual telah ditambah");
    	window.location.href = "login.php";
</script>
<?php
}
?>


<html>

<head>
<title></title>
</head>

<body>
<p>&nbsp;</p>

</body>
</html>
