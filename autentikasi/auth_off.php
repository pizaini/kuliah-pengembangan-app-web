<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
session_start();
if(isset($_SESSION['nama_nasabah'])){
    session_destroy();
}
header('location: auth.php');