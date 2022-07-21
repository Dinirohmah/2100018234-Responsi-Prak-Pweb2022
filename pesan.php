<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="B8860B">
<?php
//menyimpan inputan post kedalam variabel
$mode      =date("Y-m-d");
$nama      = $_POST['nama'];
$alamat    = $_POST['alamat'];
$email     = $_POST['email'];
$tanggal   = $_POST['tanggal'];
$bayar     = $_POST['bayar'];
$mobil     = $_POST['mobil'];
$time      = $_POST['time'];
$pesan     = $_POST['pesan'];

echo "<head><title>kingtour</head></title>";
$fp= fopen("rental.txt", "a++");
fputs($fp,"$mode|$nama|$alamat|$email|$tanggal|$time|$mobil|$bayar|$pesan\n");
fclose($fp);

echo "<center>";
echo "<h1>KING TOUR</h1>";
echo "<p>Terimakasih Telah Memilih Jasa Sewa Kami</p>";
echo "<a href=index.html>Pesan Lagi</a><br>";
echo "<a href=lihat.php>Lihat Pesanan </a><br>";
?>
</body>
</html>