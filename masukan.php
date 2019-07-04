<!--kodingan untuk kometar-->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form name="form_komentar" method="post">
<p> Masukan : </p>
<input type="text" name="komentar" style="size: 200"><br>
<input type="submit" name="kirim" value="kirim">
</form>
<?php
if (isset($_POST['kirim']) && isset($_POST['komentar'])) {
	//mendeklarasikan variable $komentar
	$komentar = $_POST['komentar'];
	//membuka file masuk.txt lalu menuliskannya
	$file = fopen('masuk.txt', 'w');
	//memberi perintah 'write' dari inputan variable $komentar
	fwrite($file, $komentar);
	//menutup file masuk.txt setelah menulis inputan di dalamnya
	fclose($file);

	
}
?>
</body>
</html>