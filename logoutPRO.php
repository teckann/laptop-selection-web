<?php //kosongkan pembolehubah sesi


//terima data 
session_start();//log masuk berjalan
$_SESSION['id'] = NULL;
$_SESSION['jenis'] = NULL;
$_SESSION['nama'] = NULL;

unset($_SESSION['id']);
unset($_SESSION['jenis']);
unset($_SESSION['nama']);

session_destroy();//tutup sesi

?>

<script language="javascript">
    top.location.href = "logoutREDIRECT.php"; 
</script>


<html>
<head>

<title>SALON ROSE</title>
</head>
<body>
</body>
</html>