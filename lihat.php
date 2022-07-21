<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lihat pesanan</title>
</head>
<style>
	body{
		background:  darkslategray;
	}
	.tabel{
		border: 1px solid #009ee0;
		background: #f9f6f2;
		border-radius: 0px;
		padding: 0px;
		text-align: center;
		margin-top: 50px;
	}
	.pict{
		background: darkslategray;
	}
</style>
<body>
		<table border="0" align="center">
		<tr class="baris1">
			<td align="left" class="link">
			<h1 class="come" align="center" id="home">THE kINGtOUR</h1>
			<br>
			<h2 align="center">Lihat Pesanan</h2></td></font>
		</tr>
		<tr class="pict">
			<td align="center" width="250"><img src="dai2.png"></td>
		</tr>
<?php
//melihat pesanan
echo "<head><title>rental mobil</head></title>";
$fp= fopen("rental.txt", "r");
echo "<table border=2 align=center class=tabel>";
    echo "<tr><td>Tanggal</td>";
	echo "<td>Nama </td>";
	echo "<td>Alamat</td>";
	echo "<td>Email</td>";
	echo "<td>Tanggal Sewa</td>";
	echo "<td>Waktu Pemakaian</td>";
	echo "<td>Jenis mobil</td>";
	echo "<td>Pembayaran</td>";
	echo "<td>Pesan</td></tr>";

while ($isi = fgets($fp,200)) {
	$pisah = explode("|", $isi);
	echo "<tr><td><$pisah[0]</td>";
	echo "<td>$pisah[1]</td>";
	echo "<td>$pisah[2]</td>";
	echo "<td>$pisah[3]</td>";
	echo "<td>$pisah[4]</td>";
	echo "<td>$pisah[5]</td>";
	echo "<td>$pisah[6]</td>";
	echo "<td>$pisah[7]</td>";
	echo "<td>$pisah[8]</td></tr>";
}
echo "</table>";
echo "<center>";
echo "<a href = index.html> Klik disini </a>";
echo "<font color=white> Isi Pesanan</font>";
?>
</body>
</html>