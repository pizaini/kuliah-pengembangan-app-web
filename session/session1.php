<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
session_start();
//set data session
$_SESSION['contoh_session1'] = 'ini adalah data session 1';
$_SESSION['contoh_session2'] = 'ini adalah session 2';

//memeriksa data session
if(isset($_SESSION['contoh_session1'])){
    echo 'Session 1 telah diset';
}
if(isset($_SESSION['contoh_session2'])){
    echo 'Session 2 telah diset';
}