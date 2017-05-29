<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$server = 'localhost';
$username = 'pizaini';
$password = 'xxxxx';
$database = 'belajar_web';
$connection = null;
try{
    $connection = new PDO('mysql:host='.$server.';dbname='.$database,
        $username,
        $password);

    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
}catch (PDOException $ex){
    echo "koneksi Gagal: ".$ex->getMessage();
}