<?php

include "main_page.php";

class TotalBelanja {
    var $harga_mangga; 
    var $harga_jambu; 
    var $harga_salak;
   
    public function __construct($berat_mangga, $berat_jambu, $berat_salak) {
        $this->berat_mangga = $berat_mangga;
        $this->berat_jambu = $berat_jambu;
        $this->berat_salak = $berat_salak;
    }
    
    public function getMangga() {
        $this->harga_mangga = $this->berat_mangga * 15000;
        echo "<h2>Total Belanja</h2>";
        echo "Total Harga Mangga : ".$this->harga_mangga;
    }

    public function getJambu() {
        $this->harga_jambu = $this->berat_jambu * 13000;
        echo "<br>Total Harga Jambu : ".$this->harga_jambu;
    }

    public function getSalak() {
        $this->harga_salak = $this->berat_salak * 10000;
        echo "<br>Total Harga Salak : ".$this->harga_salak;
    }

    public function total() {
        $total_harga = $this->harga_mangga + $this->harga_jambu + $this->harga_salak;
        echo "<br>Total Harga Belanja = ".$total_harga;
    }
}

$berat_mangga = $_POST["berat_mangga"];
$berat_jambu = $_POST["berat_jambu"];
$berat_salak = $_POST["berat_salak"];

$daftar_belanja = new TotalBelanja($berat_mangga, $berat_jambu, $berat_salak);

$daftar_belanja->getMangga();

$daftar_belanja->getJambu();

$daftar_belanja->getSalak();

$daftar_belanja->total();

?>