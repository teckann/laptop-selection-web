<?php
session_start();

if(!empty($_GET)){}
    include('webdb.php');
    $arahan = "DELETE FROM tbl_jenama WHERE idjenama = '".$_GET['idjenama']."'"; //delete jenama berdasarkan idjenama
if(mysqli_query($conntodb,$arahan)){
    echo "<script language='javascript'>
	alert('Jenama telah dipadam');
    window.location.href = 'adminjenama.php'; 
</script>";}
?>

