<!--program utama-->
<!--Muhammad Taqiy Rizqillah-->
<!--1800018135-->

<!DOCTYPE html>
<html>
<head>

	<title>Tugas Proyek PWeb</title>
	<!--untuk menghubungkan dengan file css-->
	<link rel="stylesheet" type="text/css" href="tp1.css">
</head>
<body>
	<!--untuk membuat file header dan dropdown-->
<header class="header">
	<div class="menu">

		<ul>
			<li><a href="index.php?page=beranda">BERANDA</a></li>
			<li><a href="index.php?page=data">DATA DIRI</a></li>
			<li class="dropdown"><a href="#">MENU</a>
				<ul class="isi-dropdown">

					<!--untuk mebuat menu dropdown konversi suhu-->
					<li><a href="index.php?page=suhu"> KONVERSI SUHU</a></li>
					
					<!--untuk mebuat menu dropdown kalkulator-->
					<li><a href="index.php?page=kalkulator">KALKULATOR</a></li>
					
					<!--untuk mebuat menu dropdown komentar/masukan-->
					<li><a href="index.php?page=masukan">KIRIM MASUKAN(akses file)</a></li>
				</ul>
			</li>
			<!--untuk membuat menu pencarian google yang dihubungkan dengan file javascript eksternal-->
			<li class="cari"><form name="cari_google" onsubmit="cari()" style="size: 10">PENCRAIAN : <input type="text" name="keyword" size="10"><input type="submit" name="submit" value="google">
				<script type="text/javascript" src="pencarian.js"></script>
				
			</li>

			<!--untuk membuat menu jam yang dihubungkan dengan file javascript eksternal-->
			<li id="jam" class="jam"><script type="text/javascript" src="jam.js"></script>
			</li>
			
			<!--untuk membuat menu tanggal yang dihubungkan dengan file javascript eksternal-->
			<li class="hari"><script type="text/javascript" src="hari.js"></script>
			</li>
		</ul>

	</div>
</header>
<div class="badan">
	<?php
		if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch($page){

			//menghubungkan ke file beranda.html 
		case 'beranda':
		include 'beranda.html';
		break;

		//untuk menapilkan biodata yang tersambung ke file data.html bila kita memilih menu data diri pada menu header
		case 'data':
		include 'data.html';
		break;

		//untuk menampilkan program konversi suhu yang di buat di file js eksternal (apabila kita memilih menu dropdown konversi suhu)
		case 'suhu':
		include 'suhu.php';
		break;

		//untuk menampilkan program kalkulator yang di buat di file js eksternal (apabila kita memilih menu dropdown kalkulator)
		case 'kalkulator':
		include 'kalkulator.php';
		break;

		//untuk menampilkan program komentar yang di buat di file js eksternal (apabila kita memilih menu dropdown komentar)
		case 'masukan':
		include 'masukan.php';
		break;
		default;
	}
	}

	else{
		//menghubungkan ke file beranda.html pada saat mebuka halaman pertama kali
		include"beranda.html";
	}
	?>
</div>
<br/>
</body>
</html>