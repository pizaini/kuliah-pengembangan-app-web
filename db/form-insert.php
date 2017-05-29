<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
?>
<h1>Insert Data Mahasiswa</h1>
<form action="insert.php" method="post">
    <dl>
        <dt>NIM</dt>
        <dd><input type="text" name="nim"></dd>
    </dl>
    <dl>
        <dt>Nama</dt>
        <dd><input type="text" name="nama"></dd>
    </dl>
    <dl>
        <dt>Jenis Kelamin</dt>
        <dd>
            <input type="radio" name="jenis_kelamin" value="1"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="0"> Perempuan
        </dd>
    </dl>
    <dl>
        <dt>Tgl. Lahir</dt>
        <dd><input type="date" name="tgl_lahir"></dd>
    </dl>
    <dl>
        <dt>Alamat</dt>
        <dd><textarea rows="4" name="alamat"></textarea></dd>
    </dl>
    <button type="submit">Simpan</button>
</form>