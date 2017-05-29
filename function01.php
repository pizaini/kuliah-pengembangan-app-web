<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
function tampilkanNama(){
    echo "Nama saya: Ronald";
}

function hitungIpk($totalNilai, $totalSks){
    $ipk = $totalNilai / $totalSks;
    return $ipk;
}

function tampilkanH1($title){
    echo "<h1>{$title}</h1>";
}

tampilkanNama();
echo '</br>';
echo "IPK Saya ".hitungIpk(100, 30);
tampilkanH1('Ini adalah H1');