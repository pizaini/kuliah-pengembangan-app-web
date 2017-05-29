<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
?>
<htm>
    <head>
        <title>Form 01</title>
    </head>
    <body>
    <h1>FORM 01</h1>
    <form action="form01_proses.php" method="post">
        <p>Name:
            <input type="text" name="nama_lengkap"/>
        </p>
        <p>
            Jurusan:
            <select name="select_jurusan">
                <option value="TIF">Teknik Informatika</option>
                <option value="TI">Teknik Industri</option>
                <option value="TE">Teknik Elektro</option>
                <option value="SI">Sistem Informasi</option>
                <option value="MT">Matematika</option>
            </select>
        </p>
        <p>
            Jenis kelamin:
            <label><input type="radio" name="jenis_kelamin" value="LK"/> Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="PR"/> Perempuan</label>
        </p>
        <p>
            Alamat:
            <textarea name="text_alamat"></textarea>
        </p>
        <input type="submit" name="Submit"/>
        <input type="reset" name="Reset"/>
    </form>
    </body>
</htm>
