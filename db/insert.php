<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include 'connection.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tglLahir = $_POST['tgl_lahir'];

$queryInsert = 'INSERT INTO mahasiswa 
(nim, nama, jenis_kelamin, tgl_lahir, alamat) values 
(:nim, :nm, :jk, :tgl, :almt)';

$result = $connection->prepare($queryInsert);
$isSuccess = $result->execute([
    'nim' => $nim,
    'nm' => $nama,
    'jk' => $jenisKelamin,
    'tgl' => $tglLahir,
    'almt' => $alamat
]);
if($isSuccess){
    header('location: query1.php');
}else{
    echo '<h3>Data gagal disimpan</h3>';
}