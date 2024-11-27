<?php


include('webdb.php');

session_start(); //login berjalan
$id = $_SESSION['id']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login
$jenis = $_SESSION['jenis']; //guna data yang diambil ketika login

if(!isset($_SESSION['id']))
{
header("Location: index.php"); 
} 



if (isset($_POST['btn-upload'])) //terima data dri butang
{
	$namafailsementara = $_FILES["file"]["tmp_name"]; //pembolehubah fail sementara
    $namafail = $_FILES['file']['name']; //pembolehubah fail sebenar
    $jenisfail = pathinfo($namafail, PATHINFO_EXTENSION); //lihat jenis fail
    if($_FILES["file"]["size"] > 0 AND $jenisfail == "csv") //jika fail wujud & jenis fail ialah csv
	{
		   $faildiupload = fopen($namafailsementara, "r"); //buka fail sementara & baca
           $counter = 1; //nombor baris
           while(($getData = fgetcsv($faildiupload, 10000,",")) !== FALSE) //baca fail bermula huruf 1st, limit panjang, separator ',' 
           {       
		    if($counter > 1) //jika baris ada data
            {    //buat sambungan ke pangkalan data & masukkan data pengguna
				$result = mysqli_query($conntodb,"INSERT INTO tbl_jenama (idjenama, jenama) VALUES ('$getData[0]','$getData[1]')");
				 
				//periksa data yg baru masuk
                if($result >= 1)
                {   //jika result ada,file berjaya dimuat naik
                    ?>
					<script language="javascript">
					alert("Muat naik maklumat jenama berjaya");
					window.location.href = "adminjenama.php";
					</script>
        			<?php
                }
                else
                {   //jika result tidak ada,tidak dapat muat naik
                    ?>  
					<script language="javascript">
					alert("Maaf. Muat naik maklumat pengguna tidak berjaya");
					window.location.href = "adminuploadjenama.php";
					</script>
        			<?php  
                }
                
             } $counter++; //pergi ke baris baru
           }
	fclose($faildiupload); //tutup fail sementara
	}
	   else
        ?>
		<script language="javascript">
		alert("Maaf. Hanya fail berformat CSV sahaja dibenarkan");
		</script>
        <?php
}
?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Laptop Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
	</head>

	<body>
		<?php include 'linkadmin.php';?>
		<center><img src="logo.gif" hight="140" width="240"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; MUAT NAIK Jenama Baru</h3></center>
		<hr>
		<br><br><br><br><br>
		
		<!--form jenis hantar fail-->
		<form method='POST' action='adminuploadjenama.php' enctype='multipart/form-data'> 
		<!--table dalam td-->
			<table align="center">
				<tr>
					<td><div align="center" class="teksdata">Sila pilih fail CSV anda</div></td>
				</tr>
				
				<tr>
					<td>
					<input class="buttonbaru" type='file' name='file' required/> <button class="upload" type='submit' name='btn-upload' style="border-radius: 18px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Simpan &nbsp;</button>
					</td>
				</tr>
			</table>
		</form>



	</body>
	<?php mysqli_close($conntodb); ?>
</html>