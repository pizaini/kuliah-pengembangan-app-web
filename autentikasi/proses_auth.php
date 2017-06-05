<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
session_start();
include "../db/connection.php";
$noRekening = $_POST['username'];
$passsord = $_POST['password'];

$querySelect = 'select * from nasabah where no_rekening = :no_rekening and password = :password';

$result = $connection->prepare($querySelect);
$result->execute(array(
    'no_rekening' => $noRekening,
    'password' => hash('sha1', $passsord)
));
//Memastikan hasil query adalah 1 record
if($result->rowCount() === 1){
    $nasabah = $result->fetch();
    //set session
    $_SESSION['nama_nasabah'] = $nasabah['nama'];
    //move to user page
    header('location: page1.php');
}else{
    echo 'Data tidak ditemukan';
    include_once 'auth.php';
}