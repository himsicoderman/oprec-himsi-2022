<?php
ob_start();
	session_start();
	include "../koneksi.php"; 
	include "functions.php"; 
	$data = mysqli_fetch_array(data($_GET));
	if ($data['level'] == 'INTI') {
		header("location: inti");
	}
	else if ($data['level'] == 'BISTRA') {
		header("location: bistra");
	}
	else if ($data['level'] == 'MEDINFO') {
		header("location: medinfo");
	}
	else if ($data['level'] == 'KASTRAD') {
		header("location: kastrad");
	}
	else if ($data['level'] == 'KESTARI') {
		header("location: kestari");
	}
	else if ($data['level'] == 'PMB') {
		header("location: pmb");
	}
	else if ($data['level'] == 'PSDM') {
		header("location: psdm");
	}
	else if ($data['level'] == 'RISTEK') {
		header("location: ristek");
	}
	else if ($data['level'] == 'PTI') {
		header("location: pti");
	}
	else {
		header("location: login.php");
	}
ob_flush();
?>