<?php
session_start();
include "../../koneksi.php";
include "../functions.php";

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
    exit;
}

$data = mysqli_fetch_array(data($_GET));

if ($data['level'] !== 'PSDM') {
    echo "<script>alert('Kamu nggak punya akses ke halaman ini!');
        top.location='../login.php';</script>";
}

$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "SELECT * from regis where nim = $nim");
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | Admin PSDM 2022</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>

    <div id="app">
        <div id="main" class="layout-horizontal">

            <?php include 'includes/header.php'; ?>

            <!-- main -->
            <div class="content-wrapper container">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Peserta</h3>
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../psdm">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Peserta</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <br>
                <section class="section">
			        <div class="row">
			        	<div class="col-md-4">
			        		<div class="card">
			                    <div class="card-body">
			                        <center>
			                        	<a href="../../daftar/upload/khs/<?=$data['khs'];?>" class="btn btn-primary">Unduh KHS</a>
			                        	<a href="../../daftar/upload/bukti/<?=$data['bukti_ss'];?>" class="btn btn-primary" target="_blank">Lihat Bukti Follow</a>
			                        </center>
			                        <br>
			                        <center>
			                            <img src="../../daftar/upload/foto/<?=$data['foto'];?>" class="rounded-circle img-thumbnail" style="width: 180px;" alt="profile-image">
			                        </center>
			                    </div>
			                </div>
			        	</div>
			            <div class="col-md-8">
			                <div class="card">
			                    <div class="card-body">
			                        <ul class="nav nav-tabs" id="myTab" role="tablist">
			                            <li class="nav-item" role="presentation">
			                                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
			                                    aria-controls="about" aria-selected="true">Tentang</a>
			                            </li>
			                            <li class="nav-item" role="presentation">
			                                <a class="nav-link" id="pil1-tab" data-bs-toggle="tab" href="#pil1" role="tab"
			                                    aria-controls="pil1" aria-selected="false">Pilihan 1</a>
			                            </li>
			                            <li class="nav-item" role="presentation">
			                                <a class="nav-link" id="pil2-tab" data-bs-toggle="tab" href="#pil2" role="tab"
			                                    aria-controls="pil2" aria-selected="false">Pilihan 2</a>
			                            </li>
			                        </ul>
			                        <div class="tab-content" id="myTabContent">
			                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
			                                <p class='mt-4'>
			                                	<b>Nama : </b> <?=$data['nama']; ?> <br>
			                                	<b>NIM : </b> <?=$data['nim']; ?> <br>
			                                	<b>Kelas : </b> <?=$data['kelas']; ?> <br>
			                                	<b>Tanggal Lahir: </b> <?=$data['tgl_lahir']; ?> <br><br>
			                                	<b>Deskripsi: </b> <br> <?=$data['tentang']; ?>
			                                </p>
			                            </div>
			                            <div class="tab-pane fade" id="pil1" role="tabpanel" aria-labelledby="pil1-tab">
			                                 <p class='mt-4'>
			                                 	<b>Dinas/Divisi: </b> <?=$data['pil1']; ?> <br>
			                                 	<b>Alasan: </b> <br> <?=$data['alasan1']; ?>
			                                 </p>
			                            </div>
			                            <div class="tab-pane fade" id="pil2" role="tabpanel" aria-labelledby="pil2-tab">
			                                <p class="mt-4">
			                                	<b>Dinas/Divisi: </b> <?=$data['pil2']; ?> <br>
			                                 	<b>Alasan: </b> <br> <?=$data['alasan2']; ?>
			                                </p>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
                </section>
            </div>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>

    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="../assets/js/mazer.js"></script>
</body>

</html>
