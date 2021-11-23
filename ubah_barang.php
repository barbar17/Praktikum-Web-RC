<?php

include "koneksi_DB.php";

$id= $_POST["id"];
$nama = $_POST["nama"];
$jenis = $_POST["jenis"];
$qty = $_POST["qty"];
$harga = $_POST["harga"];

$sql = "update barang set id = '$id', nama = '$nama', jenis = '$jenis', qty = '$qty', harga = '$harga' where id = $id";

$hasil = mysqli_query($kon,$sql);
?>