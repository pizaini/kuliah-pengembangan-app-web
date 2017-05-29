<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include "connection.php";
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$tglLahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
//query
$queryUpdate = 'UPDATE mahasiswa SET nim = :a, nama = :b, jenis_kelamin = :c, tgl_lahir = :d, alamat = :e WHERE id = :f';
$result = $connection->prepare($queryUpdate);
$isSuccess = $result->execute(array(
    'a' => $nim,
    'b' => $nama,
    'c' => $jenisKelamin,
    'd' => $tglLahir,
    'e' => $alamat,
    'f' => $id
));
if($isSuccess){
   header('location: query1.php');
}else{
    echo 'Data gagal diupdate';
}