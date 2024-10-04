<?php
// Membuat variabel array
$arrayData = [
    "nama" => "Annisa",
    "usia" => 20, 
    "nim" => "G.211.22.0054", 
    "hobi" => ["membaca", "menyayi", "menulis"],
    "alamat" => "Sedompyong IV"
];

// encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "Data dalam format JSON: " . $jsonData;

?>

