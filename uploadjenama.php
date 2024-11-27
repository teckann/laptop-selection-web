<?PHP


include('webdb.php');

session_start(); //login berjalan
$ic = $_SESSION['ic']; //guna data yang diambil ketika login
$nama = $_SESSION['nama']; //guna data yang diambil ketika login



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
					window.location.href = "senaraijenama.php";
					</script>
        			<?php
                }
                else
                {   //jika result tidak ada,tidak dapat muat naik
                    ?>  
					<script language="javascript">
					alert("Maaf. Muat naik maklumat pengguna tidak berjaya");
					window.location.href = "uploadjenama.php";
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
		<link rel="Stylesheet" href="deco.css">
		<title>Laptop Batu Pahat</title>
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>

	<body>
		<center><img src="logo.gif" hight="230" width="330"/></center>
		<hr>
		<center><h3>Batu Pahat &nbsp; &nbsp; &nbsp; |  &nbsp; &nbsp; &nbsp; Upload Jenama Laptop</h3></center>
		<hr>
		<br><br><br><br><br>

		<!--form jenis hantar fail-->
		<form method='POST' action='uploadjenama.php' enctype='multipart/form-data'> 
			<!--table dalam td-->
			<table align="center">
				<tr>
					<td><div align="center" class="teksdata">Sila pilih fail CSV anda</div></td>
				</tr>
				
				<tr>
					<td>
					<input class="buttonbaru" type='file' name='file' required/> <button class="upload" type='submit' name='btn-upload' style="border-radius: 18px">Simpan &nbsp;</button>
					</td>
				</tr>
				
			</table>
		</form>

	</body>
	<?php mysqli_close($conntodb); ?>
</html>