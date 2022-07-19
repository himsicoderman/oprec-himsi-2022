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
    <title>Pilih Staf | Admin PTI 2022</title>

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
                            <h3>User</h3>
                            <!-- <p class="text-subtitle text-muted">For user to check they list</p> -->
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../pti">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User</li>
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
                                        <th>LINE</th>
                                        <th>Pilihan 1</th>
                                        <th>Pilihan 2</th>
                                        <th>Lulus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $peserta = mysqli_query($koneksi, "SELECT * from regis ");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($peserta)) {
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data['nama']  ?></td>
                                            <td><a href="https://line.me/ti/p/~<?= $data['id_line'] ?>" target="_blank"><?= $data['id_line'] ?></a></td>
                                            <td><?= $data['pil1']  ?></td>
                                            <td><?= $data['pil2']  ?></td>
                                            <td><?= $data['lulus']  ?></td>
                                            <td><!-- Button untuk modal -->
                                                <a href="#" class="btn btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $data['id_regis']; ?>" style="font-size: .9rem;">Edit</a> |
                                                <a href="profil.php?nim=<?php echo $data['nim']; ?>"><button class="btn btn-primary btn-floating" style="font-size: .9rem;">Lihat</button></a>
                                            </td> 
                                            <!--<td><a href="profil.php?nim=<?php echo $data['nim']; ?>"><button class="btn btn-primary btn-floating" style="font-size: .9rem;">Lihat</button></a></td>-->
                                        </tr>

                                        <div class="modal fade text-left" id="myModal<?php echo $data['id_regis']; ?>" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel1">Edit Lulus</h5>
                                                        <button type="button" class="close rounded-pill"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form role="form" action="editlulus.php" method="get">
                                                        <div class="modal-body">
                                                            <?php
                                                            $id = $data['id_regis'];
                                                            $query_edit = mysqli_query($koneksi, "SELECT * FROM regis WHERE id_regis='$id'");
                                                            //$result = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($query_edit)) {
                                                            ?>
                                                                <input type="hidden" name="id_regis" value="<?php echo $row['id_regis']; ?>">

                                                                <div class="form-group">
                                                                    <select id="lulus" name="lulus" class="form-select regis__input form-control py-3" required>

                                                                        <option value="0" selected hidden>Pilih Dinas/Divisi Lulus...</option>
                                                                        <option value="Bistra">Bistra</option>
                                                                        <option value="Medinfo_Humas">Medinfo_Humas</option>
                                                                        <option value="Medinfo_Mulmed">Medinfo_Mulmed</option>
                                                                        <option value="Kastrad">Kastrad</option>
                                                                        <option value="Kestari">Kestari</option>
                                                                        <option value="PMB_Seni">PMB_Seni</option>
                                                                        <option value="PMB_Olahraga">PMB_Olahraga</option>
                                                                        <option value="PSDM">PSDM</option>
                                                                        <option value="Ristek_Akademik">Ristek_Akademik</option>
                                                                        <option value="Ristek_PTI">Ristek_PTI</option>

                                                                    </select>
                                                                </div>

                                                            <?php
                                                            }
                                                            //mysql_close($host);
                                                            ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                                <span class="d-sm-block">Cancel</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1" name="submit">
                                                                Update &raquo;
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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