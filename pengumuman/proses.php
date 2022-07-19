<?php 

	ob_start();
	session_start();

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="assets/js/sweetalert2.min.css">
	<title>LOGIN PAGE</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
 
	<script src="assets/js/sweetalert2.min.js"></script>

	<?php

	// menghubungkan dengan koneksi
	include "../koneksi.php";

	// menangkap data yang dikirim dari form
	$nim = $_POST['nim'];
	$password = md5($_POST['password']);

	// menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($koneksi, "SELECT * FROM regis WHERE nim='$nim' AND password='$password' ");

	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	$data2 = mysqli_fetch_array($data);

		if ($cek > 0 AND $data2['lulus'] !== '0'){
			$_SESSION['nim'] = $nim;
			$_SESSION['lulus'] = true;
			echo "<script>
				Swal.fire('Sukses !', 'Login Berhasil', 'success').then(function(){
					setTimeout(document.location.href = 'lulus.php', 100);
					})
					</script>";
			//header("location:index.php"); 
		}

		else if ($cek > 0 AND $data2['lulus'] == 0 ){
			$_SESSION['nim'] = $nim;
			$_SESSION['tidak_lulus'] = true;
			echo "<script>
				Swal.fire('Sukses!', 'Login Berhasil', 'success').then(function(){
					setTimeout(document.location.href = 'semangat.php', 100);
					})
					</script>";
			//header("location:index.php"); 
		}

		else {
			echo "<script>
				Swal.fire('Login Gagal !', 'NIM atau Password Salah.', 'error').then(function(){
					setTimeout(document.location.href = 'index.php', 100);
					})
					</script>";
			echo mysqli_error($koneksi);
		}

	?>

</body>
</html>