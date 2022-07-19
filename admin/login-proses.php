<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

session_start();
?>
 
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
</head>
<body>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/sweetalert2.js"></script>

<?php
 
 // menghubungkan dengan koneksi
include "../koneksi.php";

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password']; 


// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password' ");
//or die (mysqli_error($koneksi)) ; 

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

    if ($cek> 0){
        $_SESSION['username'] = $username;
        echo "<script>
            Swal.fire('Berhasil!', 'Selamat Datang di Admin OPREC BPH HIMSI 2022', 'success').then(function(){
                setTimeout(document.location.href = '../admin', 100);
                })
                </script>";
        //header("location:index.php"); 
    }
    else {
        echo "<script>
            Swal.fire('Gagal!', 'Username atau Password Salah', 'error').then(function(){
                setTimeout(document.location.href = '../admin', 100);
                })
                </script>";
    }

?>
</body>

</html>