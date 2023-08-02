<?php

class Luas {
    var $sisi;
    var $panjang;
    var $lebar;
    var $alas;
    var $tinggi;
    var $hasil;

    function persegi($sisi)
    {
        $hasil=$sisi*$sisi;
        return $hasil;
    }
    function persegiPanjang($panjang, $lebar)
    {
        $hasil=$panjang*$lebar;
        return $hasil;
    }
    function segitiga($alas, $tinggi)
    {
        $hasil=0.5*$alas*$tinggi;
        return $hasil;
    }
}

if (isset($_POST['sisi'])) {
    $sisi = $_POST['sisi'];
    $luas = new Luas();
    $hasilLuas = $luas->persegi($sisi);

    echo "Hasil Luas Persegi: " . $hasilLuas . "<br>";
}
if (isset($_POST['panjang']) && (isset($_POST['lebar']))) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luas = new Luas();
    $hasilLuas = $luas->persegiPanjang($panjang, $lebar);

    echo "Hasil Luas Persegi Panjang: " . $hasilLuas . "<br>";
}
if (isset($_POST['alas']) && (isset($_POST['tinggi']))) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas = new Luas();
    $hasilLuas = $luas->segitiga($alas, $tinggi);

    echo "Hasil Luas Segitiga: " . $hasilLuas . "<br>";
}

?>