<?php

include "koneksi_DB.php";

$id= $_POST["id"];
$nama = $_POST["nama"];
$jenis = $_POST["jenis"];
$qty = $_POST["qty"];
$harga = $_POST["harga"];


$sql = "insert into barang (id,nama,jenis,qty,harga) values('$id','$nama','$jenis','$qty','$harga')";


$hasil = mysqli_query($kon,$sql);
?>