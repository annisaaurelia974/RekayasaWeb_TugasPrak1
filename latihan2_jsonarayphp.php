<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Annisa","usia":20,"nim":"G.211.22.0054","hobi":"membaca","alamat":"Sedompyong IV"}';

// Decode JSON menjadi Object PHP
$obj = json_decode($jsonData);
echo "Nama (dari Object): " . $obj->nama;
echo "Usia (dari Object): " . $obj->usia;
echo "NIM (dari Object): " . $obj->nim;
echo "Hobi Pertama (dari Object): " . $obj->hobi;
echo "Alamat (dari Object): " . $obj->alamat;

// Decode JSON menjadi Array PHP
$arr = json_decode($jsonData, true);
echo "Nama (dari Array): " . $arr['nama'];
echo "Usia (dari Array): " . $arr['usia'];
echo "NIM (dari Array): " . $arr['nim'];
echo "Hobi Pertama (dari Array): " . $arr['hobi'];
echo "Alamat (dari Array): " . $arr['alamat'];
?>
