<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
session_start();
if(isset($_SESSION['contoh_session1'])){
    echo 'Session 1 telah diset';
}else{
    echo 'Session 1 BELUM diset';
}
if(isset($_SESSION['contoh_session2'])){
    echo 'Session 2 telah diset';
}else{
    echo 'Session 2 BELUM diset';
}