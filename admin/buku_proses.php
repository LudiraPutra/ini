<?php
include '../conn/koneksi.php';

$judul = $_POST ['judul'];
$kelas = $_POST ['kelas'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['thn_terbit'];
$jumlah = $_POST['jumlah_buku'];
$tgl_input = $_POST['tgl_input'];
$pake = $_POST['pake'];
$keterangan= $_POST['keterangan'];
		

 $input = mysql_query("INSERT into tabel_buku values('','$judul','$kelas','$pengarang','$penerbit','$tahun','$jumlah','$tgl_input','$pake','$keterangan')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=detil-buku&judul=$judul'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-buku'>";	
}

?>
