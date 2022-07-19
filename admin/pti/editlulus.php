<?php
include "../../koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Lulus</title>
</head>

<body>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/sweetalert2.js"></script>
    <?php

    $id    = $_GET['id_regis'];
    $lulus  = $_GET['lulus'];
    $query = "UPDATE regis SET 
			 lulus='$lulus' 
			 WHERE id_regis = '$id'";
    $hasil = mysqli_query($koneksi, $query);
    if ($hasil) {
        echo "
            <script>
                Swal.fire('Berhasil', 'Lulus berhasil diubah!', 'success').then(function(){
                    setTimeout(window.location.href = 'pilihstaf.php', 100);
                    })
            </script>";
    } else {
        echo "
            <script>
                Swal.fire('Gagal', 'Lulus gagal diubah!', 'error').then(function(){
                    setTimeout(window.location.href = 'pilihstaf.php', 100);
                    })
            </script>";
    }
    $koneksi->close();

    ?>
</body>

</html>