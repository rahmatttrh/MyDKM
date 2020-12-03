<?php require 'functions.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">

	</head>
	<body style="background: #222">
		<section id="login">
			<main>
				<center class="logo">
					<img  src="img/logo.png" /><br>
					<h2>MY <span>DKM</span></h2>
				</center>
				<form action="" method="POST">
					<!-- <label for="">Username</label> -->
					<input type="text" name="username" placeholder="username.." />
					<!-- <label for="">Password</label> -->
					<input type="password" name="password" placeholder="password.." />
					<button type="submit" name="login">Login</button>
					
				</form>
				<p>Silahkan login untuk melihat data.</p>
			</main>
		</section>
			
	</body>
</html>