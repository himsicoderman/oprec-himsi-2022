<?php

session_start();
if (!isset($_SESSION["tidak_lulus"])) {
	header("Location: index.php");
} 

if (isset($_SESSION["lulus"])) {
	header("Location: lulus.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doptiq.com/smartforms/v4/demos/templates/flat/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 10:13:31 GMT -->

<head>
	
    <!-- ===== META ===== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== TITLE ===== -->
    <title>PENGUMUMAN OPREC BPH HIMSI UNSRI 2022</title>

    <!-- ===== CSS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/success.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== GOOGLE FONT ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ===== JS ===== -->
    <link rel="stylesheet" href="assets/vendor/sweetalert/js/sweetalert2.min.css">
    <script src="assets/vendor/sweetalert/js/sweetalert2.min.js"></script>

</head>
<?php

	error_reporting(0);
	include '../koneksi.php';
	$nim = $_SESSION['nim'];
	$data = mysqli_query($koneksi, "SELECT * FROM regis WHERE nim='$nim'");
	while ($d = mysqli_fetch_array($data)) {

?>

	<body>

		<div class="registrasi">

			<div class="regis__content">

				<div class="regis__forms">

					<form class="regis__registre">
					    
					    <img src="assets/img/himsi.png" alt="" width="180px;" style="margin: auto; display: block;"><br><br>

						<h1 class="regis__title fw-bold">PENGUMUMAN OPREC BPH HIMSI UNSRI 2022</h1>
                        <hr><br>

						<br>
						<div class="alert alert-danger py-5 px-3" style="margin-bottom: 2rem; text-align: justify;">
							<p>Hi, <?= $d['nama']; ?> <br> <br>
								Terima kasih telah mengikuti kegiatan OPREC BPH HIMSI UNSRI 2022. <br> <br>
								Mohon Maaf kamu belum diterima untuk menjadi bagian dari BPH HIMSI FASILKOM UNSRI 2022.</p>
						</div>

						<div class="form-body">
							<div class="frm-row">
								<div class="spacer-t5 spacer-b30">
									<div class="tagline"><span> SEMANGAT!!! </span></div>
								</div>

								<div class="alert alert-primary text-left pt-5" style="margin-top: 2rem; text-align: justify;">
									<p>
										<font>Teruslah berkarya di manapun kamu berada. <br><br> Seorang pemenang sejati tak akan runtuh hanya karena satu-dua rintangan menghadang. <br> <br>
											Terus asah kemampuan diri, maksimalkan potensi dan semangat untuk terus berproses dan ingatlah bahwa kamu masih bagian dari <strong>Keluarga HIMSI FASILKOM UNSRI</strong>.<br><br><br><br>
											<b>#NyatakanAmbisiDenganAksi</b>
										</font>
									</p>
								</div>
							</div>

							<center>
								<div class="form-footer" style="margin-top: 4rem;">
									<!--<button type="submit" class="button btn-primary block pushed expand"> LANJUTKAN </button> -->
									<p style="color: black">Created by <a href="https://github.com/NulisKode"> Dinas Ristek Divisi PTI</a></p>
							</center>
						</div>

					</div>

				</form>

			</div>

		</div>

</body>

	 <!-- ===== JS ===== -->
	 <script src="assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
<?php
	}
?>