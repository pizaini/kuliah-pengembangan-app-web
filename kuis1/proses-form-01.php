<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include "q-01.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hobbi_post = $_POST['hobbi'];
$jurusan_post = $_POST['jurusan'];
?>
<h1>BiodataMahasiswa</h1>
<p>Nama: <?=$nama?></p>
<p>Alamat: <?=$alamat?></p>
<p>Hobbies: <?=$hobbies[$hobbi_post]?></p>
<p>Jurusan: <?=$jurusan[$jurusan_post]?></p>
