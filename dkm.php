<?php
session_start();
require 'koneksi.php';
if (empty($_SESSION['nama'])) {
    header("location: index.php");
}


if (isset($_POST["tampil"])) {
	$bulan = $_POST["bulan"];
} else{
	$bulan = date("F", strtotime('m'));
}



$resultKas = mysqli_query($conn, "SELECT * FROM kas WHERE bulan = '$bulan'");

$pemasukan = mysqli_query($conn, "SELECT SUM(nominal) as total FROM kas WHERE bulan = '$bulan'");
$rowI = mysqli_fetch_array($pemasukan);
$sumPemasukan = $rowI['total'];

$resultPeng = mysqli_query($conn, "SELECT * FROM pengeluaran WHERE bulan = '$bulan'");

$pengeluaran = mysqli_query($conn, "SELECT SUM(nominal) as total FROM pengeluaran WHERE bulan = '$bulan'");
$rowO = mysqli_fetch_array($pengeluaran);
$sumPengeluaran = $rowO['total'];


$sisa = $sumPemasukan - $sumPengeluaran;

$totalPemasukan = mysqli_query($conn, "SELECT SUM(nominal) as total FROM kas");
$rowTI = mysqli_fetch_array($totalPemasukan);
$sumTI = $rowTI['total'];
$totalPengeluaran = mysqli_query($conn, "SELECT SUM(nominal) as total FROM pengeluaran");
$rowTO = mysqli_fetch_array($totalPengeluaran);
$sumTO = $rowTO['total'];
$saldo = $sumTI - $sumTO;

?>
<html>
	<head>
		<title>Halaman Admin</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/mobile.css">
	</head>
	<body>
		<header>
			<a href="dkm.php"><h2>MY<span>DKM</span></h2></a>
			<nav class="nav">
				<a href="pemasukan.php">Pemasukan</a>
				<a href="pengeluaran.php">Pengeluaran</a>
				<a  onclick="confirm('Yakin ingin keluar?');" href="logout.php">Logout</a>
			</nav>

			<div class="burger">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</header>

		<section id="dkm">
			<menu>
				<div class="bulan box">
					<form action="" method="post">
					<select name="bulan" id="bulan">
						<option value="Januari">Januari</option>
						<option value="Februari">Februari</option>
						<option value="Oktober">Oktober</option>
						<option value="November">November</option>

					</select>
					<button type="submit"  name="tampil">Tampilkan</button>
					</form>
				</div>
				<div class="latest box">
					Total Saldo &nbsp<span>Rp. <?= number_format($saldo, 0, ",", ".") ?></span>
				</div>
			</menu>
			<main>
				<a onclick="openData('Pemasukan')" class="total box" style="margin-right: 10px">
					
					<p>Pemasukan</p>
					<!-- <span>Rp. 2500,000</span> -->
					<span>Rp <?= number_format($sumPemasukan, 0, ",", ".") ?></span>
				
				</a>
				
				
				<a onclick="openData('Pengeluaran')" class="pengeluaran box" style="margin-right: 10px">
					
					<p>Pengeluaran</p>
					<!-- <span>Rp. 2500,000</span> -->
					<span>Rp <?= number_format($sumPengeluaran, 0, ",", ".") ?></span>
				
				</a>
				<div class="sisa box">
					<p>Sisa</p>
					<span>Rp <?= number_format($sisa, 0, ",", ".") ?></span>
				</div>
				
			</main>
			
				
			
			<div class="konten box">
				

				<div id="Pemasukan" class="data">
					<h1>Pemasukan</h1>
				  <table >
					<tr>
						<th>No</th>
						<th>Nominal</th>
						<th>Dari</th>
						<th>Bulan</th>
					</tr>
					<?php $no =1 ?>
					<?php while ($row = mysqli_fetch_assoc($resultKas)) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $row["nominal"] ?></td>
							<td><?= $row["keterangan"] ?></td>
							<td><?= $row["bulan"] ?></td>
						</tr>
					<?php endwhile ?>

					<!-- <tr>
						<td>1</td>
						<td>Rp. 450,000</td>
						<td>Hamba Allah</td>
						<td>Alm. Bpk Budi</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Rp. 450,000</td>
						<td>Hamba Allah</td>
						<td>Alm. Bpk Budi</td>
					</tr> -->
				</table>
				</div>

				<div id="Pengeluaran" class="data" style="display:none">
					<h1>Pengeluaran</h1>
				  <table >
					<tr>
						<th>No</th>
						<th>Nominal</th>
						<th>Keterangan</th>
						<th>Untuk</th>
					</tr>
					<?php $no =1 ?>
					<?php while ($row = mysqli_fetch_assoc($resultPeng)) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $row["nominal"] ?></td>
							<td><?= $row["keterangan"] ?></td>
							<td><?= $row["bulan"] ?></td>
						</tr>
					<?php endwhile ?>
					
				</table>
			</div>

				
			</div>
		</section>

		<script src="js/app.js"></script>
		<script>
		function openData(dataName) {
		  var i;
		  var x = document.getElementsByClassName("data");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  document.getElementById(dataName).style.display = "block";  
		}
		</script>
	</body>
</html>