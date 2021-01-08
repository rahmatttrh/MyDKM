<?php
session_start();
require 'koneksi.php';
if (empty($_SESSION['nama']) || $_SESSION['nama'] == 'Jemaah Masjid At-taqwa') {
    header("location: logout.php");
} 
 $alert = '';

if (isset($_POST["submit"])) {
	$keterangan = $_POST["keterangan"];
	$nominal = $_POST["nominal"];
	$tanggal = date("Y/m/d");
	$bulan = date("F", strtotime('m'));

	$query = "INSERT INTO kas VALUES ('','$keterangan', '$nominal','$tanggal', '$bulan')";

	mysqli_query($conn, $query);
	$alert = 'success';
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MYDKM - Pemasukan</title>
		<link rel="icon" href="img/logo.png">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">
		<style>
			
		</style>
	</head>
	<body>
		<header>
			<a href="dkm.php"><h2>MY<span>DKM</span></h2></a>
			<nav class="nav">
				<a href="pemasukan.php">Pemasukan</a>
				<a href="pengeluaran.php">Pengeluaran</a>
				<a href="logout.php">Logout</a>
			</nav>

			<div class="burger">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</header>

		<section id="input">
			<?php if ($alert == 'success') {
				echo '<p class="alert">Data berhasil disimpan.</p>';
			} ?>
			
			<main>

				<h1>Pemasukan</h1>
				<form action="" method="post">
					<input type="text" name="keterangan" placeholder="Keterangan..">
					<input type="number" name="nominal" placeholder="Nominal..">
					<button type="submit" name="submit">Simpan</button>
				</form>

				<p>Pastikan data yang di input benar.</p>
			</main>
			
		</section>


		<script src="js/app.js"></script>
	</body>
</html>