<?php

session_start();
if (!isset($_SESSION["lulus"])) {
    header("Location: index.php");
    exit;
}

if (isset($_SESSION["tidak_lulus"])) {
    header("Location: semangat.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

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
    
    <!-- ===== EMBEED STYLE ===== -->
    <style>
        @media (min-width: 250px) and (max-width: 500px) {
            .login__input {
                padding: 0;
                width: 100%;
            }
        }
        
        @media (max-width: 600px) {
             .regis__registre {
                padding: 3rem 1.5rem !important;  
             }

    </style>

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

                        <div class="alert alert-success py-5" style="text-align: justify;">

                            <strong>Selamat!</strong> kamu telah diterima menjadi bagian dari BPH HIMSI FASILKOM
                            UNSRI 2022. <br><br>


                            Kamu adalah yang terbaik diantara yang terbaik. <br><br>


                            Terus berikan dan buktikan bahwa memang kamu layak dan pantas untuk menjadi bagian dari BPH HIMSI FASILKOM UNSRI 2022. <br><br>


                            Mari bersama membahu kita nyatakan ambisi dengan aksi. <br><br>


                            <strong>#NyatakanAmbisiDenganAksi</strong>

                        </div>

                        <br>
                        <div class="tagline"><span> Data Diri </span></div>
                        <br>

                        <div class="login__box">
                            <i class='bx bxs-id-card regis__icon'></i>
                            <input type="text" placeholder="NIM" name="nim" class="login__input" value="<?= $d['nim'] ?>" style="text-transform:capitalize;" readonly>
                        </div>
                        <br>

                        <div class="login__box">
                            <i class='bx bxs-user regis__icon'></i>
                            <input type="text" placeholder="Nama" name="nama" class="login__input" value="<?= $d['nama'] ?>" style="text-transform:capitalize;" readonly>
                        </div>

                        <br>
                        <div class="tagline"><span> Dinas/Divisi </span></div>
                        <br>

                        <?php
                        if ($d['lulus'] == 'Kastrad') { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas KASTRAD (Kajian Strategi dan Advokasi)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "PSDM") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas PSDM (Pengembangan Sumber Daya Mahasiswa)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Ristek_PTI") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas RISTEK (Riset dan Teknologi) - Divisi PTI (Pengembangan Teknologi Informasi)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Ristek_Akademik") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas RISTEK (Riset dan Teknologi) - Divisi Akademik</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Bistra") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas BISTRA (Bisnis dan Kemitraan)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Kestari") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas KESTARI (Kesekretariatan)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "PMB_Seni") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas PMB (Pengembangan Minat Bakat) - Divisi Seni</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "PMB_Olahraga") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas PMB (Pengembangan Minat Bakat) - Divisi Olahraga</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Medinfo_Humas") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas MEDINFO (Media dan Informasi) - Divisi HUMAS (Hubungan Masyarakat)</textarea>
                            </div><br>
                        <?php } else if ($d['lulus'] == "Medinfo_Mulmed") { ?>
                            <div class="login__box">
                                <i class='bx bxs-group regis__icon'></i>
                                <textarea name="lulus" class="login__input" style="text-transform:capitalize;" readonly>Dinas MEDINFO (Media dan Informasi) - Divisi MULMED (Multimedia)</textarea>
                            </div><br>
                        <?php }
                        ?>

                        <!-- GRUP DINAS/DIVISI -->
                        <div class="alert alert-primary text-center">
                            Silakan join ke grup dinas masing-masing yaa!
                        </div>

                        <br>
                        <div class="tagline"><span> Join Grup Line </span></div>
                        <br>

                        <?php
                        if ($d['lulus'] == 'Kastrad') { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas KASTRAD</font>
                                </p>

                                <a href="https://line.me/R/ti/g/Za_XZ_bsy4"> <img border="0" src="assets/img/barcode/kastrad.jpeg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "PSDM") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas PSDM</font>
                                </p>

                                <a href="https://line.me/R/ti/g/JnyDXwyUO0"> <img border="0" src="assets/img/barcode/psdm.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Ristek_PTI") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas RISTEK</font>
                                </p>

                                <a href="http://line.me/ti/g/jVKDyiy-6C"> <img border="0" src="assets/img/barcode/ristek.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Ristek_Akademik") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas RISTEK</font>
                                </p>

                                <a href="http://line.me/ti/g/jVKDyiy-6C"> <img border="0" src="assets/img/barcode/ristek.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Bistra") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas BISTRA</font>
                                </p>

                                <a href="https://line.me/R/ti/g/uOOiEcl0uj"> <img border="0" src="assets/img/barcode/bistra.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Kestari") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas KESTARI</font>
                                </p>

                                <a href="https://line.me/R/ti/g/H4LVPoVopw"> <img border="0" src="assets/img/barcode/kestari.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "PMB_Seni") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas PMB</font>
                                </p>

                                <a href="http://line.me/ti/g/wpL8YDGQBe"> <img border="0" src="assets/img/barcode/PMB.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "PMB_Olahraga") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas PMB</font>
                                </p>

                                <a href="http://line.me/ti/g/wpL8YDGQBe"> <img border="0" src="assets/img/barcode/PMB.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Medinfo_Humas") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas MEDINFO</font>
                                </p>

                                <a href="http://line.me/ti/g/SS1jW3Ki4D"> <img border="0" src="assets/img/barcode/medinfo.jpg" width="170" height="170"> </a> <br>
                        <?php } else if ($d['lulus'] == "Medinfo_Mulmed") { ?>
                            <center>
                                <p>
                                    <font color="#8C8C8C">Grup Dinas MEDINFO</font>
                                </p>

                                <a href="http://line.me/ti/g/SS1jW3Ki4D"> <img border="0" src="assets/img/barcode/medinfo.jpg" width="170" height="170"> </a> <br>
                        <?php }
                        ?>
                        
                        <p>
                            <font color="#8C8C8C">Scan atau Klik QR Code di atas yaa!</font>
                        </p>

                        </center>

                        <center>
                            <div class="form-footer" style="margin-top: 4rem;">
                                <!--<button type="submit" class="button btn-primary block pushed expand"> LANJUTKAN </button> -->
                                <p style="color: black">Created by <a href="#"> Dinas RISTEK - Divisi PTI</a></p>
                        </center>

                    </form>

                </div>

            </div>

        </div>

        <!-- ===== JS ===== -->
        <script src="assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>

</html>

<?php
}
?>