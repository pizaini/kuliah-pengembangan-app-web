<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include 'q-01.php';
?>
<html>
<head>
    <title>Form</title>
</head>
<body>
<h1>Form</h1>
    <form method="post" action="proses-form-01.php">
        <p>Nama: <input type="text" name="nama"></p>
        <p>Alamat: <textarea rows="4" name="alamat"></textarea></p>
        <p>Hobby: <?php createCheckboxHobbies($hobbies)?></p>
        <p>Jurusan: <?php createDropdownJurusan($jurusan)?></p>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
