<?php 

if(isset($_POST['login'])){
					include "koneksi.php";
					$cek_data = mysqli_query($conn, "SELECT * FROM user WHERE
					username = '".$_POST['username']."' AND password = '".$_POST['password']."'");
					$data = mysqli_fetch_array($cek_data);
					$level = $data['level'];
					$nama = $data['nama_lengkap'];
					if(mysqli_num_rows($cek_data) > 0){
						session_start();
						$_SESSION['nama'] = $nama;
						if($level == 'dkm'){
							header('location:dkm.php');
						}elseif($level == 'jemaah'){
							header('location:jemaah.php');
					}else{
						echo 'gagal login';
					}
				}
			}
?>