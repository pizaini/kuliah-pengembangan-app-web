<?php
/**
 * Created by Pizaini
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$kodeJurusan = "PBA";
$jurusan;
switch ($kodeJurusan){
    case 'TIF':{
        $jurusan = "Teknik Informatika";
        break;
    }
    case 'SI':{
        $jurusan = "Sistem Informasi";
        break;
    }
    case 'TIN':{
        $jurusan = "Teknik Industri";
        break;
    }
    case 'MT':{
        $jurusan = "Matematika";
    }
    case 'TE':{
        $jurusan = "Teknik Elektro";
        break;
    }
    default:{
        $jurusan = "Pilihan tidak ditemukan";
    }
}
echo $jurusan;