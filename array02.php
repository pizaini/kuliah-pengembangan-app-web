<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$mahasiswa = array(
    "nama" => "Andi",
    "nim" => "11551000000"
);

//menambahkan data ke array dengan key otomatis
$mahasiswa[] = "Budi";
//menambahkan data ke array dengan custom key
$mahasiswa["alamat"] = "Jl. Kayu Jati - London Utara";

//mengakses array
echo $mahasiswa["nama"];
echo "<br>";

//dumping array
var_dump($mahasiswa);

//loop data array
foreach ($mahasiswa as $key => $value){
    echo "Key: {$key} value: {$value} </br>";
}