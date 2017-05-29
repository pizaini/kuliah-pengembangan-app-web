<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$biayaSemester = 3000000;

if($biayaSemester <= 400000){
    echo "UKT 1";
}else if ($biayaSemester > 400000 && $biayaSemester < 2500000){
    echo "UKT 2";
}else{
    echo "UKT 3";
}