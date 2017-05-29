<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
$jurusan = array(
    'TIF' => 'Teknik Informatika',
    'TE' => 'Teknik Elektro',
    'TI' => 'Teknik Industri',
    'SI' => 'Sistem Informasi',
    'MT' => 'Matematika'
);
$hobbies = array(
    'hobby-01' => 'Olahraga',
    'hobby-02' => 'Kuliner',
    'hobby-03' => 'Musik',
    'hobby-04' => 'Fotografi'
);

function createDropdownJurusan($jurusan){
    echo "<select name='jurusan'>";
    foreach ($jurusan as $key => $value){
        echo "<option value='{$key}'>{$value}</option>";
    }
    echo '</select>';
}

//createDropdownJurusan($jurusan);

function createCheckboxHobbies($hobbies){
    foreach ($hobbies as $key => $value){
        echo "<input type='checkbox' name='hobbi' value='{$key}'>";
        echo "<label>{$value}</label>";
    }
}
//createCheckboxHobbies($hobbies);