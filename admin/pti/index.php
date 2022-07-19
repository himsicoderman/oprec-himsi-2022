<?php
session_start();
include "../../koneksi.php";
include "../functions.php";

if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
    exit;
}

$data = mysqli_fetch_array(data($_GET));

if ($data['level'] !== 'PTI') {
    echo "<script>alert('Kamu nggak punya akses ke halaman ini!');
        top.location='../login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin PTI 2022</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendor/chartjs/Chart.min.css">
    <link rel="stylesheet" href="../assets/vendor/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/all.min.css">

    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">

            <?php include 'includes/header.php'; ?>

            <!-- main -->
            <div class="content-wrapper container">
                <div class="page-heading">
                    <h3>Welcome, Admin PTI</h3>

                    <section class="section mt-4">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="semua-tab" data-bs-toggle="tab" href="#semua" role="tab"
                                            aria-controls="semua" aria-selected="true">SEMUA</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="bistra-tab" data-bs-toggle="tab" href="#bistra" role="tab"
                                            aria-controls="bistra" aria-selected="false">BISTRA</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="humas-tab" data-bs-toggle="tab" href="#humas" role="tab"
                                            aria-controls="humas" aria-selected="false">HUMAS</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="mulmed-tab" data-bs-toggle="tab" href="#mulmed" role="tab"
                                            aria-controls="mulmed" aria-selected="false">MULMED</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="kastrad-tab" data-bs-toggle="tab" href="#kastrad" role="tab"
                                            aria-controls="kastrad" aria-selected="false">KASTRAD</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="kestari-tab" data-bs-toggle="tab" href="#kestari" role="tab"
                                            aria-controls="kestari" aria-selected="false">KESTARI</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="seni-tab" data-bs-toggle="tab" href="#seni" role="tab"
                                            aria-controls="seni" aria-selected="false">SENI</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="olahraga-tab" data-bs-toggle="tab" href="#olahraga" role="tab"
                                            aria-controls="olahraga" aria-selected="false">OLAHRAGA</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="psdm-tab" data-bs-toggle="tab" href="#psdm" role="tab"
                                            aria-controls="psdm" aria-selected="false">PSDM</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="akademik-tab" data-bs-toggle="tab" href="#akademik" role="tab"
                                            aria-controls="akademik" aria-selected="false">AKADEMIK</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pti-tab" data-bs-toggle="tab" href="#pti" role="tab"
                                            aria-controls="pti" aria-selected="false">PTI</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="semua" role="tabpanel" aria-labelledby="semua-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= totalpeserta($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="bistra" role="tabpanel" aria-labelledby="bistra-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= bistra($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="humas" role="tabpanel" aria-labelledby="humas-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= humas($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="mulmed" role="tabpanel" aria-labelledby="mulmed-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= mulmed($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="kastrad" role="tabpanel" aria-labelledby="kastrad-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= kastrad($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="kestari" role="tabpanel" aria-labelledby="kestari-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= kestari($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="seni" role="tabpanel" aria-labelledby="seni-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= seni($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="olahraga" role="tabpanel" aria-labelledby="olahraga-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= olahraga($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="psdm" role="tabpanel" aria-labelledby="psdm-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= psdm($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="akademik" role="tabpanel" aria-labelledby="akademik-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= akademik($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                    <div class="tab-pane fade" id="pti" role="tabpanel" aria-labelledby="pti-tab">
                                        <h1 class='mt-4'>
                                            <span class="border border-primary rounded-circle bg-primary text-white px-3"><?= pti($_POST); ?></span> peserta
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="page-content">
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
            </div>

            <?php include 'includes/footer.php'; ?>

        </div>
    </div>

    <script src="../assets/vendor/chartjs/Chart.min.js"></script>
    <script src="../assets/js/pages/ui-chartjs.js"></script>

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