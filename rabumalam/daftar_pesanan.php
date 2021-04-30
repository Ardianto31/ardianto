<!DOCTYPE html>
<html>
<head>
<title>HOTEL ARDI </title>
</head>
<body>
<h2><center> DATA CUSTOMER HOTEL ARDI</center></h2>
<br/>
<a href="form_tambah_pesanan.php">+ TAMBAH PESANAN</a>
<br/>
<br/>
<table border="1">
<tr>
<th>NO_BOOKING</th>
<th>TGL_BOOKING</th>
<th>NO_KAMAR</th>
<th>TYPE_KAMAR</th>
<th>FASILITAS</th>
<th>TARIF_PERHARI</th>
<th>LAMA_MENGINAP</th>
<th>TOTAL_BIAYA</th>
</tr>
<?php 
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from booking_kamar");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['no_booking']; ?></td>
<td><?php echo $d['no_kamar']; ?></td>
<td><?php echo $d['type_kamar']; ?></td>
<td><?php echo $d['fasilitas']; ?></td>
<td><?php echo $d['tarif_perhari']; ?></td>
<td><?php echo $d['lama_menginap']; ?></td>
<td><?php echo $d['total_biaya']; ?></td>
<td>
<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
</td>
</tr>
<?php 
}
?>
</table>
</body>
</html>