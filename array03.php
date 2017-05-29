<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$mahasiswa = array();
//menambahkan data baru (array) ke mahasiswa
$mahasiswa[] = array(
    "nama" => "Andi",
    "nim" => "1151000000",
    "alamat" => "Pekanbaru"
);
//menambahkan array ke array
$mahasiswa[] = array(
    "nama" => "Budi",
    "nim" => "1151000001",
    "alamat" => "Bangkinang"
);
//mengakses langsung array multi-dimensi
echo $mahasiswa[0]["nama"].'<br>';
echo $mahasiswa[1]["nama"].'<br>';
//dump array
print_r($mahasiswa);
echo '<br>';
//loop array
foreach ($mahasiswa as $arr1) {
    foreach ($arr1 as $val){
        echo $val."<br>";
    }
}
