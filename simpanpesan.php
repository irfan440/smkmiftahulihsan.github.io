<?php
// koneksi ke database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_bukutamu = $_POST['id_bukutamu'];
$email	= $_POST['email'];
$nama	= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$pesan	= $_POST['pesan'];

//menginput data ke database
mysqli_query($koneksi,"insert into bukutamu value('','$email','$nama','$alamat','$pesan')");

//mengalihkan halaman kembali ke index.php
header("location:index1.php");

?>