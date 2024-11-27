<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Kedai Batu Pahat</title>
		<link rel="stylesheet" href="deco.css">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon" />
	</head>
	
	<body>
		<?php //masukkan gambar dari borang ke dalam folder
		include('webdb.php');//masukkan rujukan pangkalan data

		session_start(); //login berjalan
		$ic = $_SESSION['ic']; //guna data yang diambil ketika login
		$nama = $_SESSION['nama']; //guna data yang diambil ketika login

		$_SESSION['laptop'] = $_POST['laptop'];
		$_SESSION['ram'] = $_POST['ram'];
		$_SESSION['rom'] = $_POST['rom'];
		$_SESSION['idjenama'] = $_POST['idjenama'];
		$_SESSION['warna'] = $_POST['warna'];
		$_SESSION['harga'] = $_POST['harga'];
		$_SESSION['namagambarlaptop'] = $_POST['namagambarlaptop'];

		//target folder nak save gambar
		$target_dir = "gambar/"; //nama fail dalam htdocs
		$target_file = $target_dir . basename($_FILES["imejitem"]["name"]); //terima fail gambar
		$uploadOk = 1; //pembolehubah upload = 1, jika tak berjaya akan tukar ke 0
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); //dapatkan format gambar

		//periksa gambar wujud atau tidak
		if (($_FILES["imejitem"]["size"]) > 0) { //ambil saiz fail
			$uploadOk = 1;
		  } else {
			?>
			
			<script language="javascript">
				alert("Maaf. Sila masukkan gambar produk");
				window.location.href = "tambahlaptop.php";
			</script>
			<?php
			$uploadOk = 0;
		  }

		// periksa di dalam folder jika sudah ada gambar yang sama  
		if (file_exists($target_file)) {
			?>
			<script language="javascript">
				alert("Maaf. Gambar ini telah ada di dalam sistem");
				window.location.href = "tambahlaptop.php";
			</script>
			<?php
		  $uploadOk = 0;
		}

		//periksa saiz gambar yang dimasukkan tidak melebihi saiz yang ditetapkan 
		if ($_FILES["imejitem"]["size"] > 5000000) {
			?>
			<script language="javascript">
				alert("Maaf. Saiz gambar yang anda ingin masukkan melebihi 5MB");
				window.location.href = "tambahlaptop.php";
			</script>
			<?php
		  $uploadOk = 0;
		}

		//periksa hanya gambar berformat .jpg sahaja dibenarkan 
		if($imageFileType != "jpg") {
			?>
			<script language="javascript">
				alert("Maaf. Hanya gambar berformat (*.jpg) sahaja diterima");
				window.location.href = "tambahitem.php";
			</script>
			<?php
		  $uploadOk = 0;
		}

		//jika pembolehubah upload = 0, tidak berjaya
		if ($uploadOk == 0) {
			?>
			<script language="javascript">
				alert("Maaf. Gambar anda tidak berjaya dimuat naik");
				window.location.href = "tambahitem.php";
			</script>
			<?php
		} 
		else 
		{   //upload fail
			if (move_uploaded_file($_FILES["imejitem"]["tmp_name"], $target_file)) 
			{
			?>
			<script language="javascript">
				alert("Gambar anda telah berjaya dimuat naik");
				window.location.href = "tambahlaptoppro.php";
			</script>
			<?php
			}  
			else 
			{
			?>
			<script language="javascript">
				alert("Maaf. Gambar anda tidak berjaya dimuat naik");
				window.location.href = "tambahlaptoppro.php";
			</script>
			<?php
			}
		}
		?>
	</body>
</html>