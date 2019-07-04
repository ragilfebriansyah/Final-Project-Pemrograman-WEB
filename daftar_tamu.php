<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir Pemrograman WEB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
		<div id="branding">
			<h1>Pemrograman WEB</h1>
		</div>
		<nav>
			<ul>
				<li class="active"><a href="home.html">Home</a></li>
				<li> <a href="biodata.html"><b>About</a></li></b>
				<li> <a href="https://www.instagram.com/ragilfebriansyah/?hl=id"><b>Contac</a></li></b>
				<li> <a href="materi.html"><b>Wawasan</a></li></b>
				<li> <a href="index.html"><b>Pendaftaran</a></li></b>
				<li><a href="daftar_tamu.php"><b>Data Tamu</a></li></b>
			</ul>
		</nav>
	</div>
	</header>

<div class="menu2">
	<center>
		<h2><font face="times new roman" color="black">DATA PENDAFTARAN</h2></font>
		<hr width="88%">
	</center>
	<!--disini data akan di masukkan menjadi seutuhnya, karena data yang mentah sudah di masukkan di index.html dan di olah di proses.html dan akan menjadi file seutuhnya di sini-->
	<?php
	error_reporting(0);
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";

	$fp = fopen("tamu.txt", "r");
	echo "<table border=1 width=95%>";
	echo "<th>No.</th>";
	echo "<th>Nama Lengkap</th>";
	echo "<th>Tanggal Lahir</th>";
	echo "<th>Jenis Kelamin</th>";
	echo "<th>Alamat</th>";
	echo "<th>Agama</th>";
	while($isi = fgets($fp,))
	{
		$pisah = explode("|",$isi);
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td><center>$pisah[0]</center></td>";
		echo "<td><center>$pisah[1]</center></td>";
		echo "<td><center>$pisah[2]</center></td>";
		echo "<td><center>$pisah[3]</center></td>";
		echo "<td><center>$pisah[4]</center></td></tr>";
	$bil++;
	}
	echo "</table>";
	echo "<br>";
	echo "<a class=btn1 href=index.html> <font color='black'>Isi Data </font></a>&nbsp";
	echo "<a class=btn2 href=home.html><font color='black'> Home </font></a>";

	?>
	<!--diatas saya memasukkan nilai kembalian yang mana kembali tersebut mengarah ke index.html dan home.html-->
</div>

<section id="newsletter">
	<div class="container">
		<h1>PENCARIAN</h1>
		<form name="formcari" onSubmit="cari()">
  	<input class="search" name="keyword" type="text" placeholder="Cari..." required>	
  	<input class="button" type="submit" value="Cari">		
	</form>
	
</section>

<section id="boxes">
	<div class="container">
		<div class="box">
			<img src="img/logo 1.jpg">
			<h3>PHOTOGRAPHI</h3>
			<p>
				Photographi adalah sebuah hoby yang banyak di tekuni di kalangan masyarakat, dengan photographi kita bisa banyak mendapatkan ilmu yang bermanfaat. Tak kalah juga photographi juga bisa menghasilkan uang. Contohnya adalah dengan bekerja sebagai jasa Photographi, membuka stand photographi, dan masih banyak lagi.
		</p>
		</div>

		<div class="box">
			<img src="img/logo 2.png">
			<h3>PHOTOSHOP</h3>
			<p>
				Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak digunakan oleh fotografer digital dan perusahaan iklan sehingga dianggap sebagai pemimpin pasar (market leader) untuk perangkat lunak pengolah gambar/foto, dan, bersama Adobe Acrobat, dianggap sebagai produk terbaik yang pernah diproduksi oleh Adobe Systems.
		</p>
	</div>

	<div class="box">
			<img src="img/logo 3.png">
			<h3>ADOBE PREMIER PRO</h3>
			<p>
				Premiere Pro adalah sebuah program penyunting video berbasis non-linier dari Adobe Systems. Itu adalah salah satu produk software dari Adobe Creative Suite, tetapi juga bisa dibeli sendirian. Bahkan kalau dibeli sendirian, itu termasuk Adobe Encore dan Adobe OnLocation.
		</p>
	</div>
</div>
</section>
<div class="jam-digital-malasngoding">
	<div class="kotak">
		<p id="jam"></p>
	</div>
	<div class="kotak">
		<p id="menit"></p>
	</div>
	<div class="kotak">
		<p id="detik"></p>
	</div>
</div>
<center><h3>SEKARANG JAM</h3></center>
<script>
	window.setTimeout("waktu()", 1000);

	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>

<footer>
	<p>
		Ragil Febriansyah_1800018019_Kelas A
	</p>
</footer>

</body>
</html>