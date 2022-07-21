<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	 <table align="center" border="1" cellspacing="0" width="100%" bgcolor="B8860B">
	 	<tr>
	 		<td><h2>Toyota Innova</h2>
	 			<img src="inv1.png"></td>
	 	</tr>
    	<tr align="center" border="0">
      		<th "colspan="8" bgcolor="B8860B"><font color="000000">
        	<h2>FORMUKIR PEMESANAN</h2></font></th>
        </tr>

        <form name="form1" method="post" action="pesan.php">              
          <table width="58%" border="0" align="center"></tr>
			<tr>
			<td>Nama Lengkap</td>
			<td><input name="nama" type="text" id="nama"></td>
			</tr>

			<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" id="alamat"></textarea></td> </textarea></tr>
			</tr>

			<tr>
			<td>E-Mail</td>
			<td><input name="email" type="text" id="email"></td> </tr>
			</tr>

			<tr>
			<td>Pembayaran</td>
			  <td><select name="ukuran" id="ukuran">
			  <option>--pilihan--</option>
			  <option>BNI</option>
			  <option>BCA</option>
			  <option>MANDIRI</option>
			  <option>CASH</option></td>
			</select>
			</tr>

			<tr>
			<td>Pesanan</td>
			<td><select name="pesanan" id="pesanan">
			  <option>--pilihan--</option>
			  <option>Toyota Innova</option>
			  <option>Avanza</option>
			  <option>Toyota Avanza</option>
			</select></td>
			</tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
			</td>
			</tr>
			<tr><th><br><br></th></tr>
			</table></form>
</body>
</html>