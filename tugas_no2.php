<?php

$list_data = ['larine','aduh','qifuat','toda','anevi','samid','kifuat'];

echo "DATA SEBELUM DIURUTKAN : ";
foreach($list_data as $data) {
    echo '<br>';
    echo $data;
}

sort($list_data); //fungsi sorting data

echo "<br> <br>";
echo "DATA SETELAH DIURUTKAN : ";
foreach($list_data as $data) {
    echo '<br>';
    echo $data;
}

?>