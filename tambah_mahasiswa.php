<?php
//Include file koneksi ke DB
include "koneksi_DB.php";
//menerima nilai dari form
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

//query input
$sql = "insert into mahasiswa (nim,nama,prodi,angkatan) values('$nim','$nama','$prodi','$angkatan')";

//eksekusi query diatas
$hasil = mysqli_query($kon,$sql);
?>