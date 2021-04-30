<html>
<head>
<title>Tambah Pesanan</title>
</head>
<body>

<br/>
<a href="form_daftar_pesanan.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA PESANAN</h3>
<form method="post" action="tambah_aksi.php">
<table>
<tr>
<td>NO_BOOKING</td>
<td><input type="varchar" name="no_booking"></td>
</tr>

<tr>			
<td>TGL_BOOKING</td>
<td><input type="date" name="tgl_booking"></td>
</tr>

<tr>
<td>NO_KAMAR</td>
<td><input type="varchar" name="no_kamar"></td>
</tr>

<tr>
<td>TYPE_KAMAR</td>
<td><input type="varchar" name="type_kamar"></td>
</tr>

<tr>
<td>FASILITAS</td>
<td><input type="varchar" name="fasilitas"></td>
</tr>

<tr>
<td>TARIF_PERHARI</td>
<td><input type="varchar" name="tarif_perhari"></td>
</tr>

<tr>
<td>LAMA_MENGINAP</td>
<td><input type="varchar" name="lama_menginap"></td>
</tr>

<tr>
<td>TOTAL_BIAYA</td>
<td><input type="varchar" name="total_biaya"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>	
	
</table>
</form>
</body>
</html>
<form method="post" action="tambah_aksi.php">