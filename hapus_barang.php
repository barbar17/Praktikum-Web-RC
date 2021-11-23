<?php

include "koneksi_DB.php";

if(isset($_POST['id'])){
    $id = $_POST['id'];
}

$hasil = mysqli_query($kon,"delete from barang where id = '".$id."'");
?>