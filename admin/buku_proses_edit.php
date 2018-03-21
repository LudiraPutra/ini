<?php
include '../conn/koneksi.php';

$id = $_POST ['id'];
$judul = $_POST ['judul'];
$kelas = $_POST ['kelas'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['thn_terbit'];
$jumlah = $_POST['jumlah_buku'];
$tgl_input = $_POST['tgl_input'];
$pake = $_POST['pake'];
$keterangan= $_POST['keterangan'];

 $input = mysql_query("UPDATE tabel_buku SET judul='$judul',
										 kelas='$kelas',
 										 pengarang='$pengarang',
										 penerbit='$penerbit',
										 thn_terbit='$tahun',
										 jumlah_buku='$jumlah',
										 tgl_input='$tgl_input',
										 pake='$pake',
										 keterangan='$keterangan'
										 WHERE id='$id'");

if ($input) {
	echo "<script> alert('Data Berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku_edit&id=$id'>";
}

?>
