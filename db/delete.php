<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include "connection.php";
$id = $_GET['id'];

$queryDelete = 'DELETE FROM mahasiswa WHERE id = :a';
$result = $connection->prepare($queryDelete);
$isSuccess = $result->execute([
    'a' => $id
]);
if($isSuccess){
    header('location: query1.php');
}else{
    echo '<h3>Data gagal dihapus</h3>';
}