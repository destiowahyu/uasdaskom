<!DOCTYPE html>
<html>
<head>
	<title>Pesanan Berhasil</title>
	<link rel="stylesheet" type="text/css" href="css/pesanan_selesai.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link href="img/bg2.png" rel="shortcut icon">
	<link href="image/bg2.png" rel="shortcut icon">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="image/bg2.png">
		</div>
		<div class="login-content">
			<form action="index.html"><br><br> 
				<h1 class="title">Selamat Pesanan Anda Berhasil</h1>

				<?php
				$nama = $_GET['nama'];
				$alamat = $_GET['alamat_pengiriman'];
				$no = $_GET['no_telepon'];
				$jenispengiriman = $_GET['jenis_pengiriman'];
				$kurir = $_GET['kurir'];
				$pembayaran = $_GET['metode_pembayaran'];
				$barang = $_GET['barang'];
				?>

				<?php 
    			echo "<br>"; 
  				echo "Selamat pesanan atas nama ".$nama; echo " telah berhasil dibuat."; echo "<br>";
  				echo "Alamat Pengiriman : ".$alamat; echo "<br>";
				echo "No Telepon : ".$no; echo "<br>";
				echo "Anda memilih jenis pengiriman : ".$jenispengiriman; echo "<br>";
				echo "Pihak Ekspedisi yang dipilih : " .$kurir; echo "<br>";
				echo "Metode Pembayaran yang Dipilih : " .$pembayaran; echo "<br>";
				echo "Barang yang anda pesan adalah : " .$barang; echo "<br>"
  				?>

  				<a href="../index.php"><input type="button" class="btn" value="Kembali ke Beranda">
           		
            </form>
        </div>
    </div>


    <script type="text/javascript" src="js/pesanan_selesai.js"></script>
</body>
</html>


