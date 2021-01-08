<?php require 'functions.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MYDKM - Login</title>
		<link rel="icon" href="img/logo.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

	</head>
	<body style="background: #222">
		<section id="login">
			<main>
				<center class="logo">
					<img  src="img/logo.png" /><br>
					<h2>MY <span>DKM</span></h2>
					<p style="margin-top: 0; margin-bottom: 10px;font-size: 12px">Sistem Informasi Keuangan Masjid</p>
				</center>
				<form action="" method="POST" style="text-align: center;">
					<h4 >Assalamualaikum,</h4>
					<p style="margin-bottom: 10px;margin-top: 0px ;font-size: 12px">Silahkan login</p>
					<!-- <label for="">Username</label> -->
					<input type="text" name="username" placeholder="username.." />
					<!-- <label for="">Password</label> -->
					<input type="password" name="password" placeholder="password.." />
					<button type="submit" name="login">Login</button>
					
				</form>
				<p class="footer">Rahmat Hidayat / 171011400893.</p>
				<div style="font-size: 12px;text-align: center;margin-top: 10px; color: #777">
					<p >Username: jemaah / Pass: jemaah123</p>
					<!-- <p >Username: dkm / Pass: dkm123</p> -->
				</div>
				
			</main>
		</section>
		<script src="js/jquery.min.js"></script>
	</body>
</html>