<?php

session_start();

if (isset($_SESSION["nim"])) {
	if (isset($_SESSION["lulus"])) {
		header("Location: lulus.php");
	} else if (isset($_SESSION["tidak_lulus"])) {
		header("Location: semangat.php");
	}
}

if (isset($_POST["login"])) {

	if ($_POST["nim"] === "" && $_POST["password"] === "") {
		$error = true;
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | PENGUMUMAN OPREC BPH HIMSI UNSRI 2022</title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100&display=swap" rel="stylesheet">

	<!-- ===== CSS ===== -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/styles.css">
	
	<style>
		body {
			display: flex;
			flex-direction: column;
		}

		img {
			margin-top: 10rem;
			position: relative;
			z-index: 5;
		}
		
		@media (min-width: 250px) and (max-width: 500px) {
            input[type="password"], input[type="text"] {
              padding: 0;
              width: 100%;
            }
		}

	</style>

	<!-- ===== BOX ICONS ===== -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

	<!-- <img src="assets/img/himsi.png" class="d-block" alt=""> -->

	<div class="registrasi">
		<div class="login__content">

			<div class="login__forms">
				<form action="proses.php" class="login__registre" id="login-in smart-form" method="post">
				    <img src="assets/img/himsi.png" alt="" width="180px;" style="margin: auto; display: block;"><br>
					<h1 class="login__title fw-bold">LOGIN</h1>
					<hr>

					<div class="login__box">
						<i class='bx bxs-id-card login__icon'></i>
						<input type="text" placeholder="NIM" name="nim" class="login__input" minlength="14" maxlength="14">
					</div>

					<div class="login__box">
						<i class='bx bxs-lock-alt login__icon '></i>
						<input type="password" placeholder="Password" name="password" class="login__input">
					</div>

					<button class="login__button pushed" name="login" type="submit">Log In</button>

				</form>
			</div>
		</div>
	</div>

</body>

</html>