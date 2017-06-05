<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
session_start();
if(!isset($_SESSION['nama_nasabah'])){
    header('location: auth.php');
}
?>
<h1>Selamat datang <strong><?=$_SESSION['nama_nasabah']?></strong></h1>

<a href="auth_off.php">Keluar</a>
