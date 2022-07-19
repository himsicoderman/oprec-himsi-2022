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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta | Admin PSDM 2022</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendor/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/all.min.css">

    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>

<style type="text/css">
    .table {
        font-size: .9rem;
    }   
</style>

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
                    <div class="card">
                        <!-- <div class="card-header">
                            Simple Datatable
                        </div> -->
                        <div class="card-body">
                            <table class="table table-striped" id="table1" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Domisili</th>
                                        <th>LINE</th>
                                        <th>IG</th>
                                        <th>Pilihan 1</th>
                                        <th>Pilihan 2</th>
                                        <th>Profil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $peserta = mysqli_query($koneksi, "SELECT * from regis");
                                    $no = 1;
                                    foreach ($peserta as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['domisili'] ?></td>
                                            <td><a href="https://line.me/ti/p/~<?= $row['id_line'] ?>" target="_blank"><?= $row['id_line'] ?></a></td>
                                            <td><a href="https://instagram.com/<?= $row['instagram'] ?>" target="_blank"><?= $row['instagram'] ?></a></td>
                                            <td><?= $row['pil1'] ?></td>
                                            <td><?= $row['pil2'] ?></td>
                                            <td><a href="profil.php?nim=<?php echo $row['nim']; ?>"><button class="btn btn-primary btn-floating" style="font-size: .9rem;">Lihat</button></a></td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>

    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/pages/dashboard.js"></script>
    <script src="../assets/js/pages/horizontal-layout.js"></script>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-datatables/jquery.dataTables.min.js"></script>

    <script src="../assets/vendor/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
    <script src="../assets/vendor/fontawesome/all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table1').DataTable( {
                "scrollX": true
            } );
        } );
    </script>

    <script src="../assets/js/main.js"></script>
</body>

</html>