<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
//array kosong
$mahasiswa = array();
//array dengan data
$mahasiswa2 = array(
    "Andi",
    "Badu",
    "Cika",
    "Edi",
    "Fery"
);

//menambahkan data ke array
$mahasiswa [] = "A";
$mahasiswa[] = "B";
$mahasiswa[] = "C";
$mahasiswa2[] = "Denny";

//mengakses array satu per satu
echo $mahasiswa[0];
echo '<br>';
echo $mahasiswa2[3];echo '<br>';
//dump variable
var_dump($mahasiswa);
var_dump($mahasiswa2);