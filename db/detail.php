<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
include "connection.php";
$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = ?";
$result = $connection->prepare($query);
$result->execute([$id]);
if($result->rowCount() === 1){
    $mahasiswa = $result->fetch();
    ?>
    <h1>Update Mahasiswa</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?=$mahasiswa['nim']?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?=$mahasiswa['nama']?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" <?=$mahasiswa['jenis_kelamin'] == 1 ? 'checked':''?> name="jenis_kelamin" value="1"> Laki-laki
                    <input type="radio" <?=$mahasiswa['jenis_kelamin'] == 0 ? 'checked':''?> name="jenis_kelamin" value="0"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tgl. Lahir</td>
                <td><input type="date" name="tgl_lahir" value="<?=$mahasiswa['tgl_lahir']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="4"><?=$mahasiswa['alamat']?></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Ubah</button> </td>
            </tr>
        </table>
    </form>
    <?php
}else{
    echo '<h3>ID #'.$id.' tidak ditemukan</h3>';
}