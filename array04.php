<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$nilai = array(
    "rpl" => 85,
    "daspro" => 89,
    "alpro" => 75,
    "agama1" => 91,
    "agama2" => 70,
    "rti" => 76
);

//loop
$total = 0;
foreach ($nilai as $value){
    echo $value."<br>";
    $total  += $value;
}
echo "<h1>Total: {$total}</h1>";
echo "<h1>Rata rata: ".($total/count($nilai))."</h1>";
