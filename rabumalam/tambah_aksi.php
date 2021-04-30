<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no_booking = $_POST['no_booking'];
$tgl_booking = $_POST['tgl_booking'];
$no_kamar = $_POST['no_kamar'];
$type_kamar = $_POST['type_kamar'];
$fasilitas = $_POST['fasilitas'];
$tarif_perhari = $_POST['tarif_perhari'];
$lama_menginap = $_POST['lama_menginap'];
$total_biaya = $_POST['total_biaya'];

// menginput data ke database
mysqli_query($koneksi,"insert into booking_kamar values('$no_booking','$tgl_booking','$no_kamar','$type_kamar','$fasilitas','$tarif_perhari',
'$lama_menginap','$total_biaya')");

// mengalihkan halaman kembali ke index.php
header("location:form_daftar_pesanan.php");

?>